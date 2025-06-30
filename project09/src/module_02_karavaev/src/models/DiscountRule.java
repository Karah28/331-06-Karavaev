package module_02_karavaev.src.models;

import java.math.BigDecimal;
import java.util.Date;

public class DiscountRule {
    private int ruleId;
    private String name;
    private Integer categoryId;
    private int minQuantity;
    private Integer maxQuantity;
    private BigDecimal discountPercentage;
    private Date startDate;
    private Date endDate;
    private boolean isActive;

    // Конструктор
    public DiscountRule() {
        this.isActive = true;
        this.discountPercentage = BigDecimal.ZERO;
    }

    // Геттеры и сеттеры
    public int getRuleId() {
        return ruleId;
    }

    public void setRuleId(int ruleId) {
        this.ruleId = ruleId;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Integer getCategoryId() {
        return categoryId;
    }

    public void setCategoryId(Integer categoryId) {
        this.categoryId = categoryId;
    }

    public int getMinQuantity() {
        return minQuantity;
    }

    public void setMinQuantity(int minQuantity) {
        this.minQuantity = minQuantity;
    }

    public Integer getMaxQuantity() {
        return maxQuantity;
    }

    public void setMaxQuantity(Integer maxQuantity) {
        this.maxQuantity = maxQuantity;
    }

    public BigDecimal getDiscountPercentage() {
        return discountPercentage;
    }

    public void setDiscountPercentage(BigDecimal discountPercentage) {
        this.discountPercentage = discountPercentage;
    }

    public Date getStartDate() {
        return startDate;
    }

    public void setStartDate(Date startDate) {
        this.startDate = startDate;
    }

    public Date getEndDate() {
        return endDate;
    }

    public void setEndDate(Date endDate) {
        this.endDate = endDate;
    }

    public boolean isActive() {
        return isActive;
    }

    public void setActive(boolean active) {
        isActive = active;
    }

    // Методы для проверки применимости правила
    public boolean isApplicable(int quantity, Date currentDate) {
        if (!isActive) {
            return false;
        }

        if (quantity < minQuantity) {
            return false;
        }

        if (maxQuantity != null && quantity > maxQuantity) {
            return false;
        }

        if (startDate != null && currentDate.before(startDate)) {
            return false;
        }

        if (endDate != null && currentDate.after(endDate)) {
            return false;
        }

        return true;
    }

    @Override
    public String toString() {
        return name + " (" + discountPercentage + "%)";
    }
} 