
<?php
require_once 'CarController.php';
$controller = new CarController();
$cars = $controller->getAllCars();
?>

<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <title>Налични автомобили</title>
</head>
<body>
    <h1>Всички налични автомобили</h1>
    <ul>
        <?php foreach ($cars as $car): ?>
            <li>
                <a href="car.php?id=<?= $car['id'] ?>">
                    <?= htmlspecialchars($car['make']) ?> <?= htmlspecialchars($car['model']) ?> - <?= htmlspecialchars($car['price']) ?> лв.
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.html">Обратно към началната</a>
</body>
</html>
