<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Jumlah Data</p>
                  <h3 class="card-title"><?php echo $total_kamar; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="<?php echo base_url('index.php/datakamar')?>">Data kamar</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Jumlah Data</p>
                  <h3 class="card-title"><?php echo $total_jeniskamar; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="<?php echo base_url('index.php/datajeniskamar')?>">Data jenis kamar</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Jumlah Data</p>
                  <h3 class="card-title"><?php echo $total_pengunjung; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="<?php echo base_url('index.php/datapengunjung')?>">Data pengunjung</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Jumlah Data</p>
                  <h3 class="card-title"><?php echo $total_pemesanan; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="<?php echo base_url('index.php/datapemesanan')?>">Data pemesanan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
							