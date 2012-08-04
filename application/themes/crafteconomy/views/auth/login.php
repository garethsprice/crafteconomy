<div id="login-container">	
	
	<div id="login-header">
		
		<h3><?php print $template['title']; ?></h3>
		
	</div> <!-- /login-header -->
	
	<div id="login-content" class="clearfix">
	
	<?php if(!empty($message)): ?>
	<div class="alert alert-block alert-error"><?php echo $message;?></div>
	<?php endif; ?>
	
	<?php echo form_open("login");?>
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="identity">E-mail Address</label>
						<div class="controls">
							<?php echo form_input($identity);?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
							<?php echo form_input($password);?>
						</div>
					</div>
				</fieldset>
				
				<div id="remember-me" class="pull-left">
					<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
					<label id="remember-label" for="remember">Remember Me</label>
				</div>
				
				<div class="pull-right">
					<button type="submit" class="btn btn-warning btn-large">
						Login
					</button>
				</div>
			<?php echo form_close();?>
			
		</div> <!-- /login-content -->
		
		
		<div id="login-extra">
			
			<p><a href="<?php print site_url('auth/forgot_password'); ?>">Forgot your password?</a></p>
			
		</div> <!-- /login-extra -->
	
</div> <!-- /login-wrapper -->

