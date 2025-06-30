package module_02_karavaev.src.services;

import module_02_karavaev.src.dao.PartnerDAO;
import module_02_karavaev.src.dao.impl.PartnerDAOImpl;
import module_02_karavaev.src.models.Partner;
import module_02_karavaev.src.models.PartnerContact;

import java.sql.SQLException;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

public class PartnerService {
    private static final Logger LOGGER = Logger.getLogger(PartnerService.class.getName());
    private final PartnerDAO partnerDAO;

    public PartnerService() {
        this.partnerDAO = new PartnerDAOImpl();
    }

    public Partner createPartner(Partner partner) {
        try {
            validatePartner(partner);
            return partnerDAO.create(partner);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error creating partner", e);
            throw new RuntimeException("Error creating partner: " + e.getMessage());
        }
    }

    public Partner getPartner(int id) {
        try {
            return partnerDAO.getById(id);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error getting partner by ID: " + id, e);
            throw new RuntimeException("Error getting partner: " + e.getMessage());
        }
    }

    public List<Partner> getAllPartners() {
        try {
            return partnerDAO.getAll();
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error getting all partners", e);
            throw new RuntimeException("Error getting partners: " + e.getMessage());
        }
    }

    public void updatePartner(Partner partner) {
        try {
            validatePartner(partner);
            partnerDAO.update(partner);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error updating partner", e);
            throw new RuntimeException("Error updating partner: " + e.getMessage());
        }
    }

    public void deletePartner(int id) {
        try {
            partnerDAO.delete(id);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error deleting partner with ID: " + id, e);
            throw new RuntimeException("Error deleting partner: " + e.getMessage());
        }
    }

    public List<Partner> findPartnersByCategory(int categoryId) {
        try {
            return partnerDAO.findByCategory(categoryId);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error finding partners by category: " + categoryId, e);
            throw new RuntimeException("Error finding partners: " + e.getMessage());
        }
    }

    public List<Partner> findPartnersByStatus(Partner.PartnerStatus status) {
        try {
            return partnerDAO.findByStatus(status);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error finding partners by status: " + status, e);
            throw new RuntimeException("Error finding partners: " + e.getMessage());
        }
    }

    public List<Partner> searchPartners(String namePattern) {
        try {
            return partnerDAO.searchByName(namePattern);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error searching partners by name pattern: " + namePattern, e);
            throw new RuntimeException("Error searching partners: " + e.getMessage());
        }
    }

    public void addContactToPartner(int partnerId, PartnerContact contact) {
        try {
            validateContact(contact);
            partnerDAO.addContact(partnerId, contact);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error adding contact to partner: " + partnerId, e);
            throw new RuntimeException("Error adding contact: " + e.getMessage());
        }
    }

    public void updateContact(PartnerContact contact) {
        try {
            validateContact(contact);
            partnerDAO.updateContact(contact);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error updating contact: " + contact.getContactId(), e);
            throw new RuntimeException("Error updating contact: " + e.getMessage());
        }
    }

    public void deleteContact(int contactId) {
        try {
            partnerDAO.deleteContact(contactId);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error deleting contact: " + contactId, e);
            throw new RuntimeException("Error deleting contact: " + e.getMessage());
        }
    }

    public List<PartnerContact> getPartnerContacts(int partnerId) {
        try {
            return partnerDAO.getPartnerContacts(partnerId);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error getting contacts for partner: " + partnerId, e);
            throw new RuntimeException("Error getting contacts: " + e.getMessage());
        }
    }

    public double calculatePartnerTotalSales(int partnerId) {
        try {
            return partnerDAO.calculateTotalSales(partnerId);
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error calculating total sales for partner: " + partnerId, e);
            throw new RuntimeException("Error calculating total sales: " + e.getMessage());
        }
    }

    public int getActivePartnersCount() {
        try {
            return partnerDAO.countActivePartners();
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error counting active partners", e);
            throw new RuntimeException("Error counting active partners: " + e.getMessage());
        }
    }

    private void validatePartner(Partner partner) {
        if (partner == null) {
            throw new IllegalArgumentException("Partner cannot be null");
        }
        if (partner.getName() == null || partner.getName().trim().isEmpty()) {
            throw new IllegalArgumentException("Partner name cannot be empty");
        }
        if (partner.getInn() == null || !partner.getInn().matches("\\d{10}|\\d{12}")) {
            throw new IllegalArgumentException("Invalid INN format");
        }
        if (partner.getKpp() != null && !partner.getKpp().matches("\\d{9}")) {
            throw new IllegalArgumentException("Invalid KPP format");
        }
        if (partner.getOgrn() != null && !partner.getOgrn().matches("\\d{13}|\\d{15}")) {
            throw new IllegalArgumentException("Invalid OGRN format");
        }
    }

    private void validateContact(PartnerContact contact) {
        if (contact == null) {
            throw new IllegalArgumentException("Contact cannot be null");
        }
        if (contact.getFullName() == null || contact.getFullName().trim().isEmpty()) {
            throw new IllegalArgumentException("Contact name cannot be empty");
        }
        if (contact.getEmail() != null && !contact.getEmail().matches("^[A-Za-z0-9+_.-]+@(.+)$")) {
            throw new IllegalArgumentException("Invalid email format");
        }
        if (contact.getPhone() != null && !contact.getPhone().matches("^\\+?[0-9()-]{10,15}$")) {
            throw new IllegalArgumentException("Invalid phone format");
        }
    }
} 