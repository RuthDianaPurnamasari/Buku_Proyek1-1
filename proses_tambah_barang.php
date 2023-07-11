<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_POST['item']){

    $nama = $_POST['nama'];

    $jumlah = $_POST['jumlah'];

    $harga = $_POST['harga'];

    $id_jenis_barang = $_POST['id_jenis_barang'];

    $target_dir = "uploads/gambar_barang/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if($check !== false) {

        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
          $sql = "INSERT INTO barang (nama,jumlah,harga, id_jenis_barang, gambar)
          VALUE ('$nama','$jumlah','$harga','$id_jenis_barang','$target_file')";
          $query = mysqli_query($db,$sql) or  die(mysqli_error($db));;

          if($query) {
            header('Location: list_barang.php?status=sukses');
        }else {
            header('Location: list_barang.php?status=gagal');
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    

} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

}else {
    die("Akses dilarang...");
}
?>