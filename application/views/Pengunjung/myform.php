<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary ">
                  <h4 class="card-title ">TAMBAH DATA PENGUNJUNG</h4>
                </div>
                <div class="card-body">
				<?php 
				echo validation_errors(); 
				echo form_open('datapengunjung/inputForm'); 
				echo form_hidden('id_pengunjung', 'id_pengunjung');
				$nama = array( 'name'=>'nama', 'size'=>'50','style'=>'width:100%');
				echo "Nama Lengkap</br>". form_input($nama). "</br> </br>";
				$username = array( 'name'=>'username', 'size'=>'50','style'=>'width:100%');
				echo "Username</br>". form_input($username). "</br> </br>";
				$password = array( 'name'=>'password', 'size'=>'50','style'=>'width:100%');
				echo "Password </br>". form_input($password). "</br> </br>";
				$options = array(
					'Belum Menikah'     => 'Belum Menikah',
					'Menikah'           => 'Menikah',
				);
				
				echo "Status </br>". form_dropdown('status', $options, 'Belum Menikah'). "</br> </br>";
				$alamat= array( 'name'=>'alamat', 'size'=>'50','style'=>'width:100%');
				echo "Alamat</br>". form_input($alamat). "</br> </br>";
				$nomor_hp = array( 'name'=>'nomor_hp', 'size'=>'50','style'=>'width:100%');
				echo "Nomor Hp</br>". form_input($nomor_hp). "</br> </br>";
				echo form_submit('mysubmit', 'Submit');
				echo form_close();
				?>
                  </div>
                </div>
              </div>
            </div>
</div>


