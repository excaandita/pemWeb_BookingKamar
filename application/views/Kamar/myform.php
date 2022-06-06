<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary ">
                  <h4 class="card-title ">TAMBAH DATA KAMAR</h4>
                </div>
                <div class="card-body">
				<?php 
				echo validation_errors(); 
				echo form_open('datakamar/inputForm'); 

				$nomor_kamar = array( 'name'=>'nomor_kamar', 'size'=>'50','style'=>'width:10%');
				echo "Nomor Kamar </br>". form_input($nomor_kamar). "</br> </br>";
				echo "Jenis Kamar </br>";
				foreach ($query->result_array() as $row)
				{
					$options[$row['id_jenis']]=$row['nama_jenis'];
				}
				$jenis_kamar=set_value('nama_jenis');
				echo form_dropdown('jenis_kamar', $options, $jenis_kamar). "</br> </br>";

				$options = array(
					'Used'     => 'Used',
					'Not Used' => 'Not Used',
				);
				echo "Status Kamar </br>". form_dropdown('status_kamar', $options, 'Not Used'). "</br> </br>";
				echo form_submit('mysubmit', 'Submit');
				echo form_close();
				?>
                  </div>
                </div>
              </div>
            </div>
</div>

