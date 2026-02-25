<?php

//ini adalah function
function formatRupiah($angka) : string {
    return "Rp " . number_format(num: $angka, decimals: 0, decimal_separator: ',', thousands_separator: '.');
}

class Belanja {

    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    //ini adalah method yang ...
    public function hitungSubtotal(): float|int {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungTotalDenganDiskon($persenDiskon): float|int {
        $subtotal = $this->hitungSubtotal();
        $diskon = ($persenDiskon / 100) * $subtotal;
        return $subtotal - $diskon;
    }
}

   $data = [
'namaPembeli' =>'Miftah',
'namaBarang' => 'Mie Ayam',
'hargaBarang'=> 12000,
'jumlahBeli' => 12,
];
       
// instansiasi objek belanja dari class Beanja
$belanja = new Belanja();
$belanja->namaPembeli = $data["namaPembeli"];
$belanja->namaBarang = $data["namaBarang"];
$belanja->hargaBarang = $data["hargaBarang"];
$belanja->jumlahBeli = $dta["jumlahBeli"];

echo " STRUK BELANJA WARUNG A ";
echo "Pembeli" .$belanja->namaPembeli , "<br>";
echo "Barang" .$belanja->namaBarnag , "<br>";
echo "Subtotal:" . formatRupiah($belanja->hitungSubtotal()) . "<br>"
echo "Total (Diskon 10%): " . formatRupiah($belanja->hitungTotalDenganDiskon(10)) . "<br>";
>?