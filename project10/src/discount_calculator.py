# Логика скидок

class DiscountCalculator:
    @staticmethod
    def calculate_discount(total_sales):
        if total_sales > 300000:
            return 15
        elif total_sales > 50000:
            return 10
        elif total_sales > 10000:
            return 5
        else:
            return 0

