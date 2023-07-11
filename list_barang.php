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
                         <h1>Data  Barang <span class="table-project-n"></span>
                             <right>       <a href="tambah_barang.php">Tambah </a><right></h1>

                             </div>

                         </div>
                         <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Jenis Barang</th>
                                        <th>Jumlah Awal Barang</th>
                                        <th>Jumlah Sisa Barang</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $sql = "SELECT  barang.*, jenis_barang.nama as nama_jenis_barang from barang INNER JOIN jenis_barang ON barang.id_jenis_barang =jenis_barang.id_jenis_barang";

                                  $query = mysqli_query($db, $sql);

                                  while($item = mysqli_fetch_array($query)){
                                    echo"<tr>";
                                    echo "<td>".$item['id_barang']."</td>";
                                    echo "<td>".$item['nama']."</td>";
                                    echo "<td>".$item['nama_jenis_barang']."</td>";
                                    echo "<td>".$item['jumlah']."</td>";

                                    $Sum1= mysqli_query($db, 'SELECT  SUM(jumlah) from transaksi WHERE id_barang='.$item['id_barang'].'');
                                    $row = mysqli_fetch_array($Sum1);                              
                                    $jumlahsisa= $item['jumlah'] - $row[0];
                                    echo "<td>".$jumlahsisa."</td>";

                                    $hasil = 'Rp. ' . number_format($item['harga'], 2, ",", ".");
                                    echo "<td>".$hasil."</td>";
                                    echo "<td><img  width='150px'src='".$item['gambar']."'></td>";
                                    echo "<td>";
                                    echo "<a href='edit_barang.php?id_barang=".$item['id_barang']."'>Edit</a> | ";
                                    echo "<a href='proses_hapus_barang.php?id_barang=".$item['id_barang']."''>Delete</a>  ";
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