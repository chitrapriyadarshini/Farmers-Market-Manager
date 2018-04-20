<?php
require ("theme/lib.php");
if(is_null($_SESSION['user']))
    $_SESSION['user'] = $_COOKIE['user'];
else
    $_SESSION['user'] = NULL;
?>
<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface js csstransitions shopify-features__smart-payment-buttons--enabled" lang="en" style=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#7796A8">
    <link rel="canonical" href="http://uzhavarsandhai.com/">
    <link href="./theme/styles/Poppins.css" rel="stylesheet" type="text/css">
    <link href="./theme/styles/Pacifico.css" rel="stylesheet" type="text/css">
    <link href="./theme/styles/Poiret-One.css" rel="stylesheet" type="text/css">
    <title> Farmer's Market Manager </title>

    <!-- /snippets/social-meta-tags.liquid -->
    <meta property="og:site_name" content="Farmer's Market Manager">
    <meta property="og:url" content="http://uzhavarsandhai.com/">
    <meta property="og:title" content="Farmer's Market Manager">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Farmer's Market Manager">


    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Farmer's Market Manager">
    <meta name="twitter:description" content="Farmer's Market Manager">

    <?php
    echo get_styles();
    //echo get_script();
    ?>

<body class="template-index" style="background: rgb(255, 255, 255);">

<?php echo get_header();
?>


<br><br>

<?php

echo "
<script src=\"./styles/scripts/quickview.js\" type=\"text/javascript\"></script>
  <script src=\"./styles/scripts/wish-list.js\" type=\"text/javascript\"></script>
  <script src=\"./styles/scripts/timber.js\" type=\"text/javascript\"></script>
  <script src=\"./styles/scripts/countdown.js\" type=\"text/javascript\"></script>
  <script src=\"./styles/scripts/collection.js\" type=\"text/javascript\"></script>
  
  <link href=\"./theme/styles\css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"./theme/styles/css(1)\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"./theme/styles/css(2)\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"./theme/styles/theme.scss.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"> 
  <link href=\"./theme/styles/timber.scss.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/bootstrap-theme.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/owl.carousel.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/owl.transitions.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/jquery.mCustomScrollbar.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/owl.theme.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/slick.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/animate.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/hover.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/color.scss.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/theme.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/responsive.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/browser.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/custom-color.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
<div class=\"page-container\" id=\"PageContainer\">

    <main class=\"main-content\" id=\"MainContent\" role=\"main\">

      
<section id=\"content\">
		<div class=\"container\">
			<div class=\"content-page\">
				<div class=\"contact-map border\">
					<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d972.0008733117974!2d80.0427517863136!3d12.971628038541878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52f4d07355bab5%3A0xbb6063169c4ed4d9!2sChennai+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1523206835710\" style=\"border:0\" allowfullscreen=\"\" width=\"1170\" height=\"380\"></iframe>
              
              </div>
				<div class=\"contact-info-page\">
					<div class=\"list-contact-info\">
						<div class=\"row\">
							<div class=\"col-md-4 col-sm-4 col-xs-12\">
								<div class=\"item-contact-info text-center\">
									<a class=\"contact-icon color wobble-horizontal\" href=\"#\"><i class=\"fa fa-mobile\"></i></a>
									<h2 class=\"title18 text-upperrcase font-bold\">Hotline: <a href=\"#\">9123456780</a></h2>
								</div>
							</div>
							<div class=\"col-md-4 col-sm-4 col-xs-12\">
								<div class=\"item-contact-info text-center\">
									<a class=\"contact-icon color wobble-horizontal\" href=\"#\"><i class=\"fa fa-mobile\"></i></a>
									<h2 class=\"title18 text-upperrcase font-bold\">Hotline: <a href=\"#\">7896541230</a></h2>
								</div>
							</div>
							<div class=\"col-md-4 col-sm-4 col-xs-12\">
								<div class=\"item-contact-info text-center\">
									<a class=\"contact-icon color wobble-horizontal\" href=\"#\"><i class=\"fa fa-mobile\"></i></a>
									<h2 class=\"title18 text-upperrcase font-bold\">Hotline: <a href=\"#\">8970234561</a></h2>
								</div>
							</div>
						</div>
					</div>
					<p class=\"desc\">If the supplier fails to ship your products on time or the product quality does not meet the standards set in your contract, Aloshop will refund the covered amount of your payment.</p>
				</div>
				<div class=\"contact-form-page\">
					<h2 class=\"title30 text-uppercase font-bold\">CONTACT FROM</h2>
					<div class=\"form-contact\">
                      
                       <form method=\"post\" action=\"/index.php\" id=\"contact_form\" accept-charset=\"UTF-8\" class=\"contact-form\"><input type=\"hidden\" name=\"form_type\" value=\"contact\"><input type=\"hidden\" name=\"utf8\" value=\"✓\">

          

          
					
							<div class=\"row\">
								<div class=\"col-md-4 col-sm-4 col-xs-12\">
									<input type=\"text\" id=\"ContactFormName\" value=\"Name *\" name=\"contact[name]\" onfocus=\"if (this.value==this.defaultValue) this.value = ''\" onblur=\"if (this.value=='') this.value = this.defaultValue\">
								
                                 	</div>
								<div class=\"col-md-4 col-sm-4 col-xs-12\">
									  <input type=\"email\" class=\"form-control\" id=\"ContactFormEmail\" value=\"email *\" name=\"contact[email]\" autocorrect=\"off\" autocapitalize=\"off\" onfocus=\"if (this.value==this.defaultValue) this.value = ''\" onblur=\"if (this.value=='') this.value = this.defaultValue\">
							</div>
								<div class=\"col-md-4 col-sm-4 col-xs-12\">
									<input type=\"text\" class=\"form-control\" value=\"Website\" placehoder=\"website\" name=\"contact[website]\" onfocus=\"if (this.value==this.defaultValue) this.value = ''\" onblur=\"if (this.value=='') this.value = this.defaultValue\">
							</div>
								<div class=\"col-md-12 col-sm-12 col-xs-12\">
									 <textarea placeholder=\"Comment\" cols=\"30\" rows=\"8\" id=\"ContactFormMessage\" name=\"contact[body]\" onfocus=\"if (this.value==this.defaultValue) this.value = ''\" onblur=\"if (this.value=='') this.value = this.defaultValue\"></textarea>
                       
                                  
                                  <input class=\"shop-button\" value=\"Send\" type=\"submit\">
								</div>
							</div>
				
                   </form>
					</div>
				</div>
			</div>	
			<!-- End Content Page -->
		</div>
	</section>



    </main>
 </div>";
include ("./theme/include/footerr.php");
echo "</body></html>";
?>
