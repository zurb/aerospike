<?php $myurl = basename($_SERVER['PHP_SELF']); ?>
<!doctype html>
<!--[if IE 9 ]>    <html class="ie9 no-js" lang="en"> <![endif]-->
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body class="<?php echo $bodyClass; ?>">