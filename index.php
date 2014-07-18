<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Gif Patterns</title>
    <!-- Run in full-screen mode. -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Make the status bar black with white text. -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Customize home screen title. -->
    <meta name="apple-mobile-web-app-title" content="Gif Pattern">

    <!-- Disable phone number detection. -->
    <meta name="format-detection" content="telephone=no">

    <!-- Set viewport. -->
    <meta name="viewport" content="initial-scale=1">

    <!-- Prevent text size adjustment on orientation change. -->
    <style>html { -webkit-text-size-adjust: 100%; }</style>
	<link rel="shortcut icon" href="favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="favicons/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
	<meta name="msapplication-config" content="favicons/browserconfig.xml">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>

<script type="text/javascript">
   function blockMove() {
   		event.preventDefault(); }
</script>

</head>






<body ontouchmove="blockMove()">

<div class="slider single-item">

	<?php
		$dir = "img";
		$imgext = array('jpg','jpeg','png','gif','bmp','tiff','svg');	
		$files = scandir($dir);

		foreach ($files as $file) {
		$ext = pathinfo($file, PATHINFO_EXTENSION);	
		if(in_array($ext, $imgext)){
		if($file != '.' && $file != '..'){?>
	
		<div class="img-container" style="background: url('img/<?php echo $file ?>') repeat center center;"></div>

	
	<?php }}}?>

</div>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.0/highlight.min.js"></script>
	<script type="text/javascript" src="slick/slick.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>
