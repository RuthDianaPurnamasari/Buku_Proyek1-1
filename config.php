<?php
$server = "localhost";
$user = "root";
$password ="";
$namadb = "catering";

$db = mysqli_connect("localhost","root","","catering");

if(!$db){
    die("Gagal terhubung dengan database :" . mysqli_connect_error());

}

?>