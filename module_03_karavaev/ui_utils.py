# Утилиты для улучшения пользовательского интерфейса

import tkinter as tk
from tkinter import ttk
from PIL import Image, ImageTk
import os

class UIUtils:
    """Утилиты для работы с UI элементами"""
    
    @staticmethod
    def create_gradient_frame(parent, color1, color2, width=200, height=50):
        """Создание градиентного фрейма (упрощенная версия)"""
        frame = tk.Frame(parent, bg=color1, width=width, height=height)
        return frame
    
    @staticmethod
    def add_shadow_effect(widget):
        """Добавление эффекта тени к виджету"""
        # Упрощенная реализация - просто добавляем рамку
        widget.configure(relief='raised', borderwidth=2)
    
    @staticmethod
    def create_rounded_button(parent, text, command=None, style=None):
        """Создание кнопки с закругленными углами (имитация)"""
        button = ttk.Button(parent, text=text, command=command)
        if style:
            button.configure(style=style)
        return button
    
    @staticmethod
    def create_info_panel(parent, title, content, icon="ℹ️"):
        """Создание информационной панели"""
        frame = ttk.LabelFrame(parent, text=f"{icon} {title}")
        
        content_label = ttk.Label(frame, text=content, 
                                 wraplength=300, justify=tk.LEFT)
        content_label.pack(padx=10, pady=10)
        
        return frame
    
    @staticmethod
    def create_status_bar(parent):
        """Создание строки состояния"""
        status_frame = ttk.Frame(parent)
        status_frame.pack(side=tk.BOTTOM, fill=tk.X)
        
        # Разделители
        ttk.Separator(status_frame, orient=tk.HORIZONTAL).pack(fill=tk.X)
        
        # Основная информация
        info_frame = ttk.Frame(status_frame)
        info_frame.pack(fill=tk.X, padx=5, pady=2)
        
        status_label = ttk.Label(info_frame, text="Готов")
        status_label.pack(side=tk.LEFT)
        
        time_label = ttk.Label(info_frame, text="")
        time_label.pack(side=tk.RIGHT)
        
        return status_frame, status_label, time_label
    
    @staticmethod
    def animate_widget(widget, property_name, start_value, end_value, duration=1000):
        """Простая анимация виджета"""
        # Упрощенная анимация - мгновенное изменение
        if hasattr(widget, 'configure'):
            widget.configure(**{property_name: end_value})
    
    @staticmethod
    def create_card_frame(parent, title, content=None):
        """Создание карточки с информацией"""
        # Основной фрейм карточки
        card_frame = ttk.LabelFrame(parent, text=title, padding=10)
        
        if content:
            content_label = ttk.Label(card_frame, text=content)
            content_label.pack(anchor=tk.W)
        
        return card_frame
    
    @staticmethod
    def show_tooltip(widget, text):
        """Показ всплывающей подсказки"""
        def on_enter(event):
            tooltip = tk.Toplevel()
            tooltip.wm_overrideredirect(True)
            tooltip.wm_geometry(f"+{event.x_root+10}+{event.y_root+10}")
            
            label = ttk.Label(tooltip, text=text, 
                             background="lightyellow", 
                             relief='solid', borderwidth=1)
            label.pack()
            
            widget.tooltip = tooltip
        
        def on_leave(event):
            if hasattr(widget, 'tooltip'):
                widget.tooltip.destroy()
                del widget.tooltip
        
        widget.bind("<Enter>", on_enter)
        widget.bind("<Leave>", on_leave)

class AdvancedTreeview(ttk.Treeview):
    """Расширенная версия Treeview с дополнительными возможностями"""
    
    def __init__(self, parent, **kwargs):
        super().__init__(parent, **kwargs)
        self.setup_enhancements()
    
    def setup_enhancements(self):
        """Настройка улучшений для таблицы"""
        # Альтернирующие цвета строк
        self.tag_configure('oddrow', background='#f0f0f0')
        self.tag_configure('evenrow', background='white')
        
        # Подсветка при наведении
        self.tag_configure('hover', background='#e6f3ff')
        
        # Привязка событий
        self.bind('<Motion>', self.on_hover)
        self.bind('<Leave>', self.on_leave)
        
    def on_hover(self, event):
        """Обработка наведения мыши"""
        item = self.identify_row(event.y)
        if item:
            self.configure_tags()
            self.set(item, '#0', self.item(item, 'text'))
            
    def on_leave(self, event):
        """Обработка ухода мыши"""
        self.configure_tags()
    
    def configure_tags(self):
        """Настройка тегов для строк"""
        for i, item in enumerate(self.get_children()):
            if i % 2 == 0:
                self.item(item, tags=('evenrow',))
            else:
                self.item(item, tags=('oddrow',))
    
    def insert_with_alternating_colors(self, parent='', index='end', **kwargs):
        """Вставка элемента с автоматическим чередованием цветов"""
        item = self.insert(parent, index, **kwargs)
        self.configure_tags()
        return item

class ModernDialog:
    """Современный диалог с улучшенным дизайном"""
    
    def __init__(self, parent, title="Диалог", size=(400, 300)):
        self.result = None
        self.parent = parent
        
        # Создание окна
        self.dialog = tk.Toplevel(parent)
        self.dialog.title(title)
        self.dialog.geometry(f"{size[0]}x{size[1]}")
        self.dialog.resizable(False, False)
        self.dialog.grab_set()
        
        # Стилизация
        self.dialog.configure(bg='#f8f9fa')
        
        # Центрирование
        self.center_window()
        
        # Настройка основного фрейма
        self.main_frame = ttk.Frame(self.dialog)
        self.main_frame.pack(fill=tk.BOTH, expand=True, padx=20, pady=20)
        
    def center_window(self):
        """Центрирование окна относительно родительского"""
        self.dialog.transient(self.parent)
        
        # Получение размеров
        parent_x = self.parent.winfo_rootx()
        parent_y = self.parent.winfo_rooty()
        parent_w = self.parent.winfo_width()
        parent_h = self.parent.winfo_height()
        
        dialog_w = self.dialog.winfo_reqwidth()
        dialog_h = self.dialog.winfo_reqheight()
        
        # Расчет позиции
        x = parent_x + (parent_w // 2) - (dialog_w // 2)
        y = parent_y + (parent_h // 2) - (dialog_h // 2)
        
        self.dialog.geometry(f"+{x}+{y}")
    
    def add_header(self, text, icon=""):
        """Добавление заголовка"""
        header_frame = ttk.Frame(self.main_frame)
        header_frame.pack(fill=tk.X, pady=(0, 20))
        
        header_text = f"{icon} {text}" if icon else text
        header_label = ttk.Label(header_frame, text=header_text, 
                                font=('Segoe UI', 14, 'bold'))
        header_label.pack()
        
        # Разделительная линия
        ttk.Separator(header_frame, orient=tk.HORIZONTAL).pack(fill=tk.X, pady=(10, 0))
        
        return header_frame
    
    def add_button_bar(self, buttons):
        """Добавление панели кнопок"""
        button_frame = ttk.Frame(self.main_frame)
        button_frame.pack(side=tk.BOTTOM, fill=tk.X, pady=(20, 0))
        
        for i, (text, command, style) in enumerate(buttons):
            btn = ttk.Button(button_frame, text=text, command=command)
            if style:
                btn.configure(style=style)
            btn.pack(side=tk.RIGHT, padx=(5, 0) if i > 0 else 0)
        
        return button_frame
