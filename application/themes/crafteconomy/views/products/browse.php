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
	<ul class="thumbnails">
	      <?php foreach($products as $product): ?>

    			<li class="span4">
      				<div href="#" class="thumbnail">
        				<img src="<?php print $product['photo']; ?>" alt="">
        				<div class="caption">
          					<h4><?php print $product['title']; ?></h4>
          					<p class='more-info hide'><?php print $product['description']; ?></p>
            			<div >
            				<span class="price">$<?php print $product['price']; ?></span>
            				<button style="margin-left:5px;" type="submit" class="btn_checkout pull-right btn btn-warning"><i class="icon-shopping-cart icon-white"></i>Buy</button>
            				<button type="submit" class="btn_more_info pull-right btn btn-primary">More info</button>

           				</div>
        				</div>
      				</div>
      			</li>

	      <?php endforeach; ?>
    	</ul>
</div>
</div>