package module_02_karavaev.src.models;

public class PartnerContact {
    private int contactId;
    private int partnerId;
    private String fullName;
    private String position;
    private String phone;
    private String email;
    private boolean isPrimary;

    // Конструктор
    public PartnerContact() {
        this.isPrimary = false;
    }

    // Геттеры и сеттеры
    public int getContactId() {
        return contactId;
    }

    public void setContactId(int contactId) {
        this.contactId = contactId;
    }

    public int getPartnerId() {
        return partnerId;
    }

    public void setPartnerId(int partnerId) {
        this.partnerId = partnerId;
    }

    public String getFullName() {
        return fullName;
    }

    public void setFullName(String fullName) {
        this.fullName = fullName;
    }

    public String getPosition() {
        return position;
    }

    public void setPosition(String position) {
        this.position = position;
    }

    public String getPhone() {
        return phone;
    }

    public void setPhone(String phone) {
        this.phone = phone;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public boolean isPrimary() {
        return isPrimary;
    }

    public void setPrimary(boolean primary) {
        isPrimary = primary;
    }

    @Override
    public String toString() {
        return fullName + (isPrimary ? " (Основной контакт)" : "");
    }
} 