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
                        <li class="active"><a href="#description">Tambah Customer</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="review-content-section">
                                     <div class="row">
                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                             <div class="devit-card-custom">

                                               <form action="proses_tambah_users.php"method="POST">

                                                 <div class="form-group">
                                                    <label for="">Username</label>
                                                    <input type="text" class="form-control" name="username" placeholder="username">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="nama">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                  <input type="email" class="form-control" name="email" placeholder="email">
                                              </div>

                                              <div class="form-group">
                                                <label for="">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" placeholder="alamat">
                                            </div>


                                            <div class="form-group">
                                                <label for="">No telepon</label>
                                                <input type="text" class="form-control" name="no_telp" placeholder="no_telp">
                                            </div>


                                            <div class="form-group">
                                                <label for="">Password</label>
                                              <input type="password" class="form-control" name="password" placeholder="password">
                                          </div>
                                          <div class ="form-group">
                                            <label for="">Pilih Jenis Users</label>
                                            <select name="level" class="form-control">
                                               <option value="none" selected="" disabled="">Pilih Jenis User</option>
                                               <option value="customer">customer</option>
                                               <option value="admin">admin</option>


                                           </select>
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