<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_POST['item']){

    $id_jenis_barang = $_POST['id_jenis_barang'];
    $nama = $_POST['nama'];

$sql = "UPDATE jenis_barang SET nama = '$nama' WHERE id_jenis_barang='$id_jenis_barang'";
 $query = mysqli_query($db,$sql) or  die(mysqli_error($db));;

if($query) {
    header('Location: list_jenis_barang.php?status=sukses');
}else {
    header('Location: list_jenis_barang.php?status=gagal');
}

}else {
    die("Akses dilarang...");
}
?>