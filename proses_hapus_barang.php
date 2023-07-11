<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    $id_barang = $_GET['id_barang'];


// buat query 
$sql = "DELETE FROM barang WHERE id_barang='$id_barang'";
 $query = mysqli_query($db,$sql) or  die(mysqli_error($db));;

if($query) {
    header('Location: list_barang.php?status=sukses');
}else {
    header('Location: list_barang.php?status=gagal');
}

?>