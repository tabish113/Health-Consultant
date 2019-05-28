<!DOCTYPE html>
<html lang="en" dir="ltr" >

<!-- Mirrored from iadvice.drupalet.com/contact-0 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Dec 2018 12:17:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta name="Generator" content="Drupal 8 (https://www.drupal.org)" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="core/misc/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="canonical" href="contact-0.html" />
<link rel="shortlink" href="node/9.html" />
<link rel="revision" href="contact-0.html" />
<title>CONSULT | Jharkhand Diet</title>
<link rel="stylesheet" href="sites/default/files/css/css_zlSTK1RVaVjH8i5NkCtPcxuF-p5zQpK4_h9Ebe5qUTgb3da.css?pfjxu8" media="all" />
<link rel="stylesheet" href="sites/default/files/css/css_xs2FFgWNV0wLf1hqE32KcsTOCxps6YFMhSY1I92Ei0cb3da.css?pfjxu8" media="all" />
<link rel="stylesheet" href="themes/advices/css/styleb3da.css?pfjxu8" media="all" />
<link rel="stylesheet" href="themes/advices/css/responsiveb3da.css?pfjxu8" media="all" />
<link rel="stylesheet" href="themes/advices/css/updateb3da.css?pfjxu8" media="all" />
<!--[if lte IE 8]>
<script src="/sites/default/files/js/js_VtafjXmRvoUgAzqzYTA3Wrjkx9wcWhjP0G4ZnnqRamA.js"></script>
<![endif]-->
</head>
<body class="ltr">

<div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

<?php include("header.php");?>
<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	include("db.php");
$select="SELECT * FROM product WHERE id='$id'";
$q=mysqli_query($con,$select)or die(mysqli_error($con));
while($run=mysqli_fetch_array($q)){
	$pnm=$run['nm'];
	$pri=$run['price'];

GLOBAL $pnm;
GLOBAL $pri;



?>

<div id="block-contactform">
<section class="contact-area">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="contact-form">
<div class="sec-title text-center">
<h1></h1>
<div class="overlay-title">
<h2>You Pay Rs.<?php echo $pri;?> For <?php echo $pnm;?></h2>
</div>
</div></br>


<div class="container">
</br></br>
<form method="POST" action="cod.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="nm" class="form-control" id="inputEmail4" placeholder="Name" required>
      <input type="hidden" name="pnm" class="form-control" value="<?php echo $pnm;?>">
      <input type="hidden" name="pri" class="form-control" value="<?php echo $pri;?>">

    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">DOB</label>
      <input type="text" name="dob" class="form-control" id="inputPassword4" placeholder="DOB" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Weight</label>
      <input type="text" name="wt" class="form-control" id="inputEmail4" placeholder="Weight" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Height</label>
      <input type="text" name="ht" class="form-control" id="inputPassword4" placeholder="eg:5ft 9inc" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">E-mail</label>
      <input type="mail" name="em" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Number</label>
      <input type="number" name="no" class="form-control" id="inputPassword4" placeholder="Number" required>
    </div>
  </div>
  
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="inputCity">Occupation</label>
      <select  class="form-control" name="occu">
        <option value="Self Employed">Self Employed</option>
        <option value="Home Maker">Home Maker</option>
        <option value="Not Employed">Not Employed</option>
        <option value="Retired">Retired</option>
        <option value="Student">Student</option>
        <option value="Chartered Accountant">Chartered Accountant</option>
        <option value="Entertainment Industry Professional">Entertainment Industry Professional</option>
        <option value="Government Sector Professional">Government Sector Professional</option>
        <option value="Investment Banker">Investment Banker</option>
        <option value="Law Professional">Law Professional</option>
        <option value="Management Professional">Management Professional</option>
        <option value="Medical Professional">Medical Professional</option>
        <option value="Sales Professional">Sales Professional</option>
        <option value="Software / IT Professional">Software / IT Professional</option>
        <option value="Other">Other</option>




      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputCity">Gender</label>
      <select  class="form-control" name="gen">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
   
  </div>



  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="inputCity">Do you take any medication?</label>
      <select  class="form-control" name="med">
        <option value="No">No</option>
        <option value="Yes">Yes</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputCity">Do you have any allergies?</label>
      <select  class="form-control" name="allergies">
        <option value="No">No</option>
        <option value="Yes">Yes</option>
      </select>
    </div>
   
  </div>

  <div class="form-row">
  <div class="form-group col-md-12">
    <label for="inputAddress">Describe the purpose</label>
    <textarea class="form-control" name="pur" id="inputAddress2" placeholder="Describe the purpose of the consultation in detail" required></textarea>
    
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
    <label for="inputAddress">Address </label>
    <textarea class="form-control" name="add" id="inputAddress2" placeholder="Apartment, studio, or floor" required></textarea>
  </div>
</div>


  <center><input type="submit" name="submit" class="btn btn-primary" value="Pay Now" style="width:100%;"></center>
</form>

</div>
</div>
</div>
</div>
</div>
</section>
</div>
<?php }}?>
 
<?php include("footer.php");?>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

</div>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/9","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"en","themeUrl":"\/themes\/advices"},"pluralDelimiter":"\u0003","statistics":{"data":{"nid":"9"},"url":"\/core\/modules\/statistics\/statistics.php"},"ajaxTrustedUrl":{"\/search\/node":true,"form_action_p_pvdeGsVG5zNF_XLGPTvYSKCf43t8qZYSwcfZl2uzM":true},"style":null,"user":{"uid":0,"permissionsHash":"5cb2d079386917e803e304a2a8ce88a27c5521eb6d673e7ab6d8ec6e38c3e6e8"}}</script>
<script src="sites/default/files/js/js_9X1cUgbg7FD4RpNZWf07b4ZPWGwNrJA2P53vlesGxLI.js"></script>
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
<script src="sites/default/files/js/js_Gyv5zC78LqsNVcSVMLZuD3vQEh_9OYJra4AQw8PiYio.js"></script>
</body>

</html>
