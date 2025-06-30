package module_02_karavaev.src.models;

import java.util.Date;
import java.util.List;

public class Partner {
    private int partnerId;
    private String name;
    private Date registrationDate;
    private String partnerType;
    private Integer categoryId;
    private String director;
    private String email;
    private String phone;
    private String legalAddress;
    private String actualAddress;
    private String inn;
    private String kpp;
    private String ogrn;
    private Integer rating;
    private PartnerStatus status;
    private Date lastOrderDate;
    private String managerNotes;
    private List<PartnerContact> contacts;

    public enum PartnerStatus {
        ACTIVE, INACTIVE, BLOCKED
    }

    // Конструктор
    public Partner() {
        this.status = PartnerStatus.ACTIVE;
    }

    // Геттеры и сеттеры
    public int getPartnerId() {
        return partnerId;
    }

    public void setPartnerId(int partnerId) {
        this.partnerId = partnerId;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Date getRegistrationDate() {
        return registrationDate;
    }

    public void setRegistrationDate(Date registrationDate) {
        this.registrationDate = registrationDate;
    }

    public String getPartnerType() {
        return partnerType;
    }

    public void setPartnerType(String partnerType) {
        this.partnerType = partnerType;
    }

    public Integer getCategoryId() {
        return categoryId;
    }

    public void setCategoryId(Integer categoryId) {
        this.categoryId = categoryId;
    }

    public String getDirector() {
        return director;
    }

    public void setDirector(String director) {
        this.director = director;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPhone() {
        return phone;
    }

    public void setPhone(String phone) {
        this.phone = phone;
    }

    public String getLegalAddress() {
        return legalAddress;
    }

    public void setLegalAddress(String legalAddress) {
        this.legalAddress = legalAddress;
    }

    public String getActualAddress() {
        return actualAddress;
    }

    public void setActualAddress(String actualAddress) {
        this.actualAddress = actualAddress;
    }

    public String getInn() {
        return inn;
    }

    public void setInn(String inn) {
        this.inn = inn;
    }

    public String getKpp() {
        return kpp;
    }

    public void setKpp(String kpp) {
        this.kpp = kpp;
    }

    public String getOgrn() {
        return ogrn;
    }

    public void setOgrn(String ogrn) {
        this.ogrn = ogrn;
    }

    public Integer getRating() {
        return rating;
    }

    public void setRating(Integer rating) {
        this.rating = rating;
    }

    public PartnerStatus getStatus() {
        return status;
    }

    public void setStatus(PartnerStatus status) {
        this.status = status;
    }

    public Date getLastOrderDate() {
        return lastOrderDate;
    }

    public void setLastOrderDate(Date lastOrderDate) {
        this.lastOrderDate = lastOrderDate;
    }

    public String getManagerNotes() {
        return managerNotes;
    }

    public void setManagerNotes(String managerNotes) {
        this.managerNotes = managerNotes;
    }

    public List<PartnerContact> getContacts() {
        return contacts;
    }

    public void setContacts(List<PartnerContact> contacts) {
        this.contacts = contacts;
    }

    @Override
    public String toString() {
        return name + " (ИНН: " + inn + ")";
    }
} 