<div class="row">
  <div class="span12">
  	<header class="page-header">
  		<h1>Register<small>or <a href="<?php print site_url('login'); ?>">Login.</a></small></h1>
  	</header>
	</div>
</div>

<section class="row">
	<div class="span12">

  <?php if(!empty($message)): ?>
  <div class="alert alert-block alert-error"><?php echo $message;?></div>
  <?php endif; ?>
	  
	<?php echo form_open("auth/create_user", array('class' => 'form-horizontal', 'name' => 'email-signin')); ?>
      <fieldset>
        <div class="control-group">											
  				<label class="control-label">E-mail</label>
  				<div class="controls">
  					<?php echo form_input($email);?>
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

  			<div class="control-group">											
  				<label class="control-label">Phone number</label>
  				<div class="controls">
  					<?php echo form_input($phone);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->
  			
  			<hr/>
        
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
  				<label class="control-label">Address</label>
  				<div class="controls">
  					<?php echo form_input($phone);?>
  					<br/><br/>
  					<?php echo form_input($phone);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->

  			<div class="control-group">											
  				<label class="control-label">City</label>
  				<div class="controls">
  					<?php echo form_input($phone);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->

  			<div class="control-group">											
  				<label class="control-label">Region</label>
  				<div class="controls">
  					<?php echo form_input($phone);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->
				
  			<div class="control-group">											
  				<label class="control-label">Postal code</label>
  				<div class="controls">
  					<?php echo form_input($phone);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->

  			<div class="control-group">											
  				<label class="control-label">Country</label>
  				<div class="controls">
  					<?php echo form_input($phone);?>
  				</div> <!-- /controls -->				
  			</div> <!-- /control-group -->

        <hr>
        <div class="control-group">
          <label class="control-label" for="password"></label>
          <div class="controls">
          	<label class="checkbox">
          		<input type="checkbox" id="showbio" name="showbio" value="no">
          		Are you the maker of the item(s)?
        		</label>
          </div>
        </div>
        
        <fieldset id="makers_bio" class="hide">
          <div class="control-group">
            <label class="control-label" for="password">Maker's Bio</label>
            <div class="controls">
              <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
              <p class="help-block">Describe yourself and your business, a more personal description helps buyers to connect with you.</p>
            </div>
          </div>
				
    			<div class="control-group">											
    				<label class="control-label">Photo</label>
    				<div class="controls">
    					<?php echo form_input($phone);?>
    				</div> <!-- /controls -->				
    			</div> <!-- /control-group -->
			  </fieldset>
				
  			<div class="form-actions">
  				<button type="submit" class="btn btn-primary btn-large">Create User</button> 
  				<a class="btn btn-large" href="javascript:history.back()">Cancel</a>
  			</div> <!-- /form-actions -->

      </fieldset>
      <?php echo form_close();?>
  </div>
</section>