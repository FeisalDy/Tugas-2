<?php
class tugas5php
{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    private $tunj_jabatan;
    private $tunj_keluarga;
    private $zakat_profesi;
    private $gaji_pokok;
    private $gaji_kotor;
    private $gaji_bersih;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    public function setGajiPokok($jabatan)
    {
        $this->jabatan = $jabatan;
        switch ($jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asisten Manager':
                $gapok = 10000000;
                break;
            case 'Kepala Bagian':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 5000000;
                break;
            default:
                $gapok = 0;
        }
        $this->gaji_pokok = $gapok;
        return $gapok;
    }

    public function setTunjab($gaji_pokok)
    {
        $tunj_jabatan = $gaji_pokok * 0.2;
        $this->tunj_jabatan = $tunj_jabatan;
        return $tunj_jabatan;
    }

    public function setTunkel($status, $gaji_pokok)
    {
        $tunj_keluarga = $status == 'Menikah' ? $gaji_pokok * 0.1 : 0;
        $this->tunj_keluarga = $tunj_keluarga;
        return $tunj_keluarga;
    }
    public function setGajikotor($gaji_pokok, $tunj_jabatan, $tunj_keluarga)
    {
        $gaji_kotor = $gaji_pokok + $tunj_jabatan + $tunj_keluarga;
        $this->gaji_kotor = $gaji_kotor;
        return $gaji_kotor;
    }

    public function setZakatProfesi($gaji_pokok, $gaji_kotor, $agama)
    {
        if ($agama == 'Islam' && $gaji_kotor >= 6000000) {
            $zakat_profesi = $gaji_pokok * 0.025;
            $this->zakat_profesi = $zakat_profesi;
            return $zakat_profesi;
        } else {
            $this->zakat_profesi = 0;
            return 0;
        }
    }

    public function setGajibersih($gaji_kotor, $zakat_profesi)
    {
        $gaji_bersih = $gaji_kotor - $zakat_profesi;
        $this->gaji_bersih = $gaji_bersih;
        return $gaji_bersih;
    }

    public function cetak()
    {
        echo 'NIP Pegawai ' . $this->nip;
        echo '<br>Nama Pegawai ' . $this->nama;
        echo '<br>Jabatan ' . $this->jabatan;
        echo '<br>Agama ' . $this->agama;
        echo '<br>Status ' . $this->status;
        echo '<br>Gaji Pokok Rp.' . number_format($this->setGajiPokok($this->jabatan), 0, ',', '.');
        echo '<br>Tunjangan Jabatan Rp.' . number_format($this->setTunjab($this->gaji_pokok), 0, ',', '.');
        echo '<br>Tunjangan Keluarga Rp.' . number_format($this->setTunkel($this->status, $this->gaji_pokok), 0, ',', '.');
        echo '<br>Gaji Kotor Rp.' . number_format($this->setGajikotor($this->gaji_pokok, $this->tunj_jabatan, $this->tunj_keluarga), 0, ',', '.');
        echo '<br>Zakat Profesi Rp.' . number_format($this->setZakatProfesi($this->gaji_pokok, $this->gaji_kotor, $this->agama), 0, ',', '.');
        echo '<br>Gaji Bersih Rp.' . number_format($this->setGajibersih($this->gaji_kotor, $this->zakat_profesi), 0, ',', '.');
        echo '<hr>';
    }
}
