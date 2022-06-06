<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">EDIT DATA</h4>
      </div>
      <div class="card-body">
	  <form action="<?php echo base_url('index.php/datajeniskamar/AksiEdit') ?>" method="POST">
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">ID</label>
			<div class="col-sm-10">
			<input type='text' name='id_jenis' value="<?php echo $record['id_jenis'] ?>" class="form-control" disabled>
			<input type='hidden' name='id_jenis' value="<?php echo $record['id_jenis'] ?>" >
			</div>

			<label class="col-sm-2 col-form-label">Nama Jenis Kamar</label>
			<div class="col-sm-10">
			<input type='text' name='nama_jenis' value="<?php echo $record['nama_jenis'] ?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Fasilitas</label>
			<div class="col-sm-10">
			<input type='text' name='fasilitas' value="<?php echo $record['fasilitas'] ?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Pelayanan</label>
			<div class="col-sm-10">
			<input type='text' name='pelayanan' value="<?php echo $record['pelayanan'] ?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Harga</label>
			<div class="col-sm-10">
			<input type='text' name='harga' value="<?php echo $record['harga'] ?>" class="form-control" >
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	   </form>
      </div>
      </div>
    </div>
  </div>
</div>










