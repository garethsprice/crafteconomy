<div id="login-container">	
	
	<div id="login-header">
		
		<h3><?php print $template['title']; ?></h3>
		
	</div> <!-- /login-header -->
	
	<div id="login-content" class="clearfix">
	
	<?php if(!empty($message)): ?>
	<div class="alert alert-block alert-error"><?php echo $message;?></div>
	<?php endif; ?>
	
	<?php echo form_open("auth/forgot_password");?>
				<fieldset>
				  <p>Please enter your email address so we can send you an email to reset your password.</p>
					<div class="control-group">
						<label class="control-label" for="identity">E-mail Address</label>
						<div class="controls">
							<?php echo form_input($email);?>
						</div>
					</div>
				</fieldset>
				
				<div class="pull-right">
					<button type="submit" class="btn btn-warning btn-large">
						Submit
					</button>
				</div>
			<?php echo form_close();?>
			
		</div> <!-- /login-content -->
</div> <!-- /login-wrapper -->

