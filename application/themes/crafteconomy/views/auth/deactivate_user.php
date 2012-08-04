<div class="row">
  <div class="span12">
  	<header class="page-header">
  		<h1>Deactivate User</h1>
  	</header>
	</div>
</div>

<section class="row">
	<div class="span12">
    <?php if(!empty($message)): ?>
    <div class="alert alert-block alert-error"><?php echo $message;?></div>
    <?php endif; ?>
	  
  	<?php echo form_open("auth/deactivate/".$target_user->id, array('class' => 'form-horizontal', 'name' => 'email-signin')); ?>
      <fieldset>

				<div class="control-group">
					<label class="control-label" for="identity">Are you sure you want to deactivate the user '<?php echo $target_user->username; ?>'</label>
					<div class="controls">
          	<label class="radio">
          	  <input type="radio" name="confirm" value="yes" />
          	  Yes
          	</label>
            <label class="radio">
              <input type="radio" name="confirm" value="no" checked="checked" />
              No
            </label>
					</div>
				</div>
				
  			<div class="form-actions">
  				<button type="submit" class="btn btn-primary">Change</button> 
  				<a class="btn" href="javascript:history.back()">Cancel</a>
  			</div> <!-- /form-actions -->
  			
    	</fieldset>
    	<?php echo form_hidden($csrf); ?>
      <?php echo form_hidden(array('id'=>$target_user->id)); ?>
    <?php echo form_close();?>
  </div>
</section>