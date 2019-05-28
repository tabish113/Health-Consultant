<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">

<!-- Mirrored from iadvice.drupalet.com/blog?layout=gird by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Dec 2018 12:16:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta name="Generator" content="Drupal 8 (https://www.drupal.org)" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="core/misc/favicon.ico" type="image/vnd.microsoft.icon" />
<title>Blog posts | Your site name</title>
<link rel="stylesheet" href="sites/default/files/css/css_8eRKlJqR6Z6s3VnN9fHCgq0ALxsnd5FfO2IS51bEFwgb3da.css?pfjxu8" media="all" />
<link rel="stylesheet" href="sites/default/files/css/css_xs2FFgWNV0wLf1hqE32KcsTOCxps6YFMhSY1I92Ei0cb3da.css?pfjxu8" media="all" />
<link rel="stylesheet" href="themes/advices/css/styleb3da.css?pfjxu8" media="all" />
<link rel="stylesheet" href="themes/advices/css/responsiveb3da.css?pfjxu8" media="all" />
<link rel="stylesheet" href="themes/advices/css/updateb3da.css?pfjxu8" media="all" />
<!--[if lte IE 8]>
<script src="/sites/default/files/js/js_VtafjXmRvoUgAzqzYTA3Wrjkx9wcWhjP0G4ZnnqRamA.js"></script>
<![endif]-->

<style>
p{text-align:justify;}
span{text-align:justify;}


</style>
</head>
<body class="ltr">
<a href="#main-content" class="visually-hidden focusable">
Skip to main content
</a>
<div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>


<?php include("header.php");?>

<section id="blog-area" class="blog-default-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="blog-post">
<div class="row">
<div id="block-advices-content">
<div class="views-element-container">
<div>
<?php
include("db.php");
$select="SELECT * FROM blog";
$query=mysqli_query($con,$select);
while($run=mysqli_fetch_array($query)){
	
	$nm=$run['nm'];
	$img=$run['img'];
	$des=substr($run['des'],0,200);
	$id=$run['id'];
    

?>
<div class="col-md-4">
<div class="single-blog-post">
 <div class="img-holder">
<img src="product_img/<?php echo $img;?>" alt="">
<div class="overlay-style-one">
<div class="box">
<div class="content">
<a href="blog1.php?id=<?php echo $id;?>"><i class="fa fa-link" aria-hidden="true"></i></a>
</div>
</div>
</div>
</div>
<div class="text-holder">
</br>
<a href="blog1.php?id=<?php echo $id;?>">
<h3 class="blog-title"><?php echo $nm;?></h3>
</a>
<div class="text">
<p><?php echo $des;?></p>
</div>
<div class="bottom clearfix">
<div class="readmore pull-left">
<a href="blog1.php?id=<?php echo $id;?>">Read More</a>
</div>

</div>
</div>
</div>
</div>
<?php }?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php include("footer.php");?>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

</div>
 <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"blog","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"en","themeUrl":"\/themes\/advices","currentQuery":{"layout":"gird"}},"pluralDelimiter":"\u0003","ajaxTrustedUrl":{"\/search\/node":true},"style":null,"user":{"uid":0,"permissionsHash":"5cb2d079386917e803e304a2a8ce88a27c5521eb6d673e7ab6d8ec6e38c3e6e8"}}</script>
<script src="sites/default/files/js/js_dUs2LcFOOCh7KM9XOxYjXu0rvvyAosRovLTET5mKHdc.js"></script>
<script src="themes/advices/js/wow.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/bootstrap.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/jquery.bxslider.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/jquery.countTo2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/owl.carousel.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/validation2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/jquery.mixitup.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/jquery.easing.min2d03.js?v=8.5.6"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6NAQ4pXaDG9PMuM-Mqziu-7K12HQiRbY"></script>
<script src="themes/advices/js/gmaps2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/map-helper2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/jquery.fitvids2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/jquery-ui-1.11.4/jquery-ui2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/language-switcher/jquery.polyglot.language.switcher2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/jquery.fancybox.pack2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/jquery.appear2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/isotope2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/jquery.prettyPhoto2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/timepicker/timePicker2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/bootstrap-sl-1.12.1/bootstrap-select2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/jquery.themepunch.tools.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/jquery.themepunch.revolution.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/extensions/revolution.extension.actions.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/extensions/revolution.extension.carousel.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/extensions/revolution.extension.kenburn.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/extensions/revolution.extension.layeranimation.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/extensions/revolution.extension.migration.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/extensions/revolution.extension.navigation.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/extensions/revolution.extension.parallax.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/extensions/revolution.extension.slideanims.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/revolution/js/extensions/revolution.extension.video.min2d03.js?v=8.5.6"></script>
<script src="themes/advices/assets/html5lightbox/html5lightbox2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/chart2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/graph2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/custom2d03.js?v=8.5.6"></script>
<script src="themes/advices/js/update2d03.js?v=8.5.6"></script>
</body>

<!-- Mirrored from iadvice.drupalet.com/blog?layout=gird by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Dec 2018 12:16:53 GMT -->
</html>