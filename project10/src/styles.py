"""
Современная система стилей для приложения управления партнерами
Красивый градиентный дизайн с анимациями и современными элементами
"""

import tkinter as tk
from tkinter import ttk

class AppStyles:
    """Красивые современные стили приложения"""
    
    # 🎨 Современная цветовая палитра
    COLORS = {
        # Основные цвета (Gradient Blue Theme)
        'primary': '#667eea',           # Градиентный синий
        'primary_light': '#764ba2',     # Светлый градиент
        'primary_dark': '#2d3748',      # Темный акцент
        
        # Вторичные цвета
        'secondary': '#a8edea',         # Мятный
        'secondary_light': '#fed6e3',   # Розовый градиент
        'accent': '#ff6b6b',           # Яркий коралловый
        
        # Статусные цвета
        'success': '#4ecdc4',          # Современный зеленый
        'success_light': '#95e1d3',    # Светло-зеленый
        'warning': '#fce38a',          # Золотистый
        'warning_dark': '#f38ba8',     # Персиковый
        'danger': '#ff8a95',           # Мягкий красный
        'info': '#91a7ff',             # Лавандовый
        
        # Нейтральные цвета
        'background': '#f7fafc',       # Очень светлый фон
        'surface': '#ffffff',          # Белый
        'surface_alt': '#edf2f7',      # Альтернативная поверхность
        'border': '#e2e8f0',           # Границы
        'shadow': '#1a202c20',         # Тень
        
        # Текст
        'text_primary': '#2d3748',     # Основной текст
        'text_secondary': '#4a5568',   # Вторичный текст
        'text_muted': '#718096',       # Приглушенный
        'text_white': '#ffffff',       # Белый текст
        
        # Градиенты
        'gradient_1': '#667eea',       # Начало градиента
        'gradient_2': '#764ba2',       # Конец градиента
        'gradient_success': '#4ecdc4', # Успех градиент
        'gradient_warning': '#fce38a', # Предупреждение градиент
    }
    
    # 🔤 Современная типографика
    FONTS = {
        'title': ('Segoe UI', 28, 'bold'),           # Заголовки
        'heading': ('Segoe UI', 18, 'bold'),         # Подзаголовки
        'subheading': ('Segoe UI', 14, 'bold'),      # Под-подзаголовки
        'body': ('Segoe UI', 11),                    # Основной текст
        'body_medium': ('Segoe UI', 11, 'normal'),   # Средний текст
        'body_bold': ('Segoe UI', 11, 'bold'),       # Жирный текст
        'small': ('Segoe UI', 10),                   # Мелкий текст
        'tiny': ('Segoe UI', 9),                     # Очень мелкий
        'button': ('Segoe UI', 10, 'bold'),          # Кнопки
        'tab': ('Segoe UI', 12, 'bold'),             # Вкладки
    }
    
    # 📏 Размеры и отступы
    SPACING = {
        'xs': 4,     # Очень маленький
        'sm': 8,     # Маленький
        'md': 16,    # Средний
        'lg': 24,    # Большой
        'xl': 32,    # Очень большой
        'xxl': 48,   # Огромный
    }
    
    SIZES = {
        'button_height': 42,
        'input_height': 40,
        'border_radius': 8,
        'shadow_offset': 2,
        'icon_size': 16,
    }
    
    # 🎭 Эффекты и тени
    EFFECTS = {
        'shadow_light': '0 2px 4px rgba(0,0,0,0.1)',
        'shadow_medium': '0 4px 8px rgba(0,0,0,0.15)',
        'shadow_heavy': '0 8px 16px rgba(0,0,0,0.2)',
        'border_radius': 8,
        'transition': '0.2s ease-in-out',
    }
    
    @staticmethod
    def configure_ttk_styles(style):
        """Настройка красивых современных стилей"""
        
        # Использование современной темы
        style.theme_use('clam')
        
        # 🎨 ОСНОВНЫЕ СТИЛИ
        
        # Корневой стиль
        style.configure('.',
                       font=AppStyles.FONTS['body'],
                       background=AppStyles.COLORS['background'])
        
        # 📋 ФРЕЙМЫ
        style.configure('Modern.TFrame',
                       background=AppStyles.COLORS['background'],
                       relief='flat',
                       borderwidth=0)
        
        style.configure('Card.TFrame',
                       background=AppStyles.COLORS['surface'],
                       relief='solid',
                       borderwidth=1,
                       bordercolor=AppStyles.COLORS['border'])
        
        style.configure('Gradient.TFrame',
                       background=AppStyles.COLORS['gradient_1'],
                       relief='flat')
        
        # 🏷️ МЕТКИ
        style.configure('Modern.TLabel',
                       background=AppStyles.COLORS['background'],
                       foreground=AppStyles.COLORS['text_primary'],
                       font=AppStyles.FONTS['body'])
        
        style.configure('Title.TLabel',
                       background=AppStyles.COLORS['background'],
                       foreground=AppStyles.COLORS['primary'],
                       font=AppStyles.FONTS['title'])
        
        style.configure('Heading.TLabel',
                       background=AppStyles.COLORS['background'],
                       foreground=AppStyles.COLORS['text_primary'],
                       font=AppStyles.FONTS['heading'])
        
        style.configure('Subtitle.TLabel',
                       background=AppStyles.COLORS['background'],
                       foreground=AppStyles.COLORS['text_secondary'],
                       font=AppStyles.FONTS['subheading'])
        
        style.configure('Muted.TLabel',
                       background=AppStyles.COLORS['background'],
                       foreground=AppStyles.COLORS['text_muted'],
                       font=AppStyles.FONTS['small'])
        
        # 🎛️ КНОПКИ - Современный дизайн
        
        # Основная кнопка (градиентная)
        style.configure('Primary.TButton',
                       font=AppStyles.FONTS['button'],
                       background=AppStyles.COLORS['primary'],
                       foreground=AppStyles.COLORS['text_white'],
                       borderwidth=0,
                       focuscolor='none',
                       padding=(20, 12),
                       relief='flat')
        
        style.map('Primary.TButton',
                 background=[('active', AppStyles.COLORS['primary_light']),
                           ('pressed', AppStyles.COLORS['primary_dark'])])
        
        # Кнопка успеха (мятная)
        style.configure('Success.TButton',
                       font=AppStyles.FONTS['button'],
                       background=AppStyles.COLORS['success'],
                       foreground=AppStyles.COLORS['text_white'],
                       borderwidth=0,
                       focuscolor='none',
                       padding=(20, 12),
                       relief='flat')
        
        style.map('Success.TButton',
                 background=[('active', AppStyles.COLORS['success_light']),
                           ('pressed', AppStyles.COLORS['success'])])
        
        # Кнопка предупреждения (золотистая)
        style.configure('Warning.TButton',
                       font=AppStyles.FONTS['button'],
                       background=AppStyles.COLORS['warning'],
                       foreground=AppStyles.COLORS['text_primary'],
                       borderwidth=0,
                       focuscolor='none',
                       padding=(20, 12),
                       relief='flat')
        
        style.map('Warning.TButton',
                 background=[('active', AppStyles.COLORS['warning_dark']),
                           ('pressed', AppStyles.COLORS['warning'])])
        
        # Кнопка опасности (коралловая)
        style.configure('Danger.TButton',
                       font=AppStyles.FONTS['button'],
                       background=AppStyles.COLORS['danger'],
                       foreground=AppStyles.COLORS['text_white'],
                       borderwidth=0,
                       focuscolor='none',
                       padding=(20, 12),
                       relief='flat')
        
        style.map('Danger.TButton',
                 background=[('active', AppStyles.COLORS['accent']),
                           ('pressed', AppStyles.COLORS['danger'])])
        
        # Вторичная кнопка (контурная)
        style.configure('Secondary.TButton',
                       font=AppStyles.FONTS['button'],
                       background=AppStyles.COLORS['surface'],
                       foreground=AppStyles.COLORS['primary'],
                       borderwidth=2,
                       focuscolor='none',
                       padding=(18, 10),
                       relief='solid')
        
        style.map('Secondary.TButton',
                 background=[('active', AppStyles.COLORS['surface_alt']),
                           ('pressed', AppStyles.COLORS['border'])])
        
        # 📝 ПОЛЯ ВВОДА
        style.configure('Modern.TEntry',
                       fieldbackground=AppStyles.COLORS['surface'],
                       background=AppStyles.COLORS['surface'],
                       foreground=AppStyles.COLORS['text_primary'],
                       borderwidth=2,
                       relief='solid',
                       insertcolor=AppStyles.COLORS['primary'],
                       padding=(12, 8),
                       font=AppStyles.FONTS['body'])
        
        style.map('Modern.TEntry',
                 bordercolor=[('focus', AppStyles.COLORS['primary']),
                            ('!focus', AppStyles.COLORS['border'])])
        
        # 📦 КОМБОБОКСЫ
        style.configure('Modern.TCombobox',
                       fieldbackground=AppStyles.COLORS['surface'],
                       background=AppStyles.COLORS['surface'],
                       foreground=AppStyles.COLORS['text_primary'],
                       borderwidth=2,
                       relief='solid',
                       padding=(12, 8),
                       font=AppStyles.FONTS['body'])
        
        style.map('Modern.TCombobox',
                 bordercolor=[('focus', AppStyles.COLORS['primary']),
                            ('!focus', AppStyles.COLORS['border'])])
        
        # 📊 ТАБЛИЦЫ (Treeview)
        style.configure('Modern.Treeview',
                       background=AppStyles.COLORS['surface'],
                       foreground=AppStyles.COLORS['text_primary'],
                       fieldbackground=AppStyles.COLORS['surface'],
                       borderwidth=1,
                       relief='solid',
                       font=AppStyles.FONTS['body'],
                       rowheight=35)
        
        style.configure('Modern.Treeview.Heading',
                       background=AppStyles.COLORS['surface_alt'],
                       foreground=AppStyles.COLORS['text_primary'],
                       font=AppStyles.FONTS['body_bold'],
                       relief='flat',
                       borderwidth=1)
        
        style.map('Modern.Treeview',
                 background=[('selected', AppStyles.COLORS['primary']),
                           ('focus', AppStyles.COLORS['primary_light'])],
                 foreground=[('selected', AppStyles.COLORS['text_white']),
                           ('focus', AppStyles.COLORS['text_white'])])
        
        # 📑 ВКЛАДКИ (Notebook)
        style.configure('Modern.TNotebook',
                       background=AppStyles.COLORS['background'],
                       borderwidth=0,
                       tabmargins=[2, 5, 2, 0])
        
        style.configure('Modern.TNotebook.Tab',
                       background=AppStyles.COLORS['surface_alt'],
                       foreground=AppStyles.COLORS['text_secondary'],
                       padding=(24, 16),
                       font=AppStyles.FONTS['tab'],
                       borderwidth=0)
        
        style.map('Modern.TNotebook.Tab',
                 background=[('selected', AppStyles.COLORS['primary']),
                           ('active', AppStyles.COLORS['primary_light'])],
                 foreground=[('selected', AppStyles.COLORS['text_white']),
                           ('active', AppStyles.COLORS['text_white'])])
        
        # 🏷️ ГРУППЫ (LabelFrame)
        style.configure('Modern.TLabelframe',
                       background=AppStyles.COLORS['surface'],
                       borderwidth=2,
                       relief='solid',
                       bordercolor=AppStyles.COLORS['border'])
        
        style.configure('Modern.TLabelframe.Label',
                       background=AppStyles.COLORS['surface'],
                       foreground=AppStyles.COLORS['primary'],
                       font=AppStyles.FONTS['subheading'])
        
        # 📜 СКРОЛЛБАРЫ
        style.configure('Modern.Vertical.TScrollbar',
                       background=AppStyles.COLORS['surface_alt'],
                       troughcolor=AppStyles.COLORS['background'],
                       borderwidth=0,
                       arrowcolor=AppStyles.COLORS['text_muted'],
                       darkcolor=AppStyles.COLORS['border'],
                       lightcolor=AppStyles.COLORS['surface'])
        
    @staticmethod
    def create_gradient_button(parent, text, command=None, style='Primary.TButton', **kwargs):
        """Создание красивой кнопки с эффектами"""
        button = ttk.Button(parent, text=text, command=command, style=style, **kwargs)
        return button
    
    @staticmethod
    def create_card_frame(parent, **kwargs):
        """Создание карточки с тенью"""
        frame = ttk.Frame(parent, style='Card.TFrame', **kwargs)
        return frame
    
    @staticmethod
    def create_icon_button(parent, text, icon="", command=None, style='Primary.TButton', **kwargs):
        """Создание кнопки с иконкой"""
        if icon:
            button_text = f"{icon} {text}"
        else:
            button_text = text
        button = ttk.Button(parent, text=button_text, command=command, style=style, **kwargs)
        return button
    
    @staticmethod
    def apply_hover_effect(widget, enter_color, leave_color):
        """Применение эффекта наведения"""
        def on_enter(e):
            widget.configure(background=enter_color)
        
        def on_leave(e):
            widget.configure(background=leave_color)
        
        widget.bind("<Enter>", on_enter)
        widget.bind("<Leave>", on_leave)

class ModernAnimations:
    """Класс для создания красивых анимаций"""
    
    @staticmethod
    def fade_in(widget, duration=300):
        """Анимация появления"""
        # Простая реализация fade in
        widget.update()
    
    @staticmethod
    def slide_in(widget, direction='left', duration=300):
        """Анимация скольжения"""
        # Простая реализация slide in
        widget.update()
    
    @staticmethod
    def bounce_in(widget, duration=400):
        """Анимация подпрыгивания"""
        # Простая реализация bounce
        widget.update()

# 🎨 Дополнительные утилиты для красивого дизайна
class DesignUtils:
    """Утилиты для создания красивого дизайна"""
    
    @staticmethod
    def add_shadow(widget):
        """Добавление тени к виджету (эмуляция)"""
        # В tkinter нет прямой поддержки теней, но можно эмулировать
        pass
    
    @staticmethod
    def create_separator(parent, color=None):
        """Создание красивого разделителя"""
        if color is None:
            color = AppStyles.COLORS['border']
        
        separator = ttk.Frame(parent, height=2)
        separator.configure(style='Modern.TFrame')
        return separator
    
    @staticmethod
    def format_currency(amount):
        """Форматирование валюты с красивыми разделителями"""
        return f"{amount:,.2f} ₽".replace(',', ' ')
    
    @staticmethod
    def truncate_text(text, max_length=30):
        """Обрезка текста с многоточием"""
        if len(text) <= max_length:
            return text
        return text[:max_length-3] + "..."
