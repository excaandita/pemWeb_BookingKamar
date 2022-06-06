<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">TABEL ADMIN</h4>
                </div>
                <div class="card-body">
                <a href="<?php echo base_url('index.php/dataadmin/inputAdmin')?>" 
                class="btn btn-primary" role="button" data-bs-toggle="button">Tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th> ID </th>
                        <th> Username</th>
                        <th> Password</th>
                        <th> Nama</th>
                        <th colspan=2> Aksi</th>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($query->result_array() as $row){
                            echo "<tr>"; 
                            echo "<td>".$row['id_admin']."</td>";  
                            echo "<td>".$row['username']."</td>";  
                            echo "<td>".$row['password']."</td>";  
                            echo "<td>".$row['nama']."</td>";  
                            echo "<td>".'<a href="dataadmin/editForm/'.$row['id_admin'].'">Edit</a>'."</td>";  
                            echo "<td>".'<a href="dataadmin/hapusForm/'.$row['id_admin'].'" onClick=\'return confirm("Yakin menghapus data?")\'>Hapus</a>'."</td>";  
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