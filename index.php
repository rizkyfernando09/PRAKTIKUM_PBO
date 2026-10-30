<?php

//panggil file propertconstant
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk('P0001','laptop',10000000,5);

//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga:RP.". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak : ". $produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: RP.". $produk->total();