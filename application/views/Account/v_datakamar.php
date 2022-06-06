<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary ">
                  <h4 class="card-title ">TABEL KAMAR</h4>
                </div>
                <div class="card-body">
                <a href="<?php echo base_url('index.php/datakamar/inputForm')?>" 
                class="btn btn-primary" role="button" data-bs-toggle="button">Tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th> ID </th>
                        <th> No Kamar</th>
                        <th> Jenis Kamar</th>
                        <th> Status Kamar</th>
                        <th colspan=2> Aksi</th>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($query->result_array() as $row){
                            echo "<tr>"; 
                            echo "<td>".$row['id_kamar']."</td>";  
                            echo "<td>".$row['nomor_kamar']."</td>";  
                            echo "<td>".$row['jenis_kamar']."</td>";  
                            echo "<td>".$row['status_kamar']."</td>";  
                            echo "<td>".'<a href="datakamar/editForm/'.$row['id_kamar'].'">Edit</a>'."</td>";  
                            echo "<td>".'<a href="datakamar/hapusForm/'.$row['id_kamar'].'" onClick=\'return confirm("Yakin menghapus data?")\'>Hapus</a>'."</td>";  
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