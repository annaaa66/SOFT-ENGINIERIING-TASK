
<?php
require_once 'db.php';

class CarModel {
    public function getAll() {
        global $conn;
        $stmt = $conn->query("SELECT * FROM cars");
        return $stmt->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM cars WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
