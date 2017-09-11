<?php include_once('main.php'); ?>

<!DOCTYPE html>

<html>

<head>

<meta http-equiv="content-type" content="text/html;charset=utf-8">

<noscript><meta http-equiv="refresh" content="0; url=error.php?error_code=2"></noscript>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-cookies.js" type="text/javascript"></script>
<script src="js/jquery-base64.js" type="text/javascript"></script>
<?php include('js/header-js.php'); ?>
<script src="js/main.js" type="text/javascript"></script>

<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="img/favicon.ico">

<title><?php echo global_title . ' - ' . global_organization; ?></title>

</head>

<body>

<div id="notification_div"><div id="notification_inner_div"><div id="notification_inner_cell_div"></div></div></div>

<div id="header_div"><?php include('header.php'); ?></div>


<div id="brand_div" style="width: 600px;clear: both;margin: auto;height: 100px;">
  <div>
    <img src="http://www.ist-bochum.de/wp-content/themes/boldy/bilder/ZDI_LOGO_rgb_60h.jpg" alt="logo Ist" />
  </div>
  <div>
    <h1><?php echo global_title; ?></h1>
    <h2><?php echo global_organization; ?></h2>
  </div>
</div>

<div id="content_div"></div>

<div id="preload_div">
<img src="img/loading.gif" alt="Loading">
</div>

</body>

</html>
