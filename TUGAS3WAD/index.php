<?php
//koneksi ke database toko_dimsum
require 'connection.php';
$menudimsum = query("SELECT * FROM menu_dimsum");
?>

<!doctype html>
<html>
<head>
    <title>Toko Dimsum Nana</title>
</head>
<body>
    <h1>Daftar Menu Toko Dimsum</h1>
    <a href="additional.php">Tambah data menu dimsum</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>Aksi</th>
            <th>Nama Dimsum</th>
            <th>Kode Dimsum</th>
            <th>Harga Dimsum</th>
            <th>Stock Dimsum</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($menudimsum as $baris ): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="update.php?nomor=<?= $baris["nomor"]; ?>">ubah</a> | 
                <a href="delete.php?nomor=<?= $baris["nomor"]; ?>" onclick = "
                    return confirm('are you sure?');">hapus</a>

            </td>
            <td><?= $baris["nama_dimsum"]; ?> </td>
            <td><?= $baris["kode_dimsum"]; ?></td>
            <td><?= $baris["harga_dimsum"]; ?></td>
            <td><?= $baris["stock_dimsum"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>