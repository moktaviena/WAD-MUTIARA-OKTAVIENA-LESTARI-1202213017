<?php
require 'connection.php';

$nomor = $_GET["nomor"];

if(delete($nomor)>0) {
    echo "
        <script>
            alert('Menu berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}else{
    echo "
    <script>
        alert('Menu gagal dihapus!');
        document.location.href = 'index.php';
    </script>
";
}
?>