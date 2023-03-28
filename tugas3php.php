<?php
$nilai = array(
    array("nama" => "Andi", "nilai" => 80),
    array("nama" => "Budi", "nilai" => 90),
    array("nama" => "Cindy", "nilai" => 75),
    array("nama" => "Dedi", "nilai" => 85),
    array("nama" => "Eva", "nilai" => 95)
);

$jumlah_mahasiswa = count($nilai);
$nilai_tertinggi = 0;
$nilai_terendah = 100;
$total_nilai = 0;

foreach ($nilai as $item) {
    $total_nilai += $item['nilai'];

    if ($item['nilai'] > $nilai_tertinggi) {
        $nilai_tertinggi = $item['nilai'];
    }

    if ($item['nilai'] < $nilai_terendah) {
        $nilai_terendah = $item['nilai'];
    }
}

$rata_nilai = $total_nilai / $jumlah_mahasiswa;

function getGrade($nilai)
{
    if ($nilai >= 90) {
        return "A";
    } elseif ($nilai >= 80) {
        return "B";
    } elseif ($nilai >= 70) {
        return "C";
    } elseif ($nilai >= 60) {
        return "D";
    } else {
        return "E";
    }
}

function getPredikat($nilai)
{
    switch (getGrade($nilai)) {
        case "A":
            return "Sangat Baik";
        case "B":
            return "Baik";
        case "C":
            return "Cukup";
        case "D":
            return "Kurang";
        default:
            return "Sangat Kurang";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nilai as $item) : ?>
                <tr>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['nilai'] ?></td>
                    <td><?= getGrade($item['nilai']) ?></td>
                    <td><?= getPredikat($item['nilai']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Jumlah Mahasiswa: <?= $jumlah_mahasiswa ?></td>
                <td>Nilai Tertinggi: <?= $nilai_tertinggi ?></td>
                <td>Nilai Terendah: <?= $nilai_terendah ?></td>
                <td>Rata-rata Nilai: <?= $rata_nilai ?></td>
            </tr>
        </tfoot>
    </table>
</body>

</html>