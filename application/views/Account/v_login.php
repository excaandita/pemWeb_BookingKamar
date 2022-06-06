
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<h3 class="text-center mb-4">LOGIN</h3>
                  <form method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
					<?php echo form_open('login');?>
                        <div class="form-group">
                            Username<input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>"/>
							<?php echo form_error('username'); ?>
                        </div>
                        <div class="form-group">
                            Password<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"/>
							<?php echo form_error('password'); ?>
						</div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" value="Login" class="btn btn-dark display-4"> 
                        </div>
                        <div class="form-group">
                            Don't have account?<a href="<?php echo base_url('index.php/admin/inputAdmin') ?>"> Create Account</a>
                        </div>
						<?php echo form_close();?>
                    </form> 
	        </div>
				</div>
			</div>
		</div>
	