<?php
require 'tugas5php.php';

$pegawai1 = new tugas5php('01111', 'Andi', 'Manager', 'Islam', 'Menikah');
$pegawai2 = new tugas5php('02222', 'Feisal', 'Asisten Manager', 'Kristen', 'Belum Menikah');
$pegawai3 = new tugas5php('03333', 'Dharma', 'Kepala Bagian', 'Islam', 'Menikah');
$pegawai4 = new tugas5php('04444', 'Yuda', 'Staff', 'Hindu', 'Belum Menikah');
$pegawai5 = new tugas5php('05555', 'Mine', 'Staff', 'Budha', 'Menikah');

$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];

foreach ($ar_pegawai as $pegawai) {
    $pegawai->cetak();
}
