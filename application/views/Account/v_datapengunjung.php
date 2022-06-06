<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">TABEL PENGUNJUNG</h4>
                </div>
                <div class="card-body">
                <a href="<?php echo base_url('index.php/datapengunjung/inputForm')?>" 
                class="btn btn-primary" role="button" data-bs-toggle="button">Tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th> ID </th>
                        <th> Nama </th>
                        <th> Username</th>
                        <th> Pessword</th>
                        <th> Status</th>
                        <th> Alamat</th>
                        <th> No Hp</th>
                        <th colspan=2> Aksi</th>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($query->result_array() as $row){
                            echo "<tr>"; 
                            echo "<td>".$row['id_pengunjung']."</td>";  
                            echo "<td>".$row['nama']."</td>";  
                            echo "<td>".$row['username']."</td>";  
                            echo "<td>".$row['password']."</td>";  
                            echo "<td>".$row['status']."</td>";  
                            echo "<td>".$row['alamat']."</td>";  
                            echo "<td>".$row['nomor_hp']."</td>";  
                            echo "<td>".'<a href="datapengunjung/editForm/'.$row['id_pengunjung'].'">Edit</a>'."</td>";  
                            echo "<td>".'<a href="datapengunjung/hapusForm/'.$row['id_pengunjung'].'" onClick=\'return confirm("Yakin menghapus data?")\'>Hapus</a>'."</td>";  
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