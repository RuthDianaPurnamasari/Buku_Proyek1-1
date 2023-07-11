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
                        <li class="active"><a href="#description">Tambah Barang</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="review-content-section">
                                     <div class="row">
                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                             <div class="devit-card-custom">

                                               <form action="proses_tambah_barang.php"method="POST" enctype="multipart/form-data">
                                                 <div class="form-group">
                                                    <label> Nama Barang</label>
                                                     <input type="text" class="form-control" name="nama" placeholder="nama">
                                                 </div>
                                                 <div class="form-group">
                                                    <label for="">Jumlah Barang</label>
                                                     <input type="number" class="form-control" name="jumlah" placeholder="jumlah">
                                                 </div>
                                                 <div class="form-group">
                                                    <label for="">Harga</label>
                                                     <input type="number" class="form-control" name="harga" placeholder="harga">
                                                 </div>                                                                                                                                                                                          
                                                 <div class="form-group">
                                                    <label for="">Jenis Barang</label>
                                                   <select name="id_jenis_barang" class="form-control">
                                                      <option value="none" selected="" disabled="">Pilih Jenis Barang</option>

                                                      <?php
                                                      include "config.php";
                                                      $query_mysql = mysqli_query($db ,"SELECT * FROM jenis_barang " )or die(mysqli_error($db));
                                                      while($data = mysqli_fetch_array($query_mysql)){
                                                       ?>


                                                       <option value="<?php echo $data['id_jenis_barang'] ?>"><?php echo $data['nama'] ?></option>
                                                   <?php } ?>

                                               </select>
                                           </div>
                                           <div class="form-group">
                                               <p> Gambar Barang</p>
                                              <input type="file" name="gambar" id="gambar">
                                         </div>    
                                     </div>

                                     <input class="btn btn-primary waves-effect waves-light" name="item" type="submit">

                                 </input>
                             </form>
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