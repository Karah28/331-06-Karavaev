package module_02_karavaev.src.models;

import java.math.BigDecimal;
import java.util.Date;

public class Sale {
    private int saleId;
    private int productId;
    private int partnerId;
    private int quantity;
    private BigDecimal unitPrice;
    private BigDecimal discountPercentage;
    private BigDecimal finalPrice;
    private Date saleDate;
    private PaymentStatus paymentStatus;
    private Date paymentDate;
    private String invoiceNumber;
    private String notes;

    public enum PaymentStatus {
        PENDING, PAID, CANCELLED
    }

    // Конструктор
    public Sale() {
        this.paymentStatus = PaymentStatus.PENDING;
        this.saleDate = new Date();
        this.discountPercentage = BigDecimal.ZERO;
    }

    // Геттеры и сеттеры
    public int getSaleId() {
        return saleId;
    }

    public void setSaleId(int saleId) {
        this.saleId = saleId;
    }

    public int getProductId() {
        return productId;
    }

    public void setProductId(int productId) {
        this.productId = productId;
    }

    public int getPartnerId() {
        return partnerId;
    }

    public void setPartnerId(int partnerId) {
        this.partnerId = partnerId;
    }

    public int getQuantity() {
        return quantity;
    }

    public void setQuantity(int quantity) {
        this.quantity = quantity;
    }

    public BigDecimal getUnitPrice() {
        return unitPrice;
    }

    public void setUnitPrice(BigDecimal unitPrice) {
        this.unitPrice = unitPrice;
        calculateFinalPrice();
    }

    public BigDecimal getDiscountPercentage() {
        return discountPercentage;
    }

    public void setDiscountPercentage(BigDecimal discountPercentage) {
        this.discountPercentage = discountPercentage;
        calculateFinalPrice();
    }

    public BigDecimal getFinalPrice() {
        return finalPrice;
    }

    public Date getSaleDate() {
        return saleDate;
    }

    public void setSaleDate(Date saleDate) {
        this.saleDate = saleDate;
    }

    public PaymentStatus getPaymentStatus() {
        return paymentStatus;
    }

    public void setPaymentStatus(PaymentStatus paymentStatus) {
        this.paymentStatus = paymentStatus;
    }

    public Date getPaymentDate() {
        return paymentDate;
    }

    public void setPaymentDate(Date paymentDate) {
        this.paymentDate = paymentDate;
    }

    public String getInvoiceNumber() {
        return invoiceNumber;
    }

    public void setInvoiceNumber(String invoiceNumber) {
        this.invoiceNumber = invoiceNumber;
    }

    public String getNotes() {
        return notes;
    }

    public void setNotes(String notes) {
        this.notes = notes;
    }

    // Вспомогательные методы
    private void calculateFinalPrice() {
        if (unitPrice != null && quantity > 0) {
            BigDecimal totalPrice = unitPrice.multiply(BigDecimal.valueOf(quantity));
            if (discountPercentage != null && discountPercentage.compareTo(BigDecimal.ZERO) > 0) {
                BigDecimal discount = totalPrice.multiply(discountPercentage).divide(BigDecimal.valueOf(100));
                this.finalPrice = totalPrice.subtract(discount);
            } else {
                this.finalPrice = totalPrice;
            }
        }
    }

    @Override
    public String toString() {
        return "Продажа #" + saleId + " (Счет: " + invoiceNumber + ")";
    }
} 