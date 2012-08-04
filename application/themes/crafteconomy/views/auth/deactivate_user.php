<?php if(!empty($message)): ?>
<div class="alert alert-block alert-error"><?php echo $message;?></div>
<?php endif; ?>

<div class="widget">
							
  <div class="widget-header">
  	<h3><?php echo $template['title']; ?></h3>
  </div> <!-- /widget-header -->
		
  <div class="widget-content">

  	<?php echo form_open("auth/deactivate/".$target_user->id);?>
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
  	<?php echo form_close(); ?>
  	
  </div> <!-- /widget-content -->
  
</div>