<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_POST['item']){

    $id_barang = $_POST['id_barang'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $id_jenis_barang = $_POST['id_jenis_barang'];
    $id_jenis_barang = $_POST['id_jenis_barang'];

$sql = "UPDATE barang SET nama = '$nama', jumlah = '$jumlah', harga = '$harga', id_jenis_barang='$id_jenis_barang' WHERE id_barang='$id_barang'";
 $query = mysqli_query($db,$sql) or  die(mysqli_error($db));;

if($query) {
    header('Location: list_barang.php?status=sukses');
}else {
    header('Location: list_barang.php?status=gagal');
}

}else {
    die("Akses dilarang...");
}
?>