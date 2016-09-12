<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie-9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?=$document['meta']['description'] ?? ''?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$document['title']?></title>
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">

	<!-- Global Element & Page CSS -->
	<?php
		if ( isset($includeLiveCss) && ($includeLiveCss == true) ) {
			include_once('live-style.php');
		}
	?>
	<link rel="stylesheet" href="/style/style.css">
	<?php
		if ( (isset($componentName)) && ($componentName !='') ) { echo '<link rel="stylesheet" href="css/' . $componentName . '.css">'; }
	  if (isset($page_dir) && $page_dir) {
	  	stylesheet($page_dir.'css/page.css');
	  }
	  $stylesheets = array(
	  	'page.css',
	  	'style.css'
  	);
  	foreach ($stylesheets as $value) {
  	  if ( file_exists($value) ) {
  	  	stylesheet($value);
  	  }
  	}
	  if (file_exists('includes/css.php')) { include('includes/css.php');}
	?>

</head>

<body id="<?php echo( $document['body']['id'] ?? '' );}?>" class="<?php echo( $document['body']['class'] ?? '' );}?>">
<?php include_once('menus/header.php');?>

