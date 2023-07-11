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
                        <li class="active"><a href="#description">Edit Jenis transaksi</a></li>
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
                                                 $id_transaksi = $_GET['id_transaksi'];
                                                 $query_mysql = mysqli_query($db ,"SELECT  transaksi.*, barang.nama as nama_barang, users.username as nama_users from transaksi INNER JOIN barang ON barang.id_barang =transaksi.id_barang INNER JOIN users ON users.id_users =transaksi.id_users where transaksi.id_transaksi = $id_transaksi ")or die(mysqli_error($db));
                                                 while($data = mysqli_fetch_array($query_mysql)){
                                                   ?>

 <form action="proses_edit_transaksi.php"method="POST">
   <input type="hidden" class="form-control" name="id_transaksi"  value="<?php echo $data['id_transaksi'] ?>">
                                                    <div class="form-group">    
                                                        <label for="">Nama Costumer</label>   
                                                        <select name="id_users" class="form-control">
                                                        <option value="<?php echo $data['id_users']?>" ><?php echo $data['nama_users']?></option>

                                                        <?php
                                                        include "config.php";

                                                        $query_mysql = mysqli_query($db ,"SELECT * FROM users " )or die(mysqli_error($db));
                                                        while($datax = mysqli_fetch_array($query_mysql)){
                                                        ?>
                                                         <option value="<?php echo $datax['id_users'] ?>"><?php echo $datax['username'] ?></option>
                                                     <?php } ?>

                                                 </select>
                                             </div>

                                             <div class="form-group">
                                                <label for="">Nama Barang</label>
                                                  <select name="id_barang" class="form-control">
                                                 <option value="<?php echo $data['id_barang']?>" ><?php echo $data['nama_barang']?></option>

                                                 <?php
                                                 include "config.php";

                                                 $query_mysql = mysqli_query($db ,"SELECT * FROM barang " )or die(mysqli_error($db));
                                                 while($data_barang = mysqli_fetch_array($query_mysql)){
                                                  ?>


                                                  <option value="<?php echo $data_barang['id_barang'] ?>"><?php echo $data_barang['nama'] ?></option>
                                              <?php } ?>

                                          </select>
                                      </div>


                                       <div class="form-group">
                                        <label for="">Jumlah</label>
                                           <input type="number" class="form-control" name="jumlah" placeholder="jumlah" value="<?php echo $data['jumlah'] ?>">
                                       </div>


                                       <div class="form-group">
                                        <label for="">Tanggal Awal</label>
                                           <input type="date" class="form-control" name="tanggal_awal" placeholder="tanggal_awal" value="<?php echo $data['tanggal_awal'] ?>">
                                       </div>                                                                                                                                                                                            <div class="form-group">


                                           <div class="form-group">
                                            <label for="">Tanggal Akhir</label>
                                               <input type="date" class="form-control" name="tanggal_akhir" placeholder="tanggal_akhir" value="<?php echo $data['tanggal_akhir'] ?>">
                                           </div>
                                       </div>

                                       <input class="btn btn-primary waves-effect waves-light" name="item" type="submit">

                                       </input> </form>      <?php } ?>
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