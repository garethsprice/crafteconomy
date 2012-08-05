<section class="row">
	<div class="span12">
  	<header class="page-header">
  		<h1>Complete order<small></h1>
  	</header>
    </div>
  	<div class="span4">
      <img src="<?php print $product['photo']; ?>" alt="">
    </div>
    <div class="span8 caption">
      <h3><?php print $product['title']; ?></h3>
      <p class='more-info'><?php print $product['description']; ?></p>
    <div>
      <span class="price">$<?php print $product['price']; ?></span>    	  
    </div>
  </div>
</section>
<br/>
<section class="row">
	<div class="span12">
	  <?php if(!empty($message)): ?>
    <div class="alert alert-block alert-error"><?php echo $message;?></div>
    <?php endif; ?>
	  
	  <?php print form_open('checkout/' . $product['id'], array('class' => 'form_horizontal')); ?>
      <fieldset style="margin-left: 21px;">
          <div class="control-group">
            <label class="control-label" for="email">Credit Card</label>
            <div class="controls">
              <?php print form_input($credit_card); ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="username">Expiration</label>
            <div class="controls">
              <?php print form_dropdown('expiration_month', $month = Array(
                  "1" => "January",
                  "2" => "February",
                  "3" => "March",
                  "4" => "April",
                  "5" => "May",
                  "6" => "June",
                  "7" => "July",
                  "8" => "August",
                  "9" => "September",
                  "10" => "October",
                  "11" => "November",
                  "12" => "December"
              )); ?> <?php print form_dropdown('expiration_year', array(
                  2012 => 2012,
                  2013 => 2013,
                  2014 => 2014,
                  2015 => 2015,
                  2016 => 2016,
              )); ?>
            </div>
          </div>
        	</fieldset>

        	<div class="form-actions">
        		<input type="submit" class="btn_buy btn btn-large btn-warning" value="Buy">
        		<button class="btn btn-large">Cancel</button>
      		</div>
      <?php print form_close(); ?>
  </div>
</section>