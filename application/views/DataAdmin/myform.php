<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary ">
                  <h4 class="card-title ">TAMBAH DATA ADMIN</h4>
                </div>
                <div class="card-body">
				<?php 
				echo validation_errors(); 
				echo form_open('dataadmin/inputAdmin'); 
				echo form_hidden('id_admin', 'id_admin');
				$username = array( 'name'=>'username', 'size'=>'50','style'=>'width:100%');
				echo "Username</br>". form_input($username). "</br> </br>";
				$password = array( 'name'=>'password', 'size'=>'50','style'=>'width:100%');
				echo "Password </br>". form_input($password). "</br> </br>";
				$nama = array( 'name'=>'nama', 'size'=>'50','style'=>'width:100%');
				echo "Nama Lengkap</br>". form_input($nama). "</br> </br>";
				echo form_submit('mysubmit', 'Submit');
				echo form_close();
				?>
                  </div>
                </div>
              </div>
            </div>
</div>


