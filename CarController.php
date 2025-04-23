
<?php
require_once 'CarModel.php';

class CarController {
    private $model;

    public function __construct() {
        $this->model = new CarModel();
    }

    public function getAllCars() {
        return $this->model->getAll();
    }

    public function getCarById($id) {
        return $this->model->getById($id);
    }
}
