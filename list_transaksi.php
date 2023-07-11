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
                                     <h1>Data  transaksi <span class="table-project-n"></span>
                                                             <right>       <a href="tambah_transaksi.php">Tambah </a><right></h1>

                                </div>

                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Costumer</th>
                                                <th>Alamat</th>
                                                <th>No Telp Costumer</th>
                                                <th>Barang</th>
                                                <th>Jumlah</th>
                                                <th>harga</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                                $sql = "SELECT  transaksi.*, users.alamat as alamat_users, users.no_telp as no_telp, users.nama as nama_users, barang.nama as nama_barang , barang.harga as harga from transaksi INNER JOIN users ON users.id_users =transaksi.id_users INNER JOIN barang ON barang.id_barang = transaksi.id_barang ";

                                                $query = mysqli_query($db, $sql);

                                                while($item = mysqli_fetch_array($query)){
                                                    echo"<tr>";
                                                    echo "<td>".$item['id_transaksi']."</td>";
                                                    echo "<td>".$item['nama_users']."</td>";
                                                    echo "<td>".$item['alamat_users']."</td>";
                                                    echo "<td>".$item['no_telp']."</td>";
                                                    echo "<td>".$item['nama_barang']."</td>";
                                                    echo "<td>".$item['jumlah']."</td>";

                                                    $startTimeStamp = strtotime($item['tanggal_awal']);
                                                    $endTimeStamp = strtotime($item['tanggal_akhir']);
                                                    $timeDiff = abs($endTimeStamp - $startTimeStamp);

                                                    $numberDays = $timeDiff/86400;  // 86400 seconds in one day

                                                    // and you might want to convert to integer
                                                    $numberDays = intval($numberDays);
                                                    $kalkulasi_harga = ($item['jumlah'] * $item['harga']) * $numberDays;
                                                     $hasil = 'Rp ' . number_format($kalkulasi_harga, 2, ",", ".");
                                                    echo "<td>".$hasil."</td>";
                                                    echo "<td>";
                                                    echo "<a href='edit_transaksi.php?id_transaksi=".$item['id_transaksi']."'>Edit</a> | ";
                                                    echo "<a href='proses_hapus_transaksi.php?id_transaksi=".$item['id_transaksi']."''>Delete</a>  ";
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