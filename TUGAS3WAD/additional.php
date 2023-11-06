<?php
require 'connection.php';
if(isset($_POST["submit"])){

    //cek apakah data berhasil di input atau gagal
    if( additional($_POST)>0) {
        echo "
            <script>
                alert('Menu berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('Menu gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Menambah data menu Dimsum</title>
  </head>
  <body>
    <h1>ADDITIONAL MENU DIMSUM</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_dimsum">Nama Dimsum : </label>
                <input type="text" name="nama_dimsum">
            </li>
            <li>
                <label for="kode_dimsum">Kode Dimsum : </label>
                <input type="text" name="kode_dimsum">
            </li>
            <li>
                <label for="harga_dimsum">Harga Dimsum : </label>
                <input type="text" name="harga_dimsum">
            </li>
            <li>
                <label for="stock_dimsum">Stock Dimsum : </label>
                <input type="text" name="stock_dimsum">
            </li>
            <li>
                <button type="submit" name="submit">Add Menu!</button>
            </li>
        </ul>
    </form>
  </body>
</html>

