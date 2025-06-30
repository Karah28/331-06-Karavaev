# Конфигурация стилей для приложения

class AppStyles:
    """Класс для управления стилями приложения"""
    
    # Цветовая схема
    COLORS = {
        'primary': '#2c3e50',      # Темно-синий
        'secondary': '#3498db',    # Синий
        'success': '#27ae60',      # Зеленый
        'warning': '#f39c12',      # Оранжевый
        'danger': '#e74c3c',       # Красный
        'light': '#ecf0f1',        # Светло-серый
        'dark': '#34495e',         # Темно-серый
        'white': '#ffffff',        # Белый
        'background': '#f8f9fa',   # Фон
    }
    
    # Шрифты
    FONTS = {
        'default': ('Segoe UI', 10),
        'heading': ('Segoe UI', 12, 'bold'),
        'small': ('Segoe UI', 8),
        'button': ('Segoe UI', 10),
        'title': ('Segoe UI', 14, 'bold'),
    }
    
    # Размеры
    SIZES = {
        'button_height': 35,
        'entry_height': 30,
        'padding': 10,
        'margin': 5,
    }
    
    @staticmethod
    def configure_ttk_styles(style):
        """Настройка стилей ttk виджетов"""
        
        # Общие настройки
        style.theme_use('clam')
        
        # Стиль для Frame
        style.configure('TFrame', 
                       background=AppStyles.COLORS['background'])
        
        # Стиль для LabelFrame
        style.configure('TLabelframe', 
                       background=AppStyles.COLORS['background'],
                       borderwidth=2,
                       relief='ridge')
        style.configure('TLabelframe.Label', 
                       background=AppStyles.COLORS['background'],
                       font=AppStyles.FONTS['heading'])
        
        # Стиль для Label
        style.configure('TLabel', 
                       background=AppStyles.COLORS['background'],
                       font=AppStyles.FONTS['default'])
        
        # Стиль для Button
        style.configure('TButton', 
                       font=AppStyles.FONTS['button'],
                       padding=(10, 5))
        
        # Стили для специальных кнопок
        style.configure('Success.TButton',
                       background=AppStyles.COLORS['success'],
                       foreground=AppStyles.COLORS['white'])
        
        style.configure('Warning.TButton',
                       background=AppStyles.COLORS['warning'],
                       foreground=AppStyles.COLORS['white'])
        
        style.configure('Danger.TButton',
                       background=AppStyles.COLORS['danger'],
                       foreground=AppStyles.COLORS['white'])
        
        # Стиль для Entry
        style.configure('TEntry', 
                       font=AppStyles.FONTS['default'],
                       padding=5)
        
        # Стиль для Combobox
        style.configure('TCombobox', 
                       font=AppStyles.FONTS['default'])
        
        # Стиль для Notebook
        style.configure('TNotebook', 
                       background=AppStyles.COLORS['background'])
        style.configure('TNotebook.Tab', 
                       font=AppStyles.FONTS['default'],
                       padding=(12, 8))
        
        # Стиль для Treeview
        style.configure('Treeview', 
                       font=AppStyles.FONTS['default'],
                       rowheight=25)
        style.configure('Treeview.Heading', 
                       font=AppStyles.FONTS['heading'])
        
        # Альтернирующие цвета строк в таблице
        style.configure('Treeview', 
                       background=AppStyles.COLORS['white'])
        style.map('Treeview', 
                  background=[('selected', AppStyles.COLORS['secondary'])])
        
        # Стиль для Scrollbar
        style.configure('TScrollbar',
                       background=AppStyles.COLORS['light'],
                       troughcolor=AppStyles.COLORS['background'])
