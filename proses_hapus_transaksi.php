<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    $id_transaksi = $_GET['id_transaksi'];


// buat query 
$sql = "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
 $query = mysqli_query($db,$sql) or  die(mysqli_error($db));;

if($query) {
    header('Location: list_transaksi.php?status=sukses');
}else {
    header('Location: list_transaksi.php?status=gagal');
}

?>