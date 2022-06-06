<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">EDIT DATA</h4>
      </div>
      <div class="card-body">
	  <form action="<?php echo base_url('index.php/datapengunjung/AksiEdit') ?>" method="POST">
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">ID</label>
			<div class="col-sm-10">
			<input type='text' name='id_pengunjung' value="<?php echo $query['id_pengunjung'] ?>" class="form-control" disabled>
			<input type='hidden' name='id_pengunjung' value="<?php echo $query['id_pengunjung'] ?>" >
			</div>

			<label class="col-sm-2 col-form-label">Nama </label>
			<div class="col-sm-10">
			<input type='text' name='nama' value="<?php echo $query['nama']?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-10">
			<input type='text' name='username' value="<?php echo $query['username'] ?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
			<input type='text' name='password' value="<?php echo $query['password']?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-10">
			<select class="form-control" name="status">
				<option value="Belum Menikah" <?php if($query['status']=="Belum Menikah"){echo "selected";} ?>>Belum Menikah</option>
				<option value="Menikah" <?php if($query['status']=="Menikah"){echo "selected";} ?>>Menikah</option>
			</select>
			</div>

			<label class="col-sm-2 col-form-label">Alamat</label>
			<div class="col-sm-10">
			<input type='text' name='alamat' value="<?php echo $query['alamat']?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Nomor Hp</label>
			<div class="col-sm-10">
			<input type='text' name='nomor_hp' value="<?php echo $query['nomor_hp']?>" class="form-control" >
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	   </form>
      </div>
      </div>
    </div>
  </div>
</div>












