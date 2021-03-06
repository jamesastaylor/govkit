<?php
/**
 * @file
 * html.tpl.php - Default theme implementation.
 */
?>
<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<head profile="<?php print $grddl_profile ?>">
  <meta charset="utf-8">
  <title><?php print $head_title ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="cleartype" content="on">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta property="og:title" content="<?php print $head_title; ?>"/>
  <?php print $head ?>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Roboto+Condensed:300,300i,400,400i" rel="stylesheet">
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
<body class="<?php print $classes ?>"<?php print $attributes ?>>
  <?php print $page_top ?>
  <?php print $page ?>
  <?php print $page_bottom ?>
  <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.4'><\/script>".replace("HOST", location.hostname));
    //]]></script>
</body>
</html>
