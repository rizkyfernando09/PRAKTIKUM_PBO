<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    
    //constant
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        $this_>kode = $kode;
        $this_>nama = $nama;
        $this_>harga = $harga;
        $this_>stok = $stok;
    }

    public function pajak() {
        return self::PAJAK * 100; //11
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
     }
}
//object
$produk = new Produk(P001,laptop,10000000,5);
$produk->kode = 'P001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;

echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak : ". $produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: RP.". $produk->total();