import tkinter as tk
from tkinter import ttk, messagebox, filedialog
from database import DatabaseManager
from discount_calculator import DiscountCalculator
from styles import AppStyles
from datetime import datetime
import csv

class PartnerManagementApp:
    def __init__(self, root):
        self.root = root
        self.root.title("Система управления партнерами")
        self.root.geometry("1400x900")
        self.root.configure(bg=AppStyles.COLORS['background'])
        
        # Установка иконки (если есть)
        try:
            self.root.iconbitmap(default='icon.ico')
        except:
            pass
        
        # Инициализация базы данных
        self.db = DatabaseManager()
        self.discount_calc = DiscountCalculator()
        
        self.setup_ui()
        self.load_partners()
        
    def setup_ui(self):
        """Настройка пользовательского интерфейса"""
        # Применение стилей
        style = ttk.Style()
        AppStyles.configure_ttk_styles(style)
        
        # Заголовок приложения
        title_frame = ttk.Frame(self.root)
        title_frame.pack(fill=tk.X, padx=10, pady=(10, 0))
        
        title_label = ttk.Label(title_frame, 
                               text="🏢 Система управления партнерами", 
                               font=AppStyles.FONTS['title'])
        title_label.pack(pady=10)

        # Главное меню
        menubar = tk.Menu(self.root)
        self.root.config(menu=menubar)
        
        file_menu = tk.Menu(menubar, tearoff=0)
        menubar.add_cascade(label="Файл", menu=file_menu)
        file_menu.add_command(label="Импорт данных", command=self.import_data)
        file_menu.add_command(label="Экспорт в PDF", command=self.export_pdf)
        file_menu.add_separator()
        file_menu.add_command(label="Выход", command=self.root.quit)
        
        edit_menu = tk.Menu(menubar, tearoff=0)
        menubar.add_cascade(label="Правка", menu=edit_menu)
        edit_menu.add_command(label="Добавить партнера", command=self.add_partner_dialog)
        edit_menu.add_command(label="Редактировать партнера", command=self.edit_partner_dialog)
        
        # Создание вкладок
        self.notebook = ttk.Notebook(self.root)
        self.notebook.pack(fill=tk.BOTH, expand=True, padx=10, pady=10)
        
        # Вкладка "Партнеры"
        self.partners_frame = ttk.Frame(self.notebook)
        self.notebook.add(self.partners_frame, text="Партнеры")
        self.setup_partners_tab()
        
        # Вкладка "Учет продаж"
        self.sales_frame = ttk.Frame(self.notebook)
        self.notebook.add(self.sales_frame, text="Учет продаж")
        self.setup_sales_tab()
        
    def setup_partners_tab(self):
        """Настройка вкладки партнеров"""
        # Фрейм для кнопок
        buttons_frame = ttk.Frame(self.partners_frame)
        buttons_frame.grid(row=0, column=0, pady=10, sticky="w")
        
        ttk.Button(buttons_frame, text="➕ Добавить партнера", 
                  command=self.add_partner_dialog, 
                  style='Success.TButton').grid(row=0, column=0, padx=5)
        ttk.Button(buttons_frame, text="✏️ Редактировать", 
                  command=self.edit_partner_dialog, 
                  style='Warning.TButton').grid(row=0, column=1, padx=5)
        ttk.Button(buttons_frame, text="🔄 Обновить", 
                  command=self.load_partners).grid(row=0, column=2, padx=5)
        
        # Таблица партнеров
        columns = ('ID', 'Тип', 'Наименование', 'Директор', 'Email', 'Телефон', 'Адрес', 'Рейтинг', 'Скидка')
        self.partners_tree = ttk.Treeview(self.partners_frame, columns=columns, show='headings')
        
        for col in columns:
            self.partners_tree.heading(col, text=col)
            if col == 'ID':
                self.partners_tree.column(col, width=50)
            elif col in ['Тип', 'Рейтинг', 'Скидка']:
                self.partners_tree.column(col, width=80)
            elif col in ['Email', 'Телефон']:
                self.partners_tree.column(col, width=120)
            else:
                self.partners_tree.column(col, width=150)
        
        # Скроллбар для таблицы
        scrollbar = ttk.Scrollbar(self.partners_frame, orient=tk.VERTICAL, command=self.partners_tree.yview)
        self.partners_tree.configure(yscrollcommand=scrollbar.set)
        
        # Компоновка
        self.partners_tree.grid(row=1, column=0, sticky='nsew')
        scrollbar.grid(row=1, column=1, sticky='ns')

        self.partners_frame.rowconfigure(1, weight=1)
        self.partners_frame.columnconfigure(0, weight=1)
        
    def setup_sales_tab(self):
        """Настройка вкладки учета продаж"""
        # Форма для добавления продаж
        form_frame = ttk.LabelFrame(self.sales_frame, text="📊 Добавить продажу")
        form_frame.pack(fill=tk.X, padx=10, pady=10)
        
        # Партнер
        ttk.Label(form_frame, text="Партнер:").grid(row=0, column=0, sticky=tk.W, padx=5, pady=5)
        self.partner_var = tk.StringVar()
        self.partner_combo = ttk.Combobox(form_frame, textvariable=self.partner_var, state="readonly")
        self.partner_combo.grid(row=0, column=1, sticky=tk.W+tk.E, padx=5, pady=5)
        
        # Продукт
        ttk.Label(form_frame, text="Продукт:").grid(row=0, column=2, sticky=tk.W, padx=5, pady=5)
        self.product_var = tk.StringVar()
        self.product_combo = ttk.Combobox(form_frame, textvariable=self.product_var, state="readonly")
        self.product_combo.grid(row=0, column=3, sticky=tk.W+tk.E, padx=5, pady=5)
        
        # Количество
        ttk.Label(form_frame, text="Количество:").grid(row=1, column=0, sticky=tk.W, padx=5, pady=5)
        self.quantity_var = tk.StringVar()
        ttk.Entry(form_frame, textvariable=self.quantity_var).grid(row=1, column=1, sticky=tk.W+tk.E, padx=5, pady=5)
        
        # Дата
        ttk.Label(form_frame, text="Дата:").grid(row=1, column=2, sticky=tk.W, padx=5, pady=5)
        self.date_var = tk.StringVar(value=datetime.now().strftime("%Y-%m-%d"))
        ttk.Entry(form_frame, textvariable=self.date_var).grid(row=1, column=3, sticky=tk.W+tk.E, padx=5, pady=5)
        
        # Кнопка добавления
        ttk.Button(form_frame, text="💾 Добавить продажу", 
                  command=self.add_sale, 
                  style='Success.TButton').grid(row=2, column=0, columnspan=4, pady=10)
        
        form_frame.columnconfigure(1, weight=1)
        form_frame.columnconfigure(3, weight=1)
        
        self.load_combo_data()
        
    def load_combo_data(self):
        """Загрузка данных для комбобоксов"""
        # Загрузка партнеров
        partners = self.db.get_all_partners()
        partner_list = [f"{p[0]} - {p[2]}" for p in partners]
        self.partner_combo['values'] = partner_list
        
        # Загрузка продуктов
        products = self.db.get_products()
        product_list = [f"{p[0]} - {p[1]} ({p[3]} руб.)" for p in products]
        self.product_combo['values'] = product_list
        
    def load_partners(self):
        """Загрузка партнеров в таблицу"""
        # Очистка таблицы
        for item in self.partners_tree.get_children():
            self.partners_tree.delete(item)
        
        # Загрузка данных
        partners = self.db.get_all_partners()
        for partner in partners:
            partner_id = partner[0]
            total_sales = self.db.get_partner_sales_total(partner_id)
            discount = self.discount_calc.calculate_discount(total_sales)
            
            # Вставка данных в таблицу
            self.partners_tree.insert('', tk.END, values=(*partner, f"{discount}%"))
    
    def add_partner_dialog(self):
        """Диалог добавления партнера"""
        dialog = PartnerDialog(self.root, self.db, title="Добавить партнера")
        if dialog.result:
            self.load_partners()
            self.load_combo_data()
    
    def edit_partner_dialog(self):
        """Диалог редактирования партнера"""
        selection = self.partners_tree.selection()
        if not selection:
            messagebox.showwarning("Предупреждение", "Выберите партнера для редактирования")
            return
        
        item = self.partners_tree.item(selection[0])
        partner_data = item['values']
        partner_id = partner_data[0]
        
        dialog = PartnerDialog(self.root, self.db, title="Редактировать партнера", 
                             partner_id=partner_id, partner_data=partner_data)
        if dialog.result:
            self.load_partners()
            self.load_combo_data()
    
    def add_sale(self):
        """Добавление продажи"""
        try:
            partner_info = self.partner_var.get()
            product_info = self.product_var.get()
            quantity = int(self.quantity_var.get())
            sale_date = self.date_var.get()
            
            if not all([partner_info, product_info, quantity, sale_date]):
                messagebox.showerror("Ошибка", "Заполните все поля")
                return
            
            partner_id = int(partner_info.split(' - ')[0])
            product_id = int(product_info.split(' - ')[0])
            
            self.db.add_sale(partner_id, product_id, quantity, sale_date)
            messagebox.showinfo("Успех", "Продажа добавлена")
            
            # Очистка формы
            self.quantity_var.set("")
            self.date_var.set(datetime.now().strftime("%Y-%m-%d"))
            
            # Обновление таблицы партнеров для пересчета скидок
            self.load_partners()
            
        except ValueError:
            messagebox.showerror("Ошибка", "Неверный формат данных")
        except Exception as e:
            messagebox.showerror("Ошибка", f"Ошибка при добавлении продажи: {str(e)}")
    
    def import_data(self):
        """Импорт данных из файла"""
        file_path = filedialog.askopenfilename(
            title="Выберите файл для импорта",
            filetypes=[("CSV files", "*.csv"), ("All files", "*.*")]
        )
        
        if file_path:
            try:
                with open(file_path, 'r', encoding='utf-8') as file:
                    reader = csv.DictReader(file)
                    imported_count = 0
                    
                    for row in reader:
                        # Предполагаем структуру CSV: Тип,Наименование,Директор,Email,Телефон,Адрес,Рейтинг
                        type_name = row.get('Тип', '').strip()
                        
                        # Найти ID типа партнера
                        types = self.db.get_partner_types()
                        type_id = None
                        for t in types:
                            if t[1] == type_name:
                                type_id = t[0]
                                break
                        
                        if type_id:
                            self.db.add_partner(
                                type_id,
                                row.get('Наименование', '').strip(),
                                row.get('Директор', '').strip(),
                                row.get('Email', '').strip(),
                                row.get('Телефон', '').strip(),
                                row.get('Адрес', '').strip(),
                                int(row.get('Рейтинг', 0))
                            )
                            imported_count += 1
                
                messagebox.showinfo("Импорт", f"Импортировано {imported_count} записей")
                self.load_partners()
                self.load_combo_data()
                
            except Exception as e:
                messagebox.showerror("Ошибка", f"Ошибка при импорте: {str(e)}")
    
    def export_pdf(self):
        """Экспорт в PDF (упрощенная версия)"""
        file_path = filedialog.asksaveasfilename(
            title="Сохранить отчет",
            defaultextension=".txt",
            filetypes=[("Text files", "*.txt"), ("All files", "*.*")]
        )
        
        if file_path:
            try:
                partners = self.db.get_all_partners()
                with open(file_path, 'w', encoding='utf-8') as file:
                    file.write("ОТЧЕТ ПО ПАРТНЕРАМ\n")
                    file.write("=" * 50 + "\n\n")
                    
                    for partner in partners:
                        partner_id = partner[0]
                        total_sales = self.db.get_partner_sales_total(partner_id)
                        discount = self.discount_calc.calculate_discount(total_sales)
                        
                        file.write(f"Тип: {partner[1]}\n")
                        file.write(f"Наименование: {partner[2]}\n")
                        file.write(f"Директор: {partner[3]}\n")
                        file.write(f"Email: {partner[4]}\n")
                        file.write(f"Телефон: {partner[5]}\n")
                        file.write(f"Адрес: {partner[6]}\n")
                        file.write(f"Рейтинг: {partner[7]}\n")
                        file.write(f"Общие продажи: {total_sales:.2f} руб.\n")
                        file.write(f"Скидка: {discount}%\n")
                        file.write("-" * 30 + "\n\n")
                
                messagebox.showinfo("Экспорт", "Отчет сохранен успешно")
                
            except Exception as e:
                messagebox.showerror("Ошибка", f"Ошибка при экспорте: {str(e)}")


class PartnerDialog:
    def __init__(self, parent, db, title="Партнер", partner_id=None, partner_data=None):
        self.result = False
        self.db = db
        self.partner_id = partner_id
        
        # Создание окна
        self.dialog = tk.Toplevel(parent)
        self.dialog.title(title)
        self.dialog.geometry("400x500")
        self.dialog.resizable(False, False)
        self.dialog.grab_set()  # Модальность
        
        self.setup_form()
        
        if partner_data:
            self.fill_form(partner_data)
        
        # Центрирование окна
        self.dialog.transient(parent)
        self.dialog.geometry("+%d+%d" % (parent.winfo_rootx() + 50, parent.winfo_rooty() + 50))
        
    def setup_form(self):
        """Настройка формы"""
        main_frame = ttk.Frame(self.dialog)
        main_frame.pack(fill=tk.BOTH, expand=True, padx=20, pady=20)
        
        # Тип партнера
        ttk.Label(main_frame, text="Тип партнера:").grid(row=0, column=0, sticky=tk.W, pady=5)
        self.type_var = tk.StringVar()
        self.type_combo = ttk.Combobox(main_frame, textvariable=self.type_var, state="readonly")
        self.type_combo.grid(row=0, column=1, sticky=tk.W+tk.E, pady=5)
        
        # Загрузка типов
        types = self.db.get_partner_types()
        self.type_combo['values'] = [t[1] for t in types]
        
        # Наименование
        ttk.Label(main_frame, text="Наименование:").grid(row=1, column=0, sticky=tk.W, pady=5)
        self.name_var = tk.StringVar()
        ttk.Entry(main_frame, textvariable=self.name_var).grid(row=1, column=1, sticky=tk.W+tk.E, pady=5)
        
        # Директор
        ttk.Label(main_frame, text="Директор:").grid(row=2, column=0, sticky=tk.W, pady=5)
        self.director_var = tk.StringVar()
        ttk.Entry(main_frame, textvariable=self.director_var).grid(row=2, column=1, sticky=tk.W+tk.E, pady=5)
        
        # Email
        ttk.Label(main_frame, text="Email:").grid(row=3, column=0, sticky=tk.W, pady=5)
        self.email_var = tk.StringVar()
        ttk.Entry(main_frame, textvariable=self.email_var).grid(row=3, column=1, sticky=tk.W+tk.E, pady=5)
        
        # Телефон
        ttk.Label(main_frame, text="Телефон:").grid(row=4, column=0, sticky=tk.W, pady=5)
        self.phone_var = tk.StringVar()
        ttk.Entry(main_frame, textvariable=self.phone_var).grid(row=4, column=1, sticky=tk.W+tk.E, pady=5)
        
        # Адрес
        ttk.Label(main_frame, text="Адрес:").grid(row=5, column=0, sticky=tk.W, pady=5)
        self.address_var = tk.StringVar()
        address_entry = tk.Text(main_frame, height=3, width=30)
        address_entry.grid(row=5, column=1, sticky=tk.W+tk.E, pady=5)
        self.address_text = address_entry
        
        # Рейтинг
        ttk.Label(main_frame, text="Рейтинг:").grid(row=6, column=0, sticky=tk.W, pady=5)
        self.rating_var = tk.StringVar()
        ttk.Entry(main_frame, textvariable=self.rating_var).grid(row=6, column=1, sticky=tk.W+tk.E, pady=5)
        
        # Кнопки
        buttons_frame = ttk.Frame(main_frame)
        buttons_frame.grid(row=7, column=0, columnspan=2, pady=20)
        
        ttk.Button(buttons_frame, text="💾 Сохранить", 
                  command=self.save, 
                  style='Success.TButton').pack(side=tk.LEFT, padx=5)
        ttk.Button(buttons_frame, text="❌ Отмена", 
                  command=self.cancel, 
                  style='Danger.TButton').pack(side=tk.LEFT, padx=5)
        
        main_frame.columnconfigure(1, weight=1)
        
    def fill_form(self, partner_data):
        """Заполнение формы данными партнера"""
        self.type_var.set(partner_data[1])  # Тип
        self.name_var.set(partner_data[2])  # Наименование
        self.director_var.set(partner_data[3])  # Директор
        self.email_var.set(partner_data[4])  # Email
        self.phone_var.set(partner_data[5])  # Телефон
        self.address_text.insert('1.0', partner_data[6])  # Адрес
        self.rating_var.set(str(partner_data[7]))  # Рейтинг
        
    def save(self):
        """Сохранение данных"""
        try:
            # Получение ID типа
            type_name = self.type_var.get()
            types = self.db.get_partner_types()
            type_id = None
            for t in types:
                if t[1] == type_name:
                    type_id = t[0]
                    break
            
            if not type_id:
                messagebox.showerror("Ошибка", "Выберите тип партнера")
                return
            
            name = self.name_var.get().strip()
            director = self.director_var.get().strip()
            email = self.email_var.get().strip()
            phone = self.phone_var.get().strip()
            address = self.address_text.get('1.0', tk.END).strip()
            rating = int(self.rating_var.get() or 0)
            
            if not name:
                messagebox.showerror("Ошибка", "Введите наименование партнера")
                return
            
            if self.partner_id:
                # Обновление
                self.db.update_partner(
                    self.partner_id,
                    name=name,
                    director=director,
                    email=email,
                    phone=phone,
                    legal_address=address,
                    rating=rating
                )
            else:
                # Добавление
                self.db.add_partner(type_id, name, director, email, phone, address, rating)
            
            self.result = True
            self.dialog.destroy()
            
        except ValueError:
            messagebox.showerror("Ошибка", "Неверный формат рейтинга")
        except Exception as e:
            messagebox.showerror("Ошибка", f"Ошибка при сохранении: {str(e)}")
    
    def cancel(self):
        """Отмена"""
        self.dialog.destroy()


if __name__ == "__main__":
    root = tk.Tk()
    app = PartnerManagementApp(root)
    root.mainloop()
