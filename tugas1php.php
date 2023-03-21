<!DOCTYPE html>
<html>

<head>
    <title>Jajar Genjang</title>
</head>

<body>
    <form method="post">
        <label for="alas">Masukkan Alas:</label>
        <input type="number" name="alas" id="alas"><br><br>

        <label for="tinggi">Masukkan Tinggi:</label>
        <input type="number" name="tinggi" id="tinggi"><br><br>

        <label for="sisi">Masukkan Sisi:</label>
        <input type="number" name="sisi" id="sisi"><br><br>

        <input type="submit" name="hitung" value="Hitung"><br><br>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $sisi = $_POST['sisi'];

        $luas = $alas * $tinggi;
        $keliling = 2 * ($alas + $sisi);

        echo "Luas Jajar Genjang: " . $luas . "<br>";
        echo "Keliling Jajar Genjang: " . $keliling;
    }
    ?>
</body>

</html>