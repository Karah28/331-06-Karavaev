package module_02_karavaev.src.models;

import java.math.BigDecimal;

public class PartnerCategory {
    private int categoryId;
    private String categoryName;
    private String description;
    private BigDecimal minAnnualTurnover;

    // Конструктор
    public PartnerCategory() {
        this.minAnnualTurnover = BigDecimal.ZERO;
    }

    // Геттеры и сеттеры
    public int getCategoryId() {
        return categoryId;
    }

    public void setCategoryId(int categoryId) {
        this.categoryId = categoryId;
    }

    public String getCategoryName() {
        return categoryName;
    }

    public void setCategoryName(String categoryName) {
        this.categoryName = categoryName;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public BigDecimal getMinAnnualTurnover() {
        return minAnnualTurnover;
    }

    public void setMinAnnualTurnover(BigDecimal minAnnualTurnover) {
        this.minAnnualTurnover = minAnnualTurnover;
    }

    @Override
    public String toString() {
        return categoryName;
    }
} 