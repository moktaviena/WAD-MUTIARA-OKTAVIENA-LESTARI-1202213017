<?php
$url = 'localhost';
$usname = 'root';
$pass =  "";
$database = "toko_dimsum";

$connect = mysqli_connect($url, $usname, $pass, $database);

function query($query){
    global $connect ;
    $result = mysqli_query($connect, $query);
    $array = [];
    while( $baris = mysqli_fetch_assoc($result)) {
        $array[] = $baris;
    }

    return $array;
}

function additional($data){
    global $connect;
    $nama_dimsum = $data["nama_dimsum"];
    $kode_dimsum = $data["kode_dimsum"];
    $harga_dimsum = $data["harga_dimsum"];
    $stock_dimsum = $data["stock_dimsum"];

    $query ="INSERT INTO menu_dimsum
                VALUES
              ('','$nama_dimsum', '$kode_dimsum', '$harga_dimsum', '$stock_dimsum')
            ";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);

}

function delete($nomor){
    global $connect;
    mysqli_query($connect, "DELETE FROM menu_dimsum WHERE nomor = $nomor");
    return mysqli_affected_rows($connect);
}
function update($data){
    global $connect;
    $nomor = $data["nomor"];
    $nama_dimsum = $data["nama_dimsum"];
    $kode_dimsum = $data["kode_dimsum"];
    $harga_dimsum = $data["harga_dimsum"];
    $stock_dimsum = $data["stock_dimsum"];

    $query ="UPDATE menu_dimsum SET
                nama_dimsum = '$nama_dimsum' 
                kode_dimsum = '$kode_dimsum' 
                harga_dimsum = '$harga_dimsum' 
                stock_dimsum = '$stock_dimsum'
             WHERE nomor = $nomor
             ";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);

}

?>