<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">EDIT DATA</h4>
      </div>
      <div class="card-body">
	  <form action="<?php echo base_url('index.php/dataadmin/AksiEdit') ?>" method="POST">
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">ID</label>
			<div class="col-sm-10">
			<input type='text' name='id_admin' value="<?php echo $query['id_admin'] ?>" class="form-control" disabled>
			<input type='hidden' name='id_admin' value="<?php echo $query['id_admin'] ?>" >
			</div>

			<label class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-10">
			<input type='text' name='username' value="<?php echo $query['username'] ?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
			<input type='text' name='password' value="<?php echo $query['password']?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-10">
			<input type='text' name='nama' value="<?php echo $query['nama']?>" class="form-control" >
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	   </form>
      </div>
      </div>
    </div>
  </div>
</div>



