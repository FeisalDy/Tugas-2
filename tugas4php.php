<?php
function get_skill_category($skill_score)
{
    if ($skill_score == 0) {
        return "Tidak Memadai";
    } elseif ($skill_score >= 1 && $skill_score <= 40) {
        return "Kurang";
    } elseif ($skill_score >= 41 && $skill_score <= 60) {
        return "Cukup";
    } elseif ($skill_score >= 61 && $skill_score <= 100) {
        return "Baik";
    } elseif ($skill_score >= 101 && $skill_score <= 150) {
        return "Sangat Baik";
    }
}

$mahasiswa = array(
    array(
        "nim" => "123456",
        "nama" => "Feisal",
        "jenis_kelamin" => "Laki-laki",
        "program_studi" => "Informatika",
        "skill" => "Programming",
        "skor_skill" => 80,
        "email" => "feisal@gmail.com"
    ),
    array(
        "nim" => "234567",
        "nama" => "Dharma",
        "jenis_kelamin" => "Laki-laki",
        "program_studi" => "Sistem Informasi",
        "skill" => "Database",
        "skor_skill" => 30,
        "email" => "Dharma@gmail.com"
    ),
    array(
        "nim" => "345678",
        "nama" => "Yuda",
        "jenis_kelamin" => "Perempuan",
        "program_studi" => "Teknik Elektro",
        "skill" => "Networking",
        "skor_skill" => 110,
        "email" => "Yuda@gmail.com"
    )
);
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
    <?php foreach ($mahasiswa as $mhs) {
        $kategori_skill = get_skill_category($mhs["skor_skill"]);
    ?>
        <div class="mahasiswa">
            <div class="row">
                <div class="label">NIM</div>
                <div class="value">: <?php echo $mhs["nim"]; ?></div>
            </div>
            <div class="row">
                <div class="label">Nama</div>
                <div class="value">: <?php echo $mhs["nama"]; ?></div>
            </div>
            <div class="row">
                <div class="label">Jenis Kelamin</div>
                <div class="value">: <?php echo $mhs["jenis_kelamin"]; ?></div>
            </div>
            <div class="row">
                <div class="label">Program Studi</div>
                <div class="value">: <?php echo $mhs["program_studi"]; ?></div>
            </div>
            <div class="row">
                <div class="label">Skill</div>
                <div class="value">: <?php echo $mhs["skill"]; ?></div>
            </div>
            <div class="row">
                <div class="label">Skor Skill</div>
                <div class="value">: <?php echo $mhs["skor_skill"]; ?></div>
            </div>
            <div class="row">
                <div class="label">Kategori Skill</div>
                <div class="value">: <?php echo $kategori_skill; ?></div>
            </div>
            <div class="row">
                <div class="label">Email</div>
                <div class="value">: <?php echo $mhs["email"]; ?></div>
            </div>
        </div>
    <?php } ?>
</body>

</html>