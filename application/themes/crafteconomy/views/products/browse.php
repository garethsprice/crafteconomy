<div class="row">
<div class="span12">
	<header class="page-header">
		<h1>
			Today's Top Sellers
		</h1>
	</header>
</div>
</div>
<div class="row">
<div class="span12">
	<ul class="thumbnails" id="products">
	      <?php foreach($products as $product): ?>
    			<li class="span4 product">
      				<div class="thumbnail">
        				<img src="<?php print $product['photo']; ?>" alt="">
        				<div class="caption">
                    <div style="white-space: nowrap;overflow: hidden; text-overflow:ellipsis;">
          					<h4><?php print $product['title']; ?></h4>
                  </div>
          					<p class='more-info hide'><?php print $product['description']; ?></p>
            			<div >
            				<span class="price">$<?php print $product['price']; ?></span>
            				<a  href="<?php print site_url('checkout/' . $product['id']); ?>" style="margin-left:5px;" type="submit" class="btn_checkout pull-right btn btn-warning"><i class="icon-shopping-cart icon-white"></i>Buy</a>
            				<button class="btn_more_info pull-right btn btn-primary">More info</button>
           				</div>
        				</div>
      				</div>
      			</li>

	      <?php endforeach; ?>
    	</ul>
</div>
</div>

<script src="<?php print site_url('assets/js/jquery.isotope.min.js'); ?>"></script>
<script type="text/javascript">$(document).ready(function(){
  var $container = $('#products');
  
  $container.imagesLoaded( function(){
    $container.isotope({
      // options...
    });
  });
});</script>