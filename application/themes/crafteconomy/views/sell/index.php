<div class="row">
  <div class="span12">
  	<header class="page-header">
  		<h1>List item for sale</h1>
  	</header>
  </div>
</div>

<section class="row">
	<div class="span12">
	  
    <?php if(!empty($message)): ?>
    <div class="alert alert-block alert-error"><?php echo $message;?></div>
    <?php endif; ?>

  	<?php echo form_open("sell", array('class' => 'form-horizontal')); ?>
      <fieldset>
          <div class="control-group">
            <label class="control-label">Title</label>
            <div class="controls">
              <?php print form_input($title); ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Photo</label>
            <div class="controls">
              <?php print form_input($photo); ?>
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label">Description</label>
            <div class="controls">
              <?php print form_textarea($description); ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="email">Price</label>
            <div class="controls">
              <div class="input-prepend">
                <span class="add-on">$</span><?php print form_input($price); ?>
              </div>
            </div>
          </div>

          <hr>
          <div class="control-group">
            <label class="control-label" for="password"></label>
            <div class="controls">
            	<label class="checkbox">
            		<input type="checkbox" id="list_on_etsy" name="list_on_etsy" value="yes" disabled="true">
            		List this item on <img src="<?php print site_url('assets/themes/crafteconomy/img/etsy_logo.jpg'); ?>" /> (additional fees will apply)
          		</label>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="password"></label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="list_on_ebay" name="list_on_ebay" value="yes" disabled="true">
                List this item on <img src="<?php print site_url('assets/themes/crafteconomy/img/ebay_logo.jpg'); ?>" width="7%" height="7%" /> (additional fees will apply)
              </label>
            </div>
          </div>

          <hr>
          <div class="control-group">
            <label class="control-label" for="password"></label>
            <div class="controls">
            	<label class="checkbox">
            		<input type="checkbox" id="confirm_listing_sms" name="confirm_listing_sms" value="yes">
            		Are you a reseller?
          		</label>
            </div>
          </div>
          <div id="confirmphone" class="hide control-group">
            <label class="control-label" for="password">Maker's Phone Number</label>
            <div class="controls">
              <?php print form_input($maker_phone); ?>
            </div>
          </div>
          
        	<div class="form-actions">
        		<button type="submit" class="btn btn-large btn-primary">Create Listing</button>
        		<button class="btn btn-large">Cancel</button>

      		</div>
      <?php echo form_close(); ?>
  </div>
</section>