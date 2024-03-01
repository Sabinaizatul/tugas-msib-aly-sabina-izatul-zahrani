<?php
interface Product {
    public function getNama();
    public function getHarga();
}

class Kemeja implements Product {
    private $nama;
    private $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return $this->harga;
    }
}

class Celana implements Product {
    private $nama;
    private $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return $this->harga;
    }
}

function totalHarga(array $produk) {
    $totalHarga = 0;
    foreach ($produk as $p) {
        $totalHarga += $p->getHarga();
    }
    return $totalHarga;
}

$kemeja = [new Kemeja('Kemeja 1', 150000), new Kemeja('Kemeja 2', 80000)];
$celana = [new Celana('Celana 1', 200000), new Celana('Celana 2', 140000)];

$gabunganProduk = array_merge($kemeja,$celana);

foreach ($kemeja as $k) {
    echo "Nama: " . $k->getNama() . ", Harga: " . $k->getHarga() . "<br>";
}
echo "Total harga kemeja adalah: " . totalHarga($kemeja) . "<br>";

echo "<br>";

foreach ($celana as $c) {
    echo "Nama: " . $c->getNama() . ", Harga: " . $c->getHarga() . "<br>";
}
echo "Total harga celana adalah: " . totalHarga($celana) . "<br>";
echo "<br>";
echo "Total harga produk adalah: " . totalHarga($gabunganProduk);
?>