<?php 
class Pegawai {
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

    static $jml = 0;
    static $no = 1;

    public function __construct($nip, $nama, $jabatan, $agama, $status) {
        $this -> nip = $nip;
        $this -> nama = $nama;
        $this -> jabatan = $jabatan;
        $this -> agama = $agama;
        $this -> status = $status;
        self::$jml++;
    }
    
    public function setgapok() {
        switch ($this->jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asisten':
                $gapok = 10000000;
                break;
            case 'KaBag':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
        }
            return $gapok;
    }

    public function settunjab() {
        $tunjab = (20 * $this -> setgapok()) / 100;
        return $tunjab;
    }

    public function settunkel() {
        $tunkel = ($this -> status == "Menikah") ? (10 * $this -> setgapok()) / 100 : 0;
        return $tunkel;
    }

    public function setgakor() {
        $gakor = $this -> setgapok() + $this -> settunjab() + $this -> settunkel();
        return $gakor;
    }

    public function setzakat() {
        $zakat = ($this -> agama == "Islam" && $this -> setgakor() >= 6000000) ? (2.5 * $this -> setgapok()) / 100 : 0;
        return $zakat;
    }

    public function setgasih() {
        $gasih = $this -> setgakor() - $this -> setzakat();
        return $gasih;
    }

    public function mencetak() {

    echo '
    <div class="card text-bg-secondary mt-4 mb-6" >
        <div class="card-header">Pegawai '.self::$no++.'</div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-primary">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Agama</th>
                        <th>Status</th>
                        <th>Gaji Pokok</th>
                        <th>Tunjangan Jabatan</th>
                        <th>Tunjangan Keluarga</th>
                        <th>Gaji Kotor</th>
                        <th>Zakat</th>
                        <th>Gaji Bersih</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>'.$this -> nip.'</th>
                        <th>'.$this -> nama.'</th>
                        <th>'.$this -> jabatan.'</th>
                        <th>'.$this -> agama.'</th>
                        <th>'.$this -> status.'</th>
                        <th>Rp.'.number_format($this -> setgapok()).'</th>
                        <th>Rp.'.number_format($this -> settunjab()).'</th>
                        <th>Rp.'.number_format($this -> settunkel()).'</th>
                        <th>Rp.'.number_format($this -> setgakor()).'</th>
                        <th>Rp.'.number_format($this -> setzakat()).'</th>
                        <th>Rp.'.number_format($this -> setgasih()).'</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>';
    }
}
?>