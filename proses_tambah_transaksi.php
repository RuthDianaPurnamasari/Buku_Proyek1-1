<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_POST['item']){

    $id_users = $_POST['id_users'];

    $id_barang = $_POST['id_barang'];

    $jumlah = $_POST['jumlah'];

    $tanggal_awal = $_POST['tanggal_awal'];

    $tanggal_akhir = $_POST['tanggal_akhir'];

$query_mysql = mysqli_query($db ,"SELECT * from transaksi where id_users = '$id_users'
and id_barang = '$id_barang' and tanggal_awal = '$tanggal_awal'" )or die(mysqli_error($db));
if(mysqli_num_rows($query_mysql) >0 ){
    echo "pesanan yang sama sudah pernah di buat'";
}
else{
$sql = "INSERT INTO transaksi (id_users,id_barang,jumlah,tanggal_awal, tanggal_akhir)
VALUE ('$id_users','$id_barang','$jumlah','$tanggal_awal','$tanggal_akhir')";
$query = mysqli_query($db,$sql) or  die(mysqli_error($db));;


if($query) {
    header('Location: list_transaksi.php?status=sukses');
}else {
    header('Location: list_transaksi.php?status=gagal');
}
}
}else {
    die("Akses dilarang...");
}
?>