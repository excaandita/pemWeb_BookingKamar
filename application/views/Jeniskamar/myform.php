<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary ">
                  <h4 class="card-title ">TAMBAH DATA KAMAR</h4>
                </div>
                <div class="card-body">
				<?php 
				echo validation_errors(); 
				echo form_open('datajeniskamar/inputForm'); 

				$id_jenis = array( 'name'=>'id_jenis', 'size'=>'50','style'=>'width:100%');
				echo "ID Jenis</br>". form_input($id_jenis). "</br> </br>";
				$nama_jenis = array( 'name'=>'nama_jenis', 'size'=>'50','style'=>'width:100%');
				echo "Nama Jenis Kamar</br>". form_input($nama_jenis). "</br> </br>";
				$fasilitas = array( 'name'=>'fasilitas', 'size'=>'50','style'=>'width:100%');
				echo "Fasilitas Kamar </br>". form_textarea($fasilitas). "</br> </br>";
				$pelayanan = array( 'name'=>'pelayanan', 'size'=>'50','style'=>'width:100%');
				echo "Pelayanan</br>". form_textarea($pelayanan). "</br> </br>";
				$harga= array( 'name'=>'harga', 'size'=>'50','style'=>'width:100%');
				echo "Harga Kamar </br>". form_input($harga). "</br> </br>";
				echo form_submit('mysubmit', 'Submit');
				echo form_close();
				?>
                  </div>
                </div>
              </div>
            </div>
</div>

