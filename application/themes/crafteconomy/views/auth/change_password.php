<?php if(!empty($message)): ?>
<div class="alert alert-block alert-error"><?php echo $message;?></div>
<?php endif; ?>

<div class="widget">
							
  <div class="widget-header">
  	<h3>Change Password</h3>
  </div> <!-- /widget-header -->
		
  <div class="widget-content">

  	<?php echo form_open("auth/change_password", array('class' => 'form-horizontal'));?>
  		<fieldset>

  			<div class="control-group">											
  				<label class="control-label">Old Password</label>
  				<div class="controls">
  					<?php echo form_input($old_password);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->										
			
  			<div class="control-group">											
  				<label class="control-label">New Password</label>
  				<div class="controls">
  					<?php echo form_input($new_password);?>
  					<p class="help-block">At least <?php echo $min_password_length;?> characters long.</p>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->
			
			
  			<div class="control-group">											
  				<label class="control-label">Confirm New Password</label>
  				<div class="controls">
  					<?php echo form_input($new_password_confirm);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->
			
			
				
  			<div class="form-actions">
  				<button type="submit" class="btn btn-primary">Change</button> 
  				<a class="btn" href="javascript:history.back()">Cancel</a>
  			</div> <!-- /form-actions -->
  		</fieldset>
  	<?php echo form_close(); ?>
  	
  </div> <!-- /widget-content -->
  
</div>