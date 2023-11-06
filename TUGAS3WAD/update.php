<?php
require 'connection.php';

$nomor = $_GET["nomor"];

$dims = query("SELECT * FROM menu_dimsum WHERE nomor = $nomor ")[0];
if(isset($_POST["submit"])){


    //cek apakah data berhasil di ubah atau gagal
    if( update($_POST)>0) {
        echo "
            <script>
                alert('Menu berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('Menu gagal diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Merubah data menu Dimsum</title>
  </head>
  <body>
    <h1>UPDATE MENU DIMSUM</h1>
    <form action="" method="post">
        <input type ="hidden" name = "nomor" value ="<?= $dims["nomor"];?>">
        <ul>
            <li>
                <label for="nama_dimsum">Nama Dimsum : </label>
                <input type="text" name="nama_dimsum" nomor="nama_dimsum" 
                value ="<?= $dims["nama_dimsum"];?>">
            </li>
            <li>
                <label for="kode_dimsum">Kode Dimsum : </label>
                <input type="text" name="kode_dimsum" nomor="kode_dimsum" 
                value ="<?= $dims["kode_dimsum"];?>">

            </li>
            <li>
                <label for="harga_dimsum">Harga Dimsum : </label>
                <input type="text" name="harga_dimsum" nomor="harga_dimsum" 
                value ="<?= $dims["harga_dimsum"];?>">

            </li>
            <li>
                <label for="stock_dimsum">Stock Dimsum : </label>
                <input type="text" name="stock_dimsum" nomor="stock_dimsum" 
                value ="<?= $dims["stock_dimsum"];?>">

            </li>
            <li>
                <button type="submit" name="submit">Update Menu!</button>
            </li>
        </ul>
    </form>
  </body>
</html>

