<div class="wrapper row3">
<main class="hoc container clear"> 
<div class="content"> 
	<div id="comments">
		<h2>BOOKING KAMAR</h2>
        <form action="<?php echo base_url('index.php/pengunjung/aksiBooking') ?>" method="POST">
        <input type='hidden' name='id_pesan' >		
        <input type='hidden' name='id_pengunjung' value="<?php echo $this->session->userdata('id_pengunjung'); ?>" >	
		  <div class="block clear">
		  	<label for="jeniskamar">Tipe Kamar<span>*</span></label>
			<select name="id_jeniskamar">
                <?php
                foreach ($query->result_array() as $row){
                    echo "<option value='".$row['id_jenis']."'>".$row['nama_jenis']."</option>";
                }
                ?>
			</select>
          </div>
          <div class="block clear">
		  	<label for="checkin">Check In<span>*</span></label>
            <input type="date" name='check_in' size="22" required>
          </div>
          <div class="block clear">
		  	<label for="checkout">Check Out<span>*</span></label>
            <input type="date" name='check_out' size="22" required>
          </div>
          <div class="block clear">
		  	<label for="jumlah_dewasa">Jumlah Dewasa<span>*</span></label>
            <input type="number" name='jumlah_dewasa'  size="22" required>
          </div>
		  <div class="block clear">
		  	<label for="jumlah_anak">Jumlah Anak<span>*</span></label>
            <input type="number" name='jumlah_anak' size="22" required>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit">
            &nbsp;
          </div>
        </form>
	</div>
</div>
</div>

			
			