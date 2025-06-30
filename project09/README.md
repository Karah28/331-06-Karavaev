# Partner Management System

Система управления партнерами с функциями учета транзакций и расчета скидок.

## Требования

- Java 11 или выше
- MySQL Server 8.0 или выше
- Maven 3.6 или выше

## Установка

1. **Установка MySQL:**
   - Скачайте и установите MySQL Server с [официального сайта](https://dev.mysql.com/downloads/mysql/)
   - Запустите MySQL Server
   - Откройте MySQL Command Line Client
   - Выполните скрипт `src/module_02_karavaev/src/database/setup.sql` для создания пользователя
   - Выполните скрипт `src/module_02_karavaev/src/database/init.sql` для создания базы данных и таблиц

2. **Установка Java:**
   - Скачайте и установите Java 11 или выше с [официального сайта](https://www.oracle.com/java/technologies/downloads/)
   - Установите переменную среды JAVA_HOME

3. **Установка Maven:**
   - Скачайте и установите Maven с [официального сайта](https://maven.apache.org/download.cgi)
   - Добавьте путь к Maven в переменную среды PATH

## Запуск приложения

1. **Автоматический запуск:**
   - Дважды кликните на файл `run.bat`
   - Скрипт проверит все зависимости и запустит приложение

2. **Ручной запуск:**
   ```bash
   mvn clean package
   java -jar target/partner-management-system-1.0-SNAPSHOT-jar-with-dependencies.jar
   ```

## Использование

1. **Управление партнерами:**
   - Вкладка "Partners" - добавление, редактирование и удаление партнеров
   - Для каждого партнера указывается:
     - Тип компании (LLC, Corp, Sole Proprietor, JSC, State Corporation)
     - Название компании
     - Имя CEO
     - Контактный телефон
     - Рейтинг (1-10)

2. **История транзакций:**
   - Вкладка "Transaction History" - учет продаж
   - Для каждой транзакции указывается:
     - Название продукта
     - Партнер
     - Количество
     - Дата

3. **Расчет скидок:**
   - Вкладка "Discount Management" - расчет скидок на основе рейтинга партнера
   - Скидки:
     - 15% для рейтинга 9-10
     - 10% для рейтинга 7-8
     - 5% для рейтинга 5-6
     - 2% для рейтинга 1-4

## Импорт данных

Для импорта данных из Excel:
1. Создайте файл по пути: `D:\projects\partner_system\src\main\java\module_01_karavaev\import_data\partners_import.xlsx`
2. Структура файла:
   - company_type
   - company_name
   - ceo_name
   - contact_email
   - contact_phone
   - registered_address
   - tax_id
   - performance_score
   - registration_date

## Устранение неполадок

1. **Ошибка подключения к базе данных:**
   - Проверьте, запущен ли MySQL Server
   - Убедитесь, что пользователь 'admin' создан и имеет права
   - Проверьте настройки в `DbConnector.java`

2. **Ошибка запуска приложения:**
   - Проверьте версию Java (должна быть 11 или выше)
   - Убедитесь, что все зависимости установлены
   - Проверьте логи в консоли

3. **Ошибка сборки проекта:**
   - Проверьте установку Maven
   - Убедитесь, что все зависимости доступны
   - Проверьте версии зависимостей в `pom.xml` 