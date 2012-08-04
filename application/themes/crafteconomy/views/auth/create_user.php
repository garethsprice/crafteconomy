<?php if(!empty($message)): ?>
<div class="alert alert-block alert-error"><?php echo $message;?></div>
<?php endif; ?>

<div class="widget">
							
  <div class="widget-header">
  	<h3>Create User</h3>
  </div> <!-- /widget-header -->
		
  <div class="widget-content">

  	<?php echo form_open("auth/create_user", array('class' => 'form-horizontal'));?>
  	
  		<fieldset>

  			<div class="control-group">											
  				<label class="control-label">First Name</label>
  				<div class="controls">
  					<?php echo form_input($first_name);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->										

  			<div class="control-group">											
  				<label class="control-label">Last Name</label>
  				<div class="controls">
  					<?php echo form_input($last_name);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->
			
  			<div class="control-group">											
  				<label class="control-label">E-mail</label>
  				<div class="controls">
  					<?php echo form_input($email);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->
			
  			<div class="control-group">											
  				<label class="control-label">Phone</label>
  				<div class="controls">
  					<?php echo form_input($phone1);?>-<?php echo form_input($phone2);?>-<?php echo form_input($phone3);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->			
				
  			<div class="control-group">											
  				<label class="control-label">Password</label>
  				<div class="controls">
  					<?php echo form_input($password);?>
  					<p class="help-block">At least <?php echo $min_password_length;?> characters long.</p>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->
			
			
  			<div class="control-group">											
  				<label class="control-label">Confirm Password</label>
  				<div class="controls">
  					<?php echo form_input($password_confirm);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->
				
  			<div class="form-actions">
  				<button type="submit" class="btn btn-primary">Create User</button> 
  				<a class="btn" href="javascript:history.back()">Cancel</a>
  			</div> <!-- /form-actions -->
  		</fieldset>
  	<?php echo form_close(); ?>
  	
  </div> <!-- /widget-content -->
  
</div>