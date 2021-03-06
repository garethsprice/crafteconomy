<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<!-- Data about Data, so meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<title><?php echo implode(' | ', array($template['title'], $this->config->item('site_title', 'ion_auth'))); ?></title> 
  
	<!-- Zhe fonts und styles -->
	<link href="http://fonts.googleapis.com/css?family=Ubuntu:bold" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Exo:bold' rel='stylesheet' type='text/css'>
	<link href="<?php print site_url('assets/themes/crafteconomy/css/bootstrap.min.css'); ?>" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="<?php print site_url('assets/themes/crafteconomy/css/bootstrap-responsive.css'); ?>" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="<?php print site_url('assets/themes/crafteconomy/css/lightbox.css'); ?>" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href="<?php print site_url('assets/themes/crafteconomy/css/style.css'); ?>" media="screen, projection" rel="stylesheet" type="text/css" />

	<!-- Le Favicon and zhe lame apple stuffz -->
	<link rel="shortcut icon" href="<?php print site_url('assets/themes/crafteconomy/img/favicon.ico'); ?>">
	<link rel="apple-touch-icon-precomposed" href="<?php print site_url('assets/themes/crafteconomy/img/apple-touch-icon-precomposed.png'); ?>">

	<script src="<?php print site_url('assets/js/jquery-1.7.2.min.js'); ?>"></script>
	<script src="<?php print site_url('assets/js/jquery.validate.min.js'); ?>"></script>

	<?php echo $template['metadata']; ?>

	<script src="<?php print site_url('assets/themes/crafteconomy/js/crafteconomy.js'); ?>"></script>

	
	<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-33886838-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</head>

<!DOCTYPE html> 
<html>

<body> 
  
  <div class="container">
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  	<!-- Zhe navigation -->
  	<header class="header">
  		<div class="row">
  			<!-- Zhe Logo & name -->
  			<div class="span6">
  				<h1>
  				  <a href="<?php print site_url('/'); ?>">
    					<img src="<?php print site_url('assets/themes/crafteconomy/img/logo.png'); ?>" alt="logo" id="logo">
    				</a>
  				</h1>
  			</div>
  			<!-- Menu & Search -->
  			<?php print $main_nav; ?>
  		</div>
  	</header>
  
    <article>
    <?php echo $template['body']; ?>
    </article>
	</div> <!-- end container -->
  
  	<footer class=footer>
  		<div class=top>
  		    	  <div class="container">
  				<div class=row>
  					<div class=span5>
  						<h3>Contact information</h3>
  						<p>Built in 24 hours for eCommerce Hack Day 2012.<br>
  							<br/>Design by <a href="http://twitter.com/mhhalle">Marie-Hélène Hallé</a><br>
  							<br/>Development by <a href="http://twitter.com/ibagrak">Ilya Bagrak</a>, <a href="http://twitter.com/abemassry">Abe Massry</a>, <a href="http://www.garethsprice.com/">Gareth Price</a><br>
  					</div>
  					<div class=span7>
  						<h3>Join us on our adventure</h3>
  						<p>Get the latest CraftEconomy news, discounts, specials and more!</p>
  						<form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" class="form-horizontal">
  							<div class="control-group">
  								<div class="input-append input-prepend">
  									<span class=add-on>@</span><input class="span4" type="text" size="16" name="ea"><input class="btn" type="submit" value="sign up">
  								</div>
  							</div>
  							<img src="https://imgssl.constantcontact.com/ui/images1/safe_subscribe_logo.gif" border="0" width="168" height="14" alt=""/>
  							<input type="hidden" name="llr" value="qhmwwlkab">
                <input type="hidden" name="m" value="1110641946864">
                <input type="hidden" name="p" value="oi">
  						</form>
  					</div>
  				</div>
  				</div>
  		</div>
  		<div class=bottom>
	    	  <div class="container">
				<div class="row">
				  <div class="span5" style="text-align: left;">
				    <p><strong>Powered by:</strong> Twilio, SendGrid, Temboo,<br/>Stripe, Constant Contact, Paypal, Etsy, eBay</p>
				  </div>
					<div class="span7">
						<p>&copy; CraftEconomy <?php print date('Y'); ?> All Rights Reserved - <a href="<?php print site_url('terms'); ?>">Terms of Service</a></p>
					</div>
				</div>
  		</div>
  	</footer>

	<!-- JS & bottom like zhe pro's -->
	<script src="<?php print site_url('assets/themes/crafteconomy/js/libs/bootstrap.min.js'); ?>"></script>
</body>
</html>
