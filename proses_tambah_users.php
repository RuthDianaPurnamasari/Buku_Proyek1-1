<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_POST['item']){

    $username = $_POST['username'];
    $level = $_POST['level'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $sql = "INSERT INTO users (username,level,email,password,nama,alamat,no_telp)
    VALUE ('$username','$level','$email','$password','$nama','$alamat','$no_telp')";
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