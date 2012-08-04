<div class="span8">
	<header class="page-header">
		<h1><?php print $template['title']; ?></h1>
	</header>
</div>

<section class="row imageBox">
	<div class="span6">
    <?php if(!empty($message)): ?>
    <div class="alert alert-block alert-error"><?php echo $message;?></div>
    <?php endif; ?>
	  
  	<?php echo form_open('auth/reset_password/' . $code, array('class' => 'form-horizontal', 'name' => 'email-signin')); ?>
      <fieldset>
          <div class="control-group">
            <label class="control-label">New Password (at least <?php echo $min_password_length;?> characters long):</label>
            <div class="controls">
              <?php echo form_input($new_password);?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Confirm New Password:</label>
            <div class="controls">
              <?php echo form_input($new_password_confirm);?>
            </div>
          </div>
          
        	<div class="form-actions">
        		<button type="submit" class="btn btn-large btn-primary">Change</button>
      		</div>
      		
          <?php echo form_input($user_id);?>
          <?php echo form_hidden($csrf); ?>
    <?php echo form_close();?>
  </div>
</section>