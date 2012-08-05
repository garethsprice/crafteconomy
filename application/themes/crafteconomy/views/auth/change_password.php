<div class="row">
  <div class="span12">
  	<header class="page-header">
  		<h1>Account</h1>
  	</header>
	</div>
</div>

<section class="row">
	<div class="span12">
    <?php if(!empty($message)): ?>
    <div class="alert alert-block alert-error"><?php echo $message;?></div>
    <?php endif; ?>
  	<?php echo form_open("auth/change_password", array('class' => 'form-horizontal', 'name' => 'email-signin')); ?>
      <fieldset>
        <h6 class="offset1">Change Password</h6>
        <br />
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
				 <div class="offset9">
          <a href="orders">Orders</a>
        </div>
  			<div class="form-actions">
  				<button type="submit" class="btn btn-large btn-primary">Change</button> 
  				<a class="btn btn-large" href="javascript:history.back()">Cancel</a>
  			</div> <!-- /form-actions -->
    	</fieldset>
    <?php echo form_close();?>
  </div>
</section>