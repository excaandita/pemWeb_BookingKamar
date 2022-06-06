<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">TABEL JENIS KAMAR</h4>
                </div>
                <div class="card-body">
                <a href="<?php echo base_url('index.php/datajeniskamar/inputForm')?>" 
                class="btn btn-primary" role="button" data-bs-toggle="button">Tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th> ID </th>
                        <th> Nama Jenis</th>
                        <th> Fasilitas</th>
                        <th> Pelayanan</th>
                        <th> Harga</th>
                        <th colspan=2> Aksi</th>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($query->result_array() as $row){
                            echo "<tr>"; 
                            echo "<td>".$row['id_jenis']."</td>";  
                            echo "<td>".$row['nama_jenis']."</td>";  
                            echo "<td>".$row['fasilitas']."</td>";  
                            echo "<td>".$row['fasilitas']."</td>";  
                            echo "<td>Rp ".number_format($row['harga'],0,".",".")."</td>";  
                            echo "<td>".'<a href="datajeniskamar/editForm/'.$row['id_jenis'].'">Edit</a>'."</td>";  
                            echo "<td>".'<a href="datajeniskamar/hapusForm/'.$row['id_jenis'].'" onClick=\'return confirm("Yakin menghapus data?")\'>Hapus</a>'."</td>";  
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