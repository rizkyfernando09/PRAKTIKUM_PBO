<?php

namespace Pbo\Marketplace;

trait Produk {

    //property
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;
    
    //constant
    public const PAJAK = 0.11;

    public function __construct() {

    }

    //setter
    public function setKode($kode){
        $this->kode = $kode;
        return $this;
    }
    public function setNama($nama){
        $this->nama = $nama;
        return $this;
    }
    public function setHarga($harga){
        if($harga <= 0) {
            echo "harga tidak boleh 0";
            exit();
        }
        $this->harga = $harga;
        return $this;
    }
    public function setStok($stok){
        if($stok <= 0) {
            echo "stok tidak boleh 0";
            exit();
        }
         $this->stok = $stok;
        return $this;
    }

    // getter
public function getKode() {
    return $this->kode;
    }
public function getNama() {
    return $this->nama;
    }
public function getHarga() {
    return $this->harga;
    }
public function getStok() {
    return $this->stok;
    }

    public function pajak() {
        return self::PAJAK * 100; //11
    }
    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}
