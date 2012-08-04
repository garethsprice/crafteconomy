<div class="row">
  <div class="span12">
  	<header class="page-header">
  		<h1>Forgot Password</h1>
  	</header>
	</div>
</div>

<section class="row">
	<div class="span12">
    <?php if(!empty($message)): ?>
    <div class="alert alert-block alert-error"><?php echo $message;?></div>
    <?php endif; ?>
	  
  	<?php echo form_open("auth/forgot_password", array('class' => 'form-horizontal', 'name' => 'email-signin')); ?>
      <fieldset>
        <div class="control-group">
          <label class="control-label" for="email">Email</label>
          <div class="controls">
            <?php echo form_input($email);?>
          </div>
        </div>
        
      	<div class="form-actions">
      		<button type="submit" class="btn btn-large btn-primary">Sent reset link</button>
    		</div>
    	</fieldset>
    <?php echo form_close();?>
  </div>
</section>
