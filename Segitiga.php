<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bidang
{
    protected $alas;
    protected $tinggi;
    const NAMA = 'Segitiga';

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang()
    {
        return (self::NAMA);
    }
    public function keterangan()
    {
        echo "
        Alas : ".$this->alas."<br/>
        Tinggi : ". $this->tinggi."<br/>
        ";
    }
    public function luasBidang()
    {
        return (0.5 * $this->alas * $this->tinggi);
    }
    public function setsisi()
    {
        return (sqrt($this->alas * $this->alas) + ($this->tinggi * $this->tinggi));
    }
    public function kelilingBidang()
    {
        return ($this->setsisi() * 3);
    }
}