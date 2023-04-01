<!DOCTYPE html>
<html>

<head>
    <title>Contoh Penggunaan Abstraksi di PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <?php
    require_once 'lingkaran.php';
    require_once 'persegipanjang.php';
    require_once 'segitiga.php';

    // Membuat objek-objek dari ketiga kelas dan menyimpannya dalam array
    $shapes = array(
        new lingkaran(7),
        new persegipanjang(4, 8),
        new segitiga(6, 8, 10, 8, 12)
    );
    ?>
    <h1>Penggunaan inheritance di Php</h1>
    <table>
        <tr>
            <th>Nama Bidang</th>
            <th>Variable</th>
            <th>Luas Bidang</th>
            <th>Keliling Bidang</th>
        </tr>
        <?php foreach ($shapes as $shape) : ?>
            <tr>
                <td><?php echo $shape->namaBidang(); ?></td>
                <td><?php echo $shape->nilaiVariable(); ?></td>
                <td><?php echo $shape->luasBidang(); ?></td>
                <td><?php echo $shape->kelilingBidang(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>