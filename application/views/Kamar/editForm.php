<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">EDIT DATA</h4>
      </div>
      <div class="card-body">
	  <form action="<?php echo base_url('index.php/datakamar/AksiEdit') ?>" method="POST">
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">ID</label>
			<div class="col-sm-10">
			<input type='text' name='id_kamar' value="<?php echo $record['id_kamar'] ?>" class="form-control" disabled>
			<input type='hidden' name='id_kamar' value="<?php echo $record['id_kamar'] ?>" >
			</div>

			<label class="col-sm-2 col-form-label">Nomor Kamar</label>
			<div class="col-sm-10">
			<input type='text' name='nomor_kamar' value="<?php echo $record['nomor_kamar'] ?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Jenis Kamar</label>
			<div class="col-sm-10">
			<select class="form-control" name="jenis_kamar">
					<?php
						foreach ($query as $row)
						{
							echo "<option value='$row->id_jenis'";
							echo $record['jenis_kamar']==$row->id_jenis?'selected':'';
							echo ">$row->nama_jenis</option>";
						}
					?>
			</select>
			</div>

			<label class="col-sm-2 col-form-label">Status Kamar</label>
			<div class="col-sm-10">
			<select class="form-control" name="status_kamar">
				<option value="Used" <?php if($record['status_kamar']=="Used"){echo "selected";} ?>>Used</option>
				<option value="Not Used" <?php if($record['status_kamar']=="Not Used"){echo "selected";} ?>>Not Used</option>
			</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	   </form>
      </div>
      </div>
    </div>
  </div>
</div>






