<?php

require ("./theme/lib.php");
if(is_null($_SESSION['user']))
    $_SESSION['user'] = $_COOKIE['user'];
else
    $_SESSION['user'] = NULL;?>

<!DOCTYPE html>
<!-- saved from url=(0033)https://fruit-demo.myshopify.com/ -->
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


<html>

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

      

<div id=\"shopify-section-cart-template\" class=\"shopify-section\">
<section id=\"content\">
		<div class=\"container\">
			<div class=\"content-page\">
				<!-- /snippets/breadcrumb.liquid -->





<!-- /snippets/breadcrumb.liquid -->




<div class=\"shop-banner banner-adv line-scale zoom-image\">
  <a href=\"#\" class=\"adv-thumb-link\">
    
    
    
    <img src=\"//cdn.shopify.com/s/files/1/2644/1682/t/27/assets/breadcrumb_image_3.jpg?9974154348750016803\" alt=\"Banner-header\">
    
  
 
  </a>
  <div class=\"banner-info\">
    <h2 class=\"title30 color\">
      
        Your Shopping Cart
        
    </h2>
    <div class=\"bread-crumb white\">
     
    <a href=\"/\" title=\"Back to the frontpage\" class=\"white\">Home</a>
     

        <span>
        Your Shopping Cart
      </span>

        
    </div>
  </div>
</div>





				<!-- ENd Banner -->
				<div class=\"content-cart-checkout woocommerce\">
                   
					<h2 class=\"title30 font-bold text-uppercase\">Cart</h2>
					<form action=\"/cart\" method=\"post\" novalidate=\"\">
						<div class=\"table-responsive\">
							<table class=\"shop_table cart table\">
								<thead>
									<tr>
										<th class=\"product-remove\">&nbsp;</th>
										<th class=\"product-thumbnail\">&nbsp;</th>
										<th class=\"product-name\">Product</th>
										<th class=\"product-price\">Price</th>
										<th class=\"product-quantity\">Quantity</th>
										<th class=\"product-subtotal\">Total</th>
                               
									</tr>
								</thead>
								<tbody>
                                  
                           
									<tr class=\"cart_item\">
										<td class=\"product-remove\">
											<a class=\"remove\" href=\"/cart/change?line=1&amp;quantity=0\"><i class=\"fa fa-times\"></i></a>
										</td>
										<td class=\"product-thumbnail\">
											<a href=\"/products/fresh-meal-kit-1?variant=7948557615146\"><img src=\"//cdn.shopify.com/s/files/1/2644/1682/products/fruit_03_1ff0c82d-946b-41aa-a0ad-50083ef2607e_medium.jpg?v=1513649300\" alt=\"Fresh Meal Kit\"></a>					
										</td>
                                      <td class=\"product-name\" data-title=\"Product\">
                                        <a href=\"/products/fresh-meal-kit-1?variant=7948557615146\">Fresh Meal Kit</a>
                                        
                                        

                                      </td>
										<td class=\"product-price\" data-title=\"Price\">
										
                                          <span class=\"amount\"><span class=\"money\" data-currency-usd=\"$456.00\" data-currency-inr=\"Rs. 29,588.87\" data-currency=\"INR\">Rs. 29,588.87</span></span>	
                                      
										</td>
										<td class=\"product-quantity\">
                                      
  
    <div class=\"js-qty\">
   
                                                    
                                                    
      <button type=\"button\" class=\"js-qty__adjust js-qty__adjust--minus icon-fallback-text  silver\" data-id=\"\" data-qty=\"0\">
        <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i>
        <span class=\"fallback-text\">−</span>
      </button>
      <input type=\"text\" class=\"js-qty__num\" value=\"1\" min=\"1\" data-id=\"\" aria-label=\"quantity\" pattern=\"[0-9]*\" name=\"updates[]\" id=\"updates_7948557615146:ce9b9aa5dcb2232590cda5e5ad382b25\">
      <button type=\"button\" class=\"js-qty__adjust js-qty__adjust--plus icon-fallback-text silver\" data-id=\"\" data-qty=\"11\">
        <i class=\"fa fa-arrow-circle-up\" aria-hidden=\"true\"></i>
       
      </button>
    </div>
  
  

                                    </td>
										<td class=\"product-subtotal\" data-title=\"Total\">
									
                                          
                                          <span class=\"amount\">
                                            <span class=\"money\" data-currency-usd=\"$456.00\" data-currency-inr=\"Rs. 29,588.87\" data-currency=\"INR\">Rs. 29,588.87</span>
                                          </span>	
                                          
										</td>
									</tr>
                                  
									
									<tr>
										<td class=\"actions\" colspan=\"6\">
											
                                          
                                          <div class=\"coupon\" style=\"display:inline-block;\">
                                            <label for=\"CartSpecialInstructions\" style=\"display: block;text-align: left;\">Add a note to your order</label>
                                            <textarea name=\"note\" id=\"CartSpecialInstructions\" class=\"cart-note__input\" rows=\"2\" cols=\"50\"></textarea>
                                          </div>
                                          
											<input type=\"submit\" value=\"Update Cart\" name=\"update_cart\" class=\"button bg-color\">	
                                          
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>
					<div class=\"cart-collaterals\">
						<div class=\"cart_totals \">
							<h2>Cart Totals</h2>
							<div class=\"table-responsive\">
								<table class=\"table\">
									<tbody>
										<tr class=\"order-total\">
											<th>Subtotal</th>
											<td><strong><span class=\"amount\"><span class=\"money\" data-currency-usd=\"$456.00\" data-currency-inr=\"Rs. 29,588.87\" data-currency=\"INR\">Rs. 29,588.87</span></span></strong> </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class=\"wc-proceed-to-checkout\">
							
                              <a class=\"checkout-button button alt wc-forward bg-color\" href=\"/checkout.php\">Check out</a>
                             
                              
                              
							</div>
						</div>
					</div>
                  
				</div>	
			</div>
		</div>
		<!-- End Content Pages -->
	</section>





</div>


    </main>
 </div>
 ";