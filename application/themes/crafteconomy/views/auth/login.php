<div class="span8">
	<header class="page-header">
		<h1>Login<small>or <a href="<?php print site_url('auth/register'); ?>">Register.</a></small></h1>
	</header>
</div>

<section class="row imageBox">
	<div class="span6">

  <?php if(!empty($message)): ?>
  <div class="alert alert-block alert-error"><?php echo $message;?></div>
  <?php endif; ?>
	  
	<?php echo form_open("login", array('class' => 'form-horizontal', 'name' => 'email-signin')); ?>
      <fieldset>
          <div class="control-group">
            <label class="control-label" for="email">Email or username</label>
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

        	<div class="form-actions">
        		<button type="submit" class="btn btn-large btn-primary">Login</button>
        		<button class="btn btn-large">Cancel</button>

      		</div>
      		<div class="control-group">
          	<div class="controls">
          		<a href="<?php print site_url('auth/forgot_password'); ?>">Forgot your password?</a>
          	</div>
        </div>
      <?php echo form_close();?>
  </div>
</section>