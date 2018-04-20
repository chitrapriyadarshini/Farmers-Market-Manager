<?php


require("./theme/lib.php");
require("./lib/dblib.php");
if(is_null($_SESSION['user']))
    $_SESSION['user'] = $_COOKIE['user'];
else
    $_SESSION['user'] = NULL;
?>

<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface js csstransitions shopify-features__smart-payment-buttons--enabled"
      lang="en" style="">
<head>
    <?php
    echo get_meta();
    echo get_styles();
    ?>
    <title> List Items </title>
</head>

<body class="template-index" style="background: rgb(255, 255, 255);">

<?php echo get_header(); ?>
<br><br>
<?php
echo "<div id=\"shopify-section-1516588728376\" class=\"shopify-section index-section\"><!-- section-slider-v1.liquid -->

<div data-section-id=\"1516588728376\" data-section-type=\"section-category-v3\" style=\" \">
  <section>
    <div class=\"container\">
      <div class=\"pop-cat8 bg-white\">
				<h2 class=\"title30 font-bold text-center\">List of Uzhavarsanthais</h2>
				<div class=\"popcat-slider8\">
					<div class=\"wrap-item owl-carousel owl-theme\" data-pagination=\"false\" data-navigation=\"true\" data-itemscustom=\"[[0,1],[560,2],[990,3]]\" style=\"opacity: 1; display: block;\">
						 
                      <div class=\"owl-item active\" style=\"width: 341px;\"><div class=\"item-popcat8\">
							<div class=\"banner-adv overlay-image zoom-out\">
								<a href=\"\" class=\"adv-thumb-link\">
									 <img src=\"/theme/assets/images/01_farmers_market-3.jpeg\" alt=\"\">
                                   <img src=\"/theme/assets/images/01_farmers_market-3.jpeg\" alt=\"\">
							
								</a>
							</div>
							<div class=\"popcat-info8 text-center\">
								<h3 class=\"title18\">Pallavaram Uzhavar Santhai</h3>
								<p class=\"desc\">Uzhavar Sandhai (farmer’s market) is a scheme to promote direct contact between farmers and consumers in the Indian state of Tamil Nadu.</p>
								<a href=\"/pallavaram.php\" class=\"btn-arrow color\">View the site products</a>
							</div>
						</div></div><div class=\"owl-item active\" style=\"width: 341px;\"><div class=\"item-popcat8\">
							<div class=\"banner-adv overlay-image zoom-out\">
								<a href=\"\" class=\"adv-thumb-link\">
									 <img src=\"/theme/assets/images/Farmers-Market-1.jpeg\" alt=\"\">
                                   <img src=\"/theme/assets/images/Farmers-Market-1.jpeg\" alt=\"\">
							
								</a>
							</div>
							<div class=\"popcat-info8 text-center\">
								<h3 class=\"title18\">Uzhavarsandhai Chromepet</h3>
								<p class=\"desc\">The objective of this farmer's market is to promote direct contact between farmers and consumers, through which the farmer can get full profit. </p>
								<a href=\"/chrompet.php\" class=\"btn-arrow color\">View the site products</a>
							</div>
						</div></div><div class=\"owl-item active\" style=\"width: 341px;\" active=\"\"><div class=\"item-popcat8\">
							<div class=\"banner-adv overlay-image zoom-out\">
								<a href=\"\" class=\"adv-thumb-link\">
									 <img src=\"/theme/assets/images/farmers-market-2.jpeg\" alt=\"\">
                                   <img src=\"/theme/assets/images/farmers-market-2.jpeg\" alt=\"\">
							
								</a>
							</div>
							<div class=\"popcat-info8 text-center\">
								<h3 class=\"title18\">Kundrathur Santhai</h3>
								<p class=\"desc\">The markets are maintained and regulated by the Community Center and prices to the products are fixed on day basis.</p>
								<a href=\"/kundrathur.php\" class=\"btn-arrow color\">View the site products</a>
							</div>
						</div></div></div>
						
					</div>
				</div>
			</div>

      </div>
  </section>



</div>


</div>

<div>
<section>
    <div class=\"container\">
      <div class=\"pop-cat8 bg-white\">
					 <div id=\"map\" style=\"width: 1000px; height: 400px;\"></div>

  

              
              </div>
</div>
</section>
</div>
";
include("theme/include/footerr.php");
echo get_script();

echo "
<!--<script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap\">
    </script>-->
<script src=\"http://maps.google.com/maps/api/js?key=AIzaSyBvu244MA3lIANoX-iiZ9ldmcHyOA-XAwo&sensor=false\" 
          type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    var locations = [
      ['Chromepet Uzhavar Santhai', 12.9488674,80.15302329999997,1],
      ['Kundrathur Uzhavar Santhai', 12.996765, 80.091542, 2],
      ['Pallavaram Uzhavar Santhai', 12.970826, 80.14734190000001, 3]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: new google.maps.LatLng(12.970826, 80.14734190000001),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
  </body>
  </html>";
