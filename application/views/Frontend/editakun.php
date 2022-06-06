<div class="wrapper row3">
<main class="hoc container clear"> 
<div class="content"> 
	<div id="comments">
		<h2>SETTING ACCOUNT</h2>
        <form action="<?php echo base_url('index.php/pengunjung/AksiEdit') ?>" method="POST">
		<input type='hidden' name='id_pengunjung' value="<?php echo $this->session->userdata('id_pengunjung'); ?>" >		
		  <div class="one_third first">
            <label for="name">Nama<span>*</span></label>
            <input type="text" name='nama' value="<?php echo $this->session->userdata('nama'); ?>" size="15" required>
          </div>
          <div class="one_third">
            <label for="username">Username<span>*</span></label>
            <input type="text" name='username' value="<?php echo $this->session->userdata('username'); ?>" size="15" required>
          </div>
          <div class="one_third">
            <label for="password">Password<span>*</span></label>
            <input type="text" name='password' value="<?php echo $this->session->userdata('password'); ?>" size="15" required>
          </div>
		  <div class="block clear">
		  	<label for="alamat">Status<span>*</span></label>
			<select name="status">
				<?php  $status = ucfirst($this->session->userdata('status')); ?>
				<option value="Belum Menikah" <?php if($status=="Belum Menikah"){echo "selected";} ?>>Belum Menikah</option>
				<option value="Menikah" <?php if($status=="Menikah"){echo "selected";} ?> >Menikah</option>
			</select>
          </div>
          <div class="block clear">
		  	<label for="alamat">Alamat<span>*</span></label>
            <input type="text" name='alamat' value="<?php echo $this->session->userdata('alamat'); ?>" size="22" required>
          </div>
		  <div class="block clear">
		  	<label for="nomor_hp">Nomor Hp<span>*</span></label>
            <input type="text" name='nomor_hp' value="<?php echo $this->session->userdata('nomor_hp'); ?>" size="22" required>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
          </div>
        </form>
	</div>
</div>
</div>
	