<!-- index.html -->
<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <title>Начална страница - Автокъща</title>
</head>
<body>
    <h1>Добре дошли в нашата автокъща!</h1>
    <a href="cars.php">Разгледай наличните автомобили</a>
</body>
</html>


<!-- SQL за създаване на базата и таблицата -->
-- Създай базата данни:
CREATE DATABASE autokashta;

-- Използвай базата:
USE autokashta;

-- Създай таблица:
CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(100) NOT NULL,
    model VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT
);

-- Примерни автомобили:
INSERT INTO cars (make, model, price, description) VALUES
('Toyota', 'Corolla', 15000.00, 'Надежден и икономичен автомобил'),
('BMW', '320d', 22000.00, 'Луксозен дизелов седан'),
('Audi', 'A4', 21000.00, 'Комфорт и представяне');
