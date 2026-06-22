<?php
require_once __DIR__ . '/../model/Kendaraan.php';

class KendaraanController {
    public function index() {

        $data = [
            new Kendaraan("Yamaha Mio", 2, 10000000, "Merah", "Premium"),
            new Kendaraan("Toyota Yaris", 4, 160000000, "Merah", "Premium"),
            new Kendaraan("Honda Scoopy", 2, 13000000, "Putih", "Premium"),
            new Kendaraan("Isuzu Panther", 4, 170000000, "Hitam", "Solar")
        ];

        require_once __DIR__ . '/../view/KendaraanView.php';
    }
}
?>