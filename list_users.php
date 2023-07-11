<?php
include("config.php");
include("header.php");
?>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data Users <span class="table-project-n"></span>
                               <right>       <a href="tambah_users.php">Tambah </a><right></h1>

                               </div>

                           </div>
                           <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Username</th>
                                        <th>Nama</th>

                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>


                                        <th>Level</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $sql = "SELECT * FROM users";
                                  $query = mysqli_query($db, $sql);

                                  while($item = mysqli_fetch_array($query)){
                                    echo"<tr>";
                                    echo "<td>".$item['id_users']."</td>";
                                    echo "<td>".$item['username']."</td>";
                                    echo "<td>".$item['nama']."</td>";

                                    echo "<td>".$item['email']."</td>";
                                    echo "<td>".$item['alamat']."</td>";

                                    echo "<td>".$item['no_telp']."</td>";

                                    echo "<td>".$item['level']."</td>";
                                    echo "<td>";
                                    echo "<a href='edit_users.php?id_users=".$item['id_users']."'>Edit</a> | ";
                                    echo "<a href='proses_hapus_users.php?id_users=".$item['id_users']."''>Delete</a>  ";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>

                        </table>
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