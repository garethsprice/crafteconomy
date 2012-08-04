<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title><?php echo $template['title']; ?></title> 
	
	<link rel="shortcut icon" href="#">
  <link rel="shortcut icon" href="#" type="image/gif">
  
  <link rel="image_src" href="#"> <!-- Facebook image -->
  <meta property="og:title" content="Craft Economy">
  <meta property="og:description" content="The Marketplace for the Global Village">
  <meta property="og:type" content="website">
  <meta property="og:image" content="#">
	
	<link href="<?php print site_url('assets/themes/crafteconomy/stylesheets/screen.css'); ?>" media="screen, projection" rel="stylesheet" type="text/css" />
  <script src="<?php print site_url('assets/themes/crafteconomy/js/jquery-1.7.2.min.js'); ?>"></script>
  <script src="<?php print site_url('assets/themes/crafteconomy/js/jquery.validate.min.js'); ?>"></script>
	<script src="<?php print site_url('assets/themes/crafteconomy/js/crafteconomy.js'); ?>"></script>
	
	<?php echo $template['metadata']; ?>
	
	<?php /* <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '#']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script> */ ?>
</head> 

<body> 
  
  <header>
    <h1><a href="/" id="logo" rel="home" name="logo"><!--<img src="#">-->Craft Economy</a></h1>
  <?php print $main_nav; ?>
  </header>
  
  <?php echo $template['body']; ?>
</body>
</html>