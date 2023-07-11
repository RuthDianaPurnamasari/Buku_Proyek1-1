<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_POST['item']){

    $id_users = $_POST['id_users'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $email = $_POST['email'];

$sql = "UPDATE users SET username = '$username', password = '$password', level = '$level', email = '$email' WHERE id_users='$id_users'";
 $query = mysqli_query($db,$sql) or  die(mysqli_error($db));;

if($query) {
    header('Location: list_users.php?status=sukses');
}else {
    header('Location: list_users.php?status=gagal');
}

}else {
    die("Akses dilarang...");
}
?>