<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">TABEL PEMESANAN</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th> ID Pesan</th>
                        <th> ID Pengunjung</th>
                        <th> ID Jenis Kamar</th>
                        <th> Check In</th>
                        <th> Check Out</th>
                        <th> Total Hari</th>
                        <th> Dewasa</th>
                        <th> Anak</th>
                        <th colspan=2> Aksi</th>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($query->result_array() as $row){
                            echo "<tr>"; 
                            echo "<td>".$row['id_pesan']."</td>";  
                            echo "<td>".$row['id_pengunjung']."</td>";  
                            echo "<td>".$row['id_jeniskamar']."</td>";  
                            echo "<td>".$row['check_in']."</td>";  
                            echo "<td>".$row['check_out']."</td>";  
                            echo "<td>".$row['total_hari']."</td>";  
                            echo "<td>".$row['jumlah_dewasa']."</td>";  
                            echo "<td>".$row['jumlah_anak']."</td>"; 
                            echo "<td>".'<a href="datapemesanan/editForm/'.$row['id_pesan'].'">Edit</a>'."</td>";  
                            echo "<td>".'<a href="datapemesanan/hapusForm/'.$row['id_pesan'].'" onClick=\'return confirm("Yakin menghapus data?")\'>Hapus</a>'."</td>";  
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