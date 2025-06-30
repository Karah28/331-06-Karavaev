USE karavaev_db;

-- Insert admin user (password: admin123)
INSERT INTO users (username, password, role) VALUES
('admin', '$2a$10$N.zmdr9k7uOCQb376NoUnuTJ8iAt6Z5EHsM8lE9lBOsl7iKTVKIUi', 'ADMIN');

-- Insert sample products
INSERT INTO products (name, description, price, stock) VALUES
('Laptop Pro X1', 'High-performance laptop with 16GB RAM and 512GB SSD', 1299.99, 10),
('Wireless Mouse MX', 'Ergonomic wireless mouse with precision tracking', 49.99, 50),
('4K Monitor 27"', 'Ultra HD monitor with HDR support', 399.99, 15),
('Mechanical Keyboard', 'RGB mechanical keyboard with customizable keys', 129.99, 20),
('USB-C Hub', '7-in-1 USB-C hub with HDMI and SD card reader', 39.99, 30);

-- Insert sample orders
INSERT INTO orders (user_id, total_amount, status) VALUES
(1, 1349.98, 'COMPLETED'),
(1, 529.98, 'PENDING');

-- Insert order items
INSERT INTO order_items (order_id, product_id, quantity, price) VALUES
(1, 1, 1, 1299.99),
(1, 2, 1, 49.99),
(2, 3, 1, 399.99),
(2, 4, 1, 129.99); 