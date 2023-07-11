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
	$id_jenis_barang = $_GET['id_jenis_barang'];
	$query_mysql = mysqli_query($db ,"SELECT * FROM jenis_barang WHERE id_jenis_barang='$id_jenis_barang'")or die(mysqli_error($db));
	while($data = mysqli_fetch_array($query_mysql)){
	?>

 <form action="proses_edit_jenis_barang.php"method="POST">
                                                                                               <div class="form-group">
                                                                                                   <input type="hidden"  class="form-control" name="id_jenis_barang" placeholder="id_jenis_barang" value="<?php echo $data['id_jenis_barang'] ?>">

                                                                                                <div>
                                                                                                    <label for="">Nama Jenis Barang</label>
                                                                                                   <input type="text" class="form-control" name="nama" placeholder="nama" value="<?php echo $data['nama'] ?>">
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