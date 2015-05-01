<?php $myurl = basename($_SERVER['PHP_SELF']); ?>
<!doctype html>
<!--[if IE 9 ]>    <html class="ie9 no-js" lang="en"> <![endif]-->
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="stylesheets/app.css" />
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700,900' rel='stylesheet' type='text/css'>    
    <script src="bower_components/modernizr/modernizr.js"></script>    
  </head>
  <body class="<?php echo $bodyClass; ?>">