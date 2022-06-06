<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">EDIT DATA</h4>
      </div>
      <div class="card-body">
	  <form action="<?php echo base_url('index.php/datapemesanan/AksiEdit') ?>" method="POST">
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">ID Pesan</label>
			<div class="col-sm-10">
			<input type='text' name='id_pesan' value="<?php echo $record['id_pesan'] ?>" class="form-control" disabled>
			<input type='hidden' name='id_pesan' value="<?php echo $record['id_pesan'] ?>" >
			</div>

			<label class="col-sm-2 col-form-label">ID Pengunjung</label>
			<div class="col-sm-10">
			<input type='text' name='id_pengunjung' value="<?php echo $record['id_pengunjung'] ?>" class="form-control" disabled>
			<input type='hidden' name='id_pengunjung' value="<?php echo $record['id_pengunjung'] ?>" >
			</div>

			<label class="col-sm-2 col-form-label">Jenis Kamar</label>
			<div class="col-sm-10">
			<select class="form-control" name="id_jeniskamar">
					<?php
						foreach ($query as $row)
						{
							echo "<option value='$row->id_jenis'";
							echo $record['id_jeniskamar']==$row->id_jenis?'selected':'';
							echo ">$row->nama_jenis</option>";
						}
					?>
			</select>
			</div>

			<label class="col-sm-2 col-form-label">Check In </label>
			<div class="col-sm-10">
			<input type='date' name='check_in' value="<?php echo $record['check_in'] ?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Check Out</label>
			<div class="col-sm-10">
			<input type='date' name='check_out' value="<?php echo $record['check_out'] ?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Dewasa</label>
			<div class="col-sm-10">
			<input type='text' name='jumlah_dewasa' value="<?php echo $record['jumlah_dewasa'] ?>" class="form-control" >
			</div>

			<label class="col-sm-2 col-form-label">Anak</label>
			<div class="col-sm-10">
			<input type='text' name='jumlah_anak' value="<?php echo $record['jumlah_anak'] ?>" class="form-control" >
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	   </form>
      </div>
      </div>
    </div>
  </div>
</div>















