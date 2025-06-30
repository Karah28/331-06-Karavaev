import sqlite3
import os
from datetime import datetime

class DatabaseManager:
    def __init__(self, db_path="partner_system.db"):
        self.db_path = db_path
        self.init_database()
    
    def init_database(self):
        """Инициализация базы данных SQLite"""
        conn = sqlite3.connect(self.db_path)
        cursor = conn.cursor()
        
        # Создание таблиц
        cursor.execute('''
            CREATE TABLE IF NOT EXISTS partner_types (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                type_name TEXT NOT NULL UNIQUE,
                description TEXT
            )
        ''')
        
        cursor.execute('''
            CREATE TABLE IF NOT EXISTS partners (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                type_id INTEGER NOT NULL,
                name TEXT NOT NULL,
                director TEXT,
                email TEXT,
                phone TEXT,
                legal_address TEXT,
                rating INTEGER DEFAULT 0,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (type_id) REFERENCES partner_types(id)
            )
        ''')
        
        cursor.execute('''
            CREATE TABLE IF NOT EXISTS partner_history (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                partner_id INTEGER NOT NULL,
                field_name TEXT NOT NULL,
                old_value TEXT,
                new_value TEXT,
                changed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                changed_by TEXT,
                FOREIGN KEY (partner_id) REFERENCES partners(id)
            )
        ''')
        
        cursor.execute('''
            CREATE TABLE IF NOT EXISTS products (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                article TEXT UNIQUE,
                description TEXT,
                min_cost REAL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ''')
        
        cursor.execute('''
            CREATE TABLE IF NOT EXISTS partner_sales (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                partner_id INTEGER NOT NULL,
                product_id INTEGER NOT NULL,
                quantity INTEGER NOT NULL,
                sale_date DATE NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (partner_id) REFERENCES partners(id),
                FOREIGN KEY (product_id) REFERENCES products(id)
            )
        ''')
        
        # Вставка начальных данных
        cursor.execute("SELECT COUNT(*) FROM partner_types")
        if cursor.fetchone()[0] == 0:
            cursor.executemany('''
                INSERT INTO partner_types (type_name, description) VALUES (?, ?)
            ''', [
                ('ОАО', 'Открытое акционерное общество'),
                ('ООО', 'Общество с ограниченной ответственностью'),
                ('ПАО', 'Публичное акционерное общество'),
                ('ЗАО', 'Закрытое акционерное общество')
            ])
        
        cursor.execute("SELECT COUNT(*) FROM partners")
        if cursor.fetchone()[0] == 0:
            cursor.executemany('''
                INSERT INTO partners (type_id, name, director, email, phone, legal_address, rating) 
                VALUES (?, ?, ?, ?, ?, ?, ?)
            ''', [
                (2, 'База Строитель', 'Иванов И.И.', 'info@bazostroi.ru', '+7(123)555-55-55', 'г. Приморск, ул. Парковая, 21', 7),
                (1, 'Паркет 29', 'Петров П.П.', 'contact@parket29.ru', '+7(987)123-45-67', 'г. Приморск, ул. Лесная, 15', 5),
                (2, 'Стройсервис', 'Сидоров С.С.', 'service@stroiserv.ru', '+7(456)789-01-23', 'г. Приморск, ул. Рабочая, 18', 9)
            ])
        
        cursor.execute("SELECT COUNT(*) FROM products")
        if cursor.fetchone()[0] == 0:
            cursor.executemany('''
                INSERT INTO products (name, article, description, min_cost) VALUES (?, ?, ?, ?)
            ''', [
                ('Ламинат Artens', 'ART001', 'Износостойкий ламинат класса 32', 500.00),
                ('Паркетная доска Boen', 'BOE002', 'Натуральная паркетная доска дуб', 1200.00),
                ('Инженерная доска', 'ENG003', 'Двухслойная инженерная доска', 800.00)
            ])
        
        conn.commit()
        conn.close()
    
    def get_connection(self):
        """Получение соединения с базой данных"""
        return sqlite3.connect(self.db_path)
    
    def get_all_partners(self):
        """Получение всех партнеров"""
        conn = self.get_connection()
        cursor = conn.cursor()
        cursor.execute('''
            SELECT p.id, pt.type_name, p.name, p.director, p.email, p.phone, p.legal_address, p.rating
            FROM partners p
            JOIN partner_types pt ON p.type_id = pt.id
        ''')
        partners = cursor.fetchall()
        conn.close()
        return partners
    
    def add_partner(self, type_id, name, director, email, phone, legal_address, rating=0):
        """Добавление нового партнера"""
        conn = self.get_connection()
        cursor = conn.cursor()
        cursor.execute('''
            INSERT INTO partners (type_id, name, director, email, phone, legal_address, rating)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ''', (type_id, name, director, email, phone, legal_address, rating))
        conn.commit()
        partner_id = cursor.lastrowid
        conn.close()
        return partner_id
    
    def update_partner(self, partner_id, **kwargs):
        """Обновление данных партнера с сохранением истории"""
        conn = self.get_connection()
        cursor = conn.cursor()
        
        # Получение текущих данных для истории
        cursor.execute('SELECT * FROM partners WHERE id = ?', (partner_id,))
        current_data = cursor.fetchone()
        
        if not current_data:
            conn.close()
            return False
        
        # Обновление данных
        for field, new_value in kwargs.items():
            if field in ['name', 'director', 'email', 'phone', 'legal_address', 'rating']:
                cursor.execute(f'UPDATE partners SET {field} = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?', 
                             (new_value, partner_id))
        
        conn.commit()
        conn.close()
        return True
    
    def get_partner_types(self):
        """Получение всех типов партнеров"""
        conn = self.get_connection()
        cursor = conn.cursor()
        cursor.execute('SELECT id, type_name FROM partner_types')
        types = cursor.fetchall()
        conn.close()
        return types
    
    def get_partner_sales_total(self, partner_id):
        """Получение общей суммы продаж партнера"""
        conn = self.get_connection()
        cursor = conn.cursor()
        cursor.execute('''
            SELECT SUM(ps.quantity * pr.min_cost) as total_sales
            FROM partner_sales ps
            JOIN products pr ON ps.product_id = pr.id
            WHERE ps.partner_id = ?
        ''', (partner_id,))
        result = cursor.fetchone()
        conn.close()
        return result[0] if result[0] else 0
    
    def add_sale(self, partner_id, product_id, quantity, sale_date):
        """Добавление записи о продаже"""
        conn = self.get_connection()
        cursor = conn.cursor()
        cursor.execute('''
            INSERT INTO partner_sales (partner_id, product_id, quantity, sale_date)
            VALUES (?, ?, ?, ?)
        ''', (partner_id, product_id, quantity, sale_date))
        conn.commit()
        conn.close()
        return True
    
    def get_products(self):
        """Получение всех продуктов"""
        conn = self.get_connection()
        cursor = conn.cursor()
        cursor.execute('SELECT id, name, article, min_cost FROM products')
        products = cursor.fetchall()
        conn.close()
        return products
    
    def get_sales_statistics(self):
        """Получение статистики продаж для дашборда"""
        conn = self.get_connection()
        cursor = conn.cursor()
        
        # Общее количество партнеров
        cursor.execute('SELECT COUNT(*) FROM partners')
        total_partners = cursor.fetchone()[0]
        
        # Общая сумма продаж
        cursor.execute('''
            SELECT COALESCE(SUM(ps.quantity * pr.min_cost), 0) as total_sales
            FROM partner_sales ps
            JOIN products pr ON ps.product_id = pr.id
        ''')
        total_sales = cursor.fetchone()[0]
        
        # Количество продуктов
        cursor.execute('SELECT COUNT(*) FROM products')
        total_products = cursor.fetchone()[0]
        
        # Количество продаж за текущий месяц
        cursor.execute('''
            SELECT COUNT(*) FROM partner_sales 
            WHERE strftime('%Y-%m', sale_date) = strftime('%Y-%m', 'now')
        ''')
        monthly_sales = cursor.fetchone()[0]
        
        # Топ партнеры по продажам
        cursor.execute('''
            SELECT p.name, COALESCE(SUM(ps.quantity * pr.min_cost), 0) as sales_total
            FROM partners p
            LEFT JOIN partner_sales ps ON p.id = ps.partner_id
            LEFT JOIN products pr ON ps.product_id = pr.id
            GROUP BY p.id, p.name
            ORDER BY sales_total DESC
            LIMIT 5
        ''')
        top_partners = cursor.fetchall()
        
        conn.close()
        
        return {
            'total_partners': total_partners,
            'total_sales': total_sales,
            'total_products': total_products,
            'monthly_sales': monthly_sales,
            'top_partners': top_partners
        }
