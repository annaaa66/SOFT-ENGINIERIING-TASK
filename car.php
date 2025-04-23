
<?php
require_once 'CarController.php';
$controller = new CarController();
$car = $controller->getCarById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($car['make']) ?> <?= htmlspecialchars($car['model']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($car['make']) ?> <?= htmlspecialchars($car['model']) ?></h1>
    <p>Цена: <?= htmlspecialchars($car['price']) ?> лв.</p>
    <p>Описание: <?= htmlspecialchars($car['description']) ?></p>
    <a href="cars.php">Назад към автомобилите</a>
</body>
</html>
