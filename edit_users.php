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
                        <li class="active"><a href="#description">Edit Users</a></li>
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
                                                 $id_users = $_GET['id_users'];
                                                 $query_mysql = mysqli_query($db ,"SELECT * FROM users WHERE id_users='$id_users'")or die(mysqli_error($db));
                                                 while($data = mysqli_fetch_array($query_mysql)){
                                                   ?>

                                                   <form action="proses_edit_users.php"method="POST">
                                                     <div class="form-group">
                                                         <input type="hidden"  class="form-control" name="id_users" placeholder="id_users" value="<?php echo $data['id_users'] ?>">

                                                      <div>
                                                        <label for="">Username</label> 
                                                         <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $data['username'] ?>">
                                                     </div>
                                                     <div class="form-group">
                                                        <label for="">Nama </label>
                                                       <input type="text" class="form-control" name="nama" placeholder="email" value="<?php echo $data['nama'] ?>">
                                                   </div>

                                                   <div class="form-group">
                                                    <label for="">Email</label>
                                                       <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $data['email'] ?>">
                                                   </div>

                                                   <div class="form-group">
                                                    <label for="">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?php echo $data['alamat'] ?>">
                                                   </div>

                                                   <div class="form-group">
                                                    <label for="">No Telepon</label>
                                                       <input type="text" class="form-control" name="no_telp" placeholder="No Telepon" value="<?php echo $data['no_telp'] ?>">
                                                   </div>

                                                   <div class="form-group">
                                                        <label for="">Password</label>
                                                       <input type="password" class="form-control" name="password" placeholder="password" value="<?php echo $data['password'] ?>">
                                                   </div>
                                                   <div class ="form-group">
                                                    <label for="">Level</label>

                                                    <select name="level" class="form-control">
                                                      <option value="<?php echo $data['level'] ?>" ><?php echo $data['level'] ?></option>
                                                      <option value="customer">customer</option>
                                                      <option value="admin">admin</option>


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