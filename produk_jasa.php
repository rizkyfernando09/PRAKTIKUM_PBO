<?php

require('./Jasa.php');

use Pbo\Marketplace\Jasa;

//object
$produk = new Jasa();

$produk->setKode('P0001')
       ->setNama('Laptop')
       ->setHarga(10000000)
       ->setStok(5);

//hasil
echo "Produk: ". $produk->getNama();
echo "<br/>";

echo "Harga:RP.". $produk->getHarga();
echo "<br/>";

echo "Stok: ". $produk->getStok();
echo "<br/>";

echo "Pajak : ". $produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: RP.". $produk->total();

echo "<br/>";
echo "Metode Pembayaran: ". $produk->payment('qris');

