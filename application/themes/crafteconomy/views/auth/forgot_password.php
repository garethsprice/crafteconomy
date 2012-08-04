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
	  
  	<?php echo form_open("auth/forgot_password", array('class' => 'form-horizontal', 'name' => 'email-signin')); ?>
      <fieldset>
          <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
              <?php echo form_input($email);?>
            </div>
          </div>
          
        	<div class="form-actions">
        		<button type="submit" class="btn btn-large btn-primary">Login</button>
      		</div>
    <?php echo form_close();?>
  </div>
</section>
