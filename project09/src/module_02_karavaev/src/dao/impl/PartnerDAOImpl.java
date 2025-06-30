package module_02_karavaev.src.dao.impl;

import module_02_karavaev.src.dao.PartnerDAO;
import module_02_karavaev.src.models.Partner;
import module_02_karavaev.src.models.PartnerContact;
import module_02_karavaev.src.utils.DatabaseUtil;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

public class PartnerDAOImpl implements PartnerDAO {
    private static final Logger LOGGER = Logger.getLogger(PartnerDAOImpl.class.getName());

    @Override
    public Partner create(Partner partner) throws SQLException {
        String sql = "INSERT INTO partners (name, registration_date, partner_type, category_id, director, " +
                "email, phone, legal_address, actual_address, inn, kpp, ogrn, rating, status) " +
                "VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql, Statement.RETURN_GENERATED_KEYS)) {
            
            stmt.setString(1, partner.getName());
            stmt.setDate(2, new java.sql.Date(partner.getRegistrationDate().getTime()));
            stmt.setString(3, partner.getPartnerType());
            stmt.setObject(4, partner.getCategoryId());
            stmt.setString(5, partner.getDirector());
            stmt.setString(6, partner.getEmail());
            stmt.setString(7, partner.getPhone());
            stmt.setString(8, partner.getLegalAddress());
            stmt.setString(9, partner.getActualAddress());
            stmt.setString(10, partner.getInn());
            stmt.setString(11, partner.getKpp());
            stmt.setString(12, partner.getOgrn());
            stmt.setObject(13, partner.getRating());
            stmt.setString(14, partner.getStatus().name());

            int affectedRows = stmt.executeUpdate();
            if (affectedRows == 0) {
                throw new SQLException("Creating partner failed, no rows affected.");
            }

            try (ResultSet generatedKeys = stmt.getGeneratedKeys()) {
                if (generatedKeys.next()) {
                    partner.setPartnerId(generatedKeys.getInt(1));
                } else {
                    throw new SQLException("Creating partner failed, no ID obtained.");
                }
            }

            // Сохраняем контакты, если они есть
            if (partner.getContacts() != null && !partner.getContacts().isEmpty()) {
                for (PartnerContact contact : partner.getContacts()) {
                    addContact(partner.getPartnerId(), contact);
                }
            }

            return partner;
        }
    }

    @Override
    public Partner getById(int id) throws SQLException {
        String sql = "SELECT * FROM partners WHERE partner_id = ?";
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setInt(1, id);
            
            try (ResultSet rs = stmt.executeQuery()) {
                if (rs.next()) {
                    Partner partner = mapResultSetToPartner(rs);
                    partner.setContacts(getPartnerContacts(id));
                    return partner;
                }
                return null;
            }
        }
    }

    @Override
    public List<Partner> getAll() throws SQLException {
        String sql = "SELECT * FROM partners";
        List<Partner> partners = new ArrayList<>();
        
        try (Connection conn = DatabaseUtil.getConnection();
             Statement stmt = conn.createStatement();
             ResultSet rs = stmt.executeQuery(sql)) {
            
            while (rs.next()) {
                Partner partner = mapResultSetToPartner(rs);
                partner.setContacts(getPartnerContacts(partner.getPartnerId()));
                partners.add(partner);
            }
        }
        
        return partners;
    }

    @Override
    public void update(Partner partner) throws SQLException {
        String sql = "UPDATE partners SET name = ?, registration_date = ?, partner_type = ?, " +
                "category_id = ?, director = ?, email = ?, phone = ?, legal_address = ?, " +
                "actual_address = ?, inn = ?, kpp = ?, ogrn = ?, rating = ?, status = ? " +
                "WHERE partner_id = ?";

        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setString(1, partner.getName());
            stmt.setDate(2, new java.sql.Date(partner.getRegistrationDate().getTime()));
            stmt.setString(3, partner.getPartnerType());
            stmt.setObject(4, partner.getCategoryId());
            stmt.setString(5, partner.getDirector());
            stmt.setString(6, partner.getEmail());
            stmt.setString(7, partner.getPhone());
            stmt.setString(8, partner.getLegalAddress());
            stmt.setString(9, partner.getActualAddress());
            stmt.setString(10, partner.getInn());
            stmt.setString(11, partner.getKpp());
            stmt.setString(12, partner.getOgrn());
            stmt.setObject(13, partner.getRating());
            stmt.setString(14, partner.getStatus().name());
            stmt.setInt(15, partner.getPartnerId());

            stmt.executeUpdate();
        }
    }

    @Override
    public void delete(int id) throws SQLException {
        String sql = "DELETE FROM partners WHERE partner_id = ?";
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setInt(1, id);
            stmt.executeUpdate();
        }
    }

    @Override
    public List<Partner> findByCategory(int categoryId) throws SQLException {
        String sql = "SELECT * FROM partners WHERE category_id = ?";
        List<Partner> partners = new ArrayList<>();
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setInt(1, categoryId);
            
            try (ResultSet rs = stmt.executeQuery()) {
                while (rs.next()) {
                    Partner partner = mapResultSetToPartner(rs);
                    partner.setContacts(getPartnerContacts(partner.getPartnerId()));
                    partners.add(partner);
                }
            }
        }
        
        return partners;
    }

    @Override
    public List<Partner> findByStatus(Partner.PartnerStatus status) throws SQLException {
        String sql = "SELECT * FROM partners WHERE status = ?";
        List<Partner> partners = new ArrayList<>();
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setString(1, status.name());
            
            try (ResultSet rs = stmt.executeQuery()) {
                while (rs.next()) {
                    Partner partner = mapResultSetToPartner(rs);
                    partner.setContacts(getPartnerContacts(partner.getPartnerId()));
                    partners.add(partner);
                }
            }
        }
        
        return partners;
    }

    @Override
    public List<Partner> searchByName(String namePattern) throws SQLException {
        String sql = "SELECT * FROM partners WHERE name LIKE ?";
        List<Partner> partners = new ArrayList<>();
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setString(1, "%" + namePattern + "%");
            
            try (ResultSet rs = stmt.executeQuery()) {
                while (rs.next()) {
                    Partner partner = mapResultSetToPartner(rs);
                    partner.setContacts(getPartnerContacts(partner.getPartnerId()));
                    partners.add(partner);
                }
            }
        }
        
        return partners;
    }

    @Override
    public void addContact(int partnerId, PartnerContact contact) throws SQLException {
        String sql = "INSERT INTO partner_contacts (partner_id, full_name, position, phone, email, is_primary) " +
                "VALUES (?, ?, ?, ?, ?, ?)";
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql, Statement.RETURN_GENERATED_KEYS)) {
            
            stmt.setInt(1, partnerId);
            stmt.setString(2, contact.getFullName());
            stmt.setString(3, contact.getPosition());
            stmt.setString(4, contact.getPhone());
            stmt.setString(5, contact.getEmail());
            stmt.setBoolean(6, contact.isPrimary());

            int affectedRows = stmt.executeUpdate();
            if (affectedRows == 0) {
                throw new SQLException("Creating contact failed, no rows affected.");
            }

            try (ResultSet generatedKeys = stmt.getGeneratedKeys()) {
                if (generatedKeys.next()) {
                    contact.setContactId(generatedKeys.getInt(1));
                }
            }
        }
    }

    @Override
    public void updateContact(PartnerContact contact) throws SQLException {
        String sql = "UPDATE partner_contacts SET full_name = ?, position = ?, phone = ?, " +
                "email = ?, is_primary = ? WHERE contact_id = ?";
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setString(1, contact.getFullName());
            stmt.setString(2, contact.getPosition());
            stmt.setString(3, contact.getPhone());
            stmt.setString(4, contact.getEmail());
            stmt.setBoolean(5, contact.isPrimary());
            stmt.setInt(6, contact.getContactId());

            stmt.executeUpdate();
        }
    }

    @Override
    public void deleteContact(int contactId) throws SQLException {
        String sql = "DELETE FROM partner_contacts WHERE contact_id = ?";
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setInt(1, contactId);
            stmt.executeUpdate();
        }
    }

    @Override
    public List<PartnerContact> getPartnerContacts(int partnerId) throws SQLException {
        String sql = "SELECT * FROM partner_contacts WHERE partner_id = ?";
        List<PartnerContact> contacts = new ArrayList<>();
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setInt(1, partnerId);
            
            try (ResultSet rs = stmt.executeQuery()) {
                while (rs.next()) {
                    contacts.add(mapResultSetToContact(rs));
                }
            }
        }
        
        return contacts;
    }

    @Override
    public double calculateTotalSales(int partnerId) throws SQLException {
        String sql = "SELECT SUM(final_price) as total FROM sales_history WHERE partner_id = ?";
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setInt(1, partnerId);
            
            try (ResultSet rs = stmt.executeQuery()) {
                if (rs.next()) {
                    return rs.getDouble("total");
                }
                return 0.0;
            }
        }
    }

    @Override
    public int countActivePartners() throws SQLException {
        String sql = "SELECT COUNT(*) as count FROM partners WHERE status = ?";
        
        try (Connection conn = DatabaseUtil.getConnection();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setString(1, Partner.PartnerStatus.ACTIVE.name());
            
            try (ResultSet rs = stmt.executeQuery()) {
                if (rs.next()) {
                    return rs.getInt("count");
                }
                return 0;
            }
        }
    }

    private Partner mapResultSetToPartner(ResultSet rs) throws SQLException {
        Partner partner = new Partner();
        partner.setPartnerId(rs.getInt("partner_id"));
        partner.setName(rs.getString("name"));
        partner.setRegistrationDate(rs.getDate("registration_date"));
        partner.setPartnerType(rs.getString("partner_type"));
        partner.setCategoryId((Integer) rs.getObject("category_id"));
        partner.setDirector(rs.getString("director"));
        partner.setEmail(rs.getString("email"));
        partner.setPhone(rs.getString("phone"));
        partner.setLegalAddress(rs.getString("legal_address"));
        partner.setActualAddress(rs.getString("actual_address"));
        partner.setInn(rs.getString("inn"));
        partner.setKpp(rs.getString("kpp"));
        partner.setOgrn(rs.getString("ogrn"));
        partner.setRating((Integer) rs.getObject("rating"));
        partner.setStatus(Partner.PartnerStatus.valueOf(rs.getString("status")));
        
        Timestamp lastOrderDate = rs.getTimestamp("last_order_date");
        if (lastOrderDate != null) {
            partner.setLastOrderDate(new Date(lastOrderDate.getTime()));
        }
        
        partner.setManagerNotes(rs.getString("manager_notes"));
        return partner;
    }

    private PartnerContact mapResultSetToContact(ResultSet rs) throws SQLException {
        PartnerContact contact = new PartnerContact();
        contact.setContactId(rs.getInt("contact_id"));
        contact.setPartnerId(rs.getInt("partner_id"));
        contact.setFullName(rs.getString("full_name"));
        contact.setPosition(rs.getString("position"));
        contact.setPhone(rs.getString("phone"));
        contact.setEmail(rs.getString("email"));
        contact.setPrimary(rs.getBoolean("is_primary"));
        return contact;
    }
} 