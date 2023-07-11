<?php
include("config.php");
include("header.php");
 ?>
   <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Jenis Barang</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                               <div class="review-content-section">
                                                                                   <div class="row">
                                                                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                           <div class="devit-card-custom">

   <?php
	include "config.php";
	$id_barang = $_GET['id_barang'];
	$query_mysql = mysqli_query($db ,"SELECT  barang.*, jenis_barang.nama as nama_jenis_barang from barang INNER JOIN jenis_barang ON barang.id_jenis_barang =jenis_barang.id_jenis_barang where barang.id_barang = $id_barang ")or die(mysqli_error($db));
	while($data = mysqli_fetch_array($query_mysql)){
	?>

 <form action="proses_edit_barang.php"method="POST">
                                                                                               <div class="form-group">
                                                                                                <label for="">Nama Barang</label>
                                                                                                   <input type="hidden"  class="form-control" name="id_barang" placeholder="id_barang" value="<?php echo $data['id_barang'] ?>">

                                                                                                   <div class="form-group">
                                                                                                    <label for=""></label>
                                                                                                   <input type="text" class="form-control" name="nama" placeholder="nama" value="<?php echo $data['nama'] ?>">
                                                                                               </div>
                                                                                                     <div class="form-group">
                                                                                                        <label for="">Jumlah Barang</label>
                                                                                                            <input type="number" class="form-control" name="jumlah" placeholder="jumlah" value="<?php echo $data['jumlah'] ?>">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="">Harga Barang</label>
                                                                                                        <input type="number" class="form-control" name="harga" placeholder="harga" value="<?php echo $data['harga'] ?>">
                                                                                                    </div>          
                                                                                                    <div class="form-group">
                                                                                                        <p> Gambar Barang</p>
                                                                                                        <input type="file" name="gambar" id="gambar">
                                                                                                    </div>                                                                                                                                                                                   
                                                                                                    <div class="form-group">
                                                                                                    <div class="form-group">
                                                                                                        <select name="id_jenis_barang" class="form-control">
                                                                                                            <option value="<?php echo $data['id_jenis_barang'] ?>"><?php echo $data['nama_jenis_barang'] ?></option>
                                                                                                                <?php
                                                                                                                $id_barang = $_GET['id_barang'];
                                                                                                                $query_mysql = mysqli_query($db ,"SELECT * FROM jenis_barang " )or die(mysqli_error($db));
                                                                                                                while($data = mysqli_fetch_array($query_mysql)){
                                                                                                                ?>
                                                                                                                    <option value="<?php echo $data['id_jenis_barang'] ?>"><?php echo $data['nama'] ?></option>
                                                                                                                        <?php } ?>
                                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <input class="btn btn-primary waves-effect waves-light" name="item" type="submit">
                                                                                                </input>
</form>
                                                                                                <?php } ?>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Static Table End -->

<?php
       include("footer.php");

        ?>