<?php
class Kendaraan {
    private $merek, $jumlahRoda, $harga, $warna, $bhnBakar;

    public function __construct($merek, $jumlahRoda, $harga, $warna, $bhnBakar) {
        $this->merek = $merek;
        $this->jumlahRoda = $jumlahRoda;
        $this->harga = $harga;
        $this->warna = $warna;
        $this->bhnBakar = $bhnBakar;
    }

    public function getMerek() { return $this->merek; }
    public function getJumlahRoda() { return $this->jumlahRoda; }
    public function getHarga() { return $this->harga; }
    public function getWarna() { return $this->warna; }
    public function getBhnBakar() { return $this->bhnBakar; }
}
?>