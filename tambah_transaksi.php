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
                                <li class="active"><a href="#description">Tambah transaksi</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <form action="proses_tambah_transaksi.php"method="POST">
                                                            <div class="form-group">
                                                                <label for="">Nama Users</label>
                                                                    <select name="id_users" class="form-control">
                                            						   	<option value="none" selected="" disabled="">Pilih Users</option>
                                                                            <?php
                                                                             include "config.php";
                                                                          	 $query_mysql = mysqli_query($db ,"SELECT * FROM users " )or die(mysqli_error($db));
                                                                         	 while($data = mysqli_fetch_array($query_mysql)){
                                                                         	?>
                    														<option value="<?php echo $data['id_users'] ?>"><?php echo $data['username'] ?></option>
                        														<?php } ?>
                													</select>
                                                            </div>
                                                        </div>                                                                                                                                                
                                                        <div class="form-group">
                                                            <label for="">Pilih Barang</label>
                                                        <select name="id_barang" class="form-control">
                                                        <option value="none" selected="" disabled="">Pilih Barang</option>
                                                            <?php
                                                                include "config.php";
                                                                $query_mysql = mysqli_query($db ,"SELECT * FROM barang " )or die(mysqli_error($db));
                                                                while($data = mysqli_fetch_array($query_mysql)){
                                                            ?>
                                                            <option value="<?php echo $data['id_barang'] ?>"><?php echo $data['nama'] ?></option>
                                                        	<?php } ?>
                                                    </select>
                                                </div>                                                                                                                                                                     
                                                <div class="form-group">
                                                    <label for="">Jumlah</label>
                                                    <input type="number" class="form-control" name="jumlah" placeholder="jumlah">                                                                                                                                                                               
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tanggal Awal</label>
                                                    <input type="date" class="form-control" name="tanggal_awal" placeholder="tanggal_awal">
                                                    <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="">Tanggal Akhir</label>
                                                        <input type="date" class="form-control" name="tanggal_akhir" placeholder="tanggal_akhir">
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