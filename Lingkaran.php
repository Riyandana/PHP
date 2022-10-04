<?php
require_once 'Bentuk2D.php';
class Lingkaran extends Bidang
{
    protected $jari2;
    const NAMA = 'Lingkaran';

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }
    public function namaBidang()
    {
        return (self::NAMA);
    }
    public function keterangan()
    {
        echo "
        Jari-jari : ".$this->jari2."<br/>
        ";
    }
    public function luasBidang()
    {
        return (3.14 * $this->jari2 * $this->jari2);
    }
    public function kelilingBidang()
    {
        return (2 * (3.14 * $this->jari2));
    }
}