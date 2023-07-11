<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_POST['item']){

    $id_transaksi = $_POST['id_transaksi'];
    $id_users = $_POST['id_users'];
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $tanggal_awal= $_POST['tanggal_awal'];
    $tanggal_akhir= $_POST['tanggal_akhir'];

$sql = "UPDATE transaksi SET id_users = '$id_users',id_barang='$id_barang', jumlah = '$jumlah', tanggal_awal='$tanggal_awal' , tanggal_akhir='$tanggal_akhir' WHERE id_transaksi='$id_transaksi'";

 $query = mysqli_query($db,$sql) or  die(mysqli_error($db));;

if($query) {
    header('Location: list_transaksi.php?status=sukses');
}else {
    header('Location: list_transaksi.php?status=gagal');
}

}else {
    die("Akses dilarang...");
}
?>