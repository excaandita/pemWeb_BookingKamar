		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<h3 class="text-center mb-4">Create Account</h3>
				<?php echo validation_errors(); ?>

				<?php echo form_open('admin/inputAdmin'); ?>
				<input type="hidden" class="form-control" name="id_admin" value="<?php echo set_value('id_admin'); ?>" size="50" />

				<h5>Username</h5>
				<input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" size="50" />

				<h5>Password</h5>
				<input type="text" class="form-control" name="password" value="<?php echo set_value('password'); ?>" size="50" />

				<h5>Nama Lengkap</h5>
				<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>" size="50" /></br>
				<input type="submit" name="btnSubmit" value="Submit" class="btn btn-dark display-4"> 
	
				</form>
	        </div>
				</div>
			</div>
		</div>
		
