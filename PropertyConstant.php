<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    
    //constant
    public const PAJAK = 0.11;
}

//object
$produk = new Produk();

$produk->kode = 'P001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100;
$jumlahpajak = $produk->harga * produk::PAJAK;

//total
$total = $produk->harga + $jumlahpajak;

echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak : ". $pajak ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: RP.". $total;
