<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    $id_users = $_GET['id_users'];


// buat query 
$sql = "DELETE FROM users WHERE id_users='$id_users'";
 $query = mysqli_query($db,$sql) or  die(mysqli_error($db));;

if($query) {
    header('Location: list_users.php?status=sukses');
}else {
    header('Location: list_users.php?status=gagal');
}

?>