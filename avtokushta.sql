CREATE DATABASE avtokushta;
USE autokashta;

CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(100) NOT NULL,
    model VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT
);

INSERT INTO cars (make, model, price, description) VALUES
('Toyota', 'Corolla', 15000.00, 'Надежден и икономичен автомобил'),
('BMW', '320d', 22000.00, 'Луксозен дизелов седан'),
('Audi', 'A4', 21000.00, 'Комфорт и представяне');
