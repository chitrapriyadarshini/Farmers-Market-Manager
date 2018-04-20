<?php

function get_meta(){
    $output = '
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#7796A8">
    <link rel="canonical" href="http://uzhavarsandhai.com/">
    <link href="/theme/styles/Poppins.css" rel="stylesheet" type="text/css">
    <link href="/theme/styles/Pacifico.css" rel="stylesheet" type="text/css">
    <link href="/theme/styles/Poiret-One.css" rel="stylesheet" type="text/css">

    <!-- /snippets/social-meta-tags.liquid -->
    <meta property="og:site_name" content="Farmer\'s Market Manager">
    <meta property="og:url" content="http://uzhavarsandhai.com/">
    <meta property="og:title" content="Farmer\'s Market Manager">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Farmer\'s Market Manager">


    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Farmer\'s Market Manager">
    <meta name="twitter:description" content="Farmer\'s Market Manager">';
    return $output;
}
function get_styles() {
    $output = '
    <link href="/theme/styles/timber.scss.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/theme.scss.css" rel="stylesheet" type="text/css" media="all">

    <!--  css theme  -->


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.shopify.com/s/files/1/2644/1682/t/27/assets/ionicons.min.css?11789500483909204466" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/owl.transitions.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/owl.theme.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/slick.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/hover.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/color.scss.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/theme.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/responsive.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/browser.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/custom-color.css" rel="stylesheet" type="text/css" media="all">

    <!--  end  -->
    <link href="/theme/styles/engo_plugins.css" rel="stylesheet" type="text/css" media="all">
    <link href="/theme/styles/engo_base.scss.css" rel="stylesheet" type="text/css" media="all">

    <style>
    .shopify-payment-button__button--hidden {
            visibility: hidden;
        }

        .shopify-payment-button__button {
            border-radius: 4px;
            border: none;
            box-shadow: 0 0 0 0 transparent;
            color: white;
            cursor: pointer;
            display: block;
            font-size: 1em;
            font-weight: 500;
            line-height: 1;
            text-align: center;
            width: 100%;
            transition: background 0.2s ease-in-out;
        }

        .shopify-payment-button__button[disabled] {
            opacity: 0.6;
            cursor: default;
        }

        .shopify-payment-button__button--unbranded {
            background-color: #1990c6;
            padding: 1em 2em;
        }

        .shopify-payment-button__button--unbranded:hover:not([disabled]) {
            background-color: #136f99;
        }

        .shopify-payment-button__more-options {
            background: transparent;
            border: 0 none;
            cursor: pointer;
            display: block;
            font-size: 1em;
            margin-top: 1em;
            text-align: center;
            width: 100%;
        }

        .shopify-payment-button__more-options:hover:not([disabled]) {
            text-decoration: underline;
        }

        .shopify-payment-button__more-options[disabled] {
            opacity: 0.6;
            cursor: default;
        }

        .shopify-payment-button__button--branded {
            display: flex;
            flex-direction: column;
            min-height: 44px;
            position: relative;
            z-index: 1;
        }

        .shopify-payment-button__button--branded .shopify-cleanslate {
            flex: 1 !important;
            display: flex !important;
            flex-direction: column !important;
        }
    </style>
    ';

    return $output;
}

function get_script() {
    $output = '<script id="shopify-features" type="application/json">{"accessToken":"d8773b55f90ebfd5b68c714d3cc4d5ef","betas":["smart-payment-buttons"],"domain":"fruit-demo.myshopify.com","shopId":26441682,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.js"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "fruit-demo.myshopify.com";
Shopify.theme = {"name":"Fruit home 1 v2","id":28377317418,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=fruit-demo.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement("script");
      s.type = "text/javascript";
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName("script")[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent("onload", asyncLoad);
  } else {
    window.addEventListener("load", asyncLoad, false);
  }
})();
</script>
<script id="__st">var __st={"a":26441682,"offset":-14400,"reqid":"fdae6ffd-fa7a-48d0-8514-a7055933b405","pageurl":"fruit-demo.myshopify.com\/","t":"prospect","u":"9ef95bf8651f","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = "fruit-demo.myshopify.com";
window.ShopifyPay = window.ShopifyPay || {};
window.ShopifyPay.acceleratedFlowIncontext = false;
window.ShopifyPay.apiHost = "pay.shopify.com";
window.ShopifyPay.apiToken = "WHYyMHlpd0t6T2k0akwxN0dNQ0lvcEY3VUk1ZktOTkNoajNRRUNlTzc5bnBsZzBaK3pYODhjZ3BVekV4THZXSi0tRVVkd0hYeENOUGsxVHk3SGhBVVhHUT09--952aa326aeb427bcb7d9a491a2cf057227fb8ad0";
window.ShopifyPay.requestHost = "fruit-demo.myshopify.com"
window.ShopifyPay.sheetStyleSheetUrl = "\/\/cdn.shopify.com\/s\/assets\/shared\/sheet\/main-c150bd783aa9b2c6b0c41ded3880c45a0848a9914354d4222628be6c924200a3.css";
</script>
<script>
      window.ShopifyAnalytics = window.ShopifyAnalytics || {};
      window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
      window.ShopifyAnalytics.meta.currency = "USD";
      var meta = {"page":{"pageType":"home"}};
      for (var attr in meta) {
        window.ShopifyAnalytics.meta[attr] = meta[attr];
      }
    </script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">


(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery("body").append(content);
    }
  };

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    "identify",
    "page",
    "ready",
    "track",
    "trackForm",
    "trackLink"
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.onerror = function(e) {
      (new Image()).src = "//v.shopify.com/internal_errors/track?error=trekkie_load";
    };
    script.async = true;
    script.src = "https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1";
    var first = document.getElementsByTagName("script")[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":26441682,"isMerchantRequest":null,"themeId":28377317418,"themeCityHash":7601608590117495552}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1.0},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    
        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"home"}
        );
      
    
  });

  
      var eventsListenerScript = document.createElement("script");
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-f2c5800305098f0ebebdfa7d980c9abf56514c46d5305e97a7c476f7c9116163.js";
      document.getElementsByTagName("head")[0].appendChild(eventsListenerScript);
    
})();
</script>
<script defer="defer" integrity="sha256-Gxguwl5tUJiCAQahws5YsUZydI9kO/Ae0NlSA6CxBbI=" crossorigin="anonymous" src="//cdn.shopify.com/s/assets/storefront/express_buttons-1b182ec25e6d5098820106a1c2ce58b14672748f643bf01ed0d95203a0b105b2.js"></script>
<script defer="defer" integrity="sha256-2VwcaH5++f6tBn1FlAz0S70S91W72Fx5p4AyR2ay1zw=" crossorigin="anonymous" src="//cdn.shopify.com/s/assets/storefront/features-d95c1c687e7ef9fead067d45940cf44bbd12f755bbd85c79a780324766b2d73c.js"></script>

 <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/assets/themes_support/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js" type="text/javascript"></script> 
 <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/modernizr.min.js?11789500483909204466" type="text/javascript"></script> 
<!-- swatch   -->
    <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/bootstrap.min.js?11789500483909204466" type="text/javascript"></script>
   <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/bootstrap-custom.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/assets/themes_support/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js" type="text/javascript"></script>
<!-- end -->
  
<!--   jstheme -->
  
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery-3.2.1.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.fancybox.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery-ui.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/owl.carousel.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.jcarousellite.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.elevatezoom.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.mCustomScrollbar.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/slick.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/popup.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/modernizr.custom.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.hoverdir.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/timecircles.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/wow.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/theme1.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/instafeed.min.js?11789500483909204466" type="text/javascript"></script>
  
   
<!--  end  -->
<!-- <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/theme.js?11789500483909204466" type="text/javascript"></script> -->
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/engo-theme.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/slick.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.flipster.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/engo-plugins.js?11789500483909204466" type="text/javascript"></script>
  
  <script>
  window.ajax_cart = true;
  window.loading_url = "//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/loader2.gif?11789500483909204466";
  window.product_image_resize = true;
  window.enable_sidebar_multiple_choice = true;

  window.file_url = "//cdn.shopify.com/s/files/1/2644/1682/files/?11789500483909204466";
  window.asset_url = "";
  window.images_size = {
    is_crop: true,
    ratio_width : 1,
    ratio_height : 1,
  };
  window.inventory_text = {
    in_stock: "translation missing: en.products.product.in_stock",
    many_in_stock: "translation missing: en.products.product.many_in_stock",
    out_of_stock: "translation missing: en.products.product.out_of_stock",
    add_to_cart: "Add to Cart",
    sold_out: "Sold Out",
    unavailable: "Unavailable"
  };

  window.sidebar_toggle = {
    show_sidebar_toggle: "translation missing: en.general.sidebar_toggle.show_sidebar_toggle",
    hide_sidebar_toggle: "translation missing: en.general.sidebar_toggle.hide_sidebar_toggle"
  };

</script>';

    return $output;
}

// $url should be an absolute url
function redirect($url){
    if (headers_sent()){
        die('<script type="text/javascript">window.location=\''.$url.'\';</script‌​>');
    }else{
        header('Location: ' . $url);
        die();
    }
}

function get_header(){
$header = '
<div id="shopify-section-header" class="shopify-section">
    <header id="header">
        <div class="header header-v5">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <ul class="info-account list-inline-block pull-right">';
                                if(!(is_null($_SESSION['user']))) {
                                    $header .= '
                                    <li><a href="/account/account.php"><span class="color"><i class="fa fa-user-o"></i></span>'.$_COOKIE['username'].'</a></li>
                                    <li><a href="/account/logout.php"><span class="color"><i class="fa fa-key"></i></span>Log out</a></li>';
                                    }
                                else {
                                    $header .= '<li><a href="/account/login.php"><span class="color2"><i
                                                    class="fa fa-user-o"></i></span>Log in</a></li>
                                <li><a href="/account/register.php"><span class="color2"><i
                                                    class="fa fa-key"></i></span>Register</a></li>';
                                }
                            $header .= '</ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Header -->
            <div class="main-header main-header7">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                                
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="logo logo7">
                                <h1 class="hidden">Farmer\' Market Manager</h1>
                                <a href="/index.php"><img src="../../theme/assets/images/logo.png"
                                                                           alt=""
                                                                           style="max-width:300px;max-height: 115px;margin-top: -25px;"></a>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
								<div class="mini-cart-box mini-cart1 pull-right">';
								if(!(is_null($_SESSION['user']))) {
                                    $header.= '<a class="mini-cart-link" href="/cart.php">';
                                }
                                else{
                                    $header.= '<a class="mini-cart-link" href="/account/login.php">';
                                }
                                $header.= '<span class="mini-cart-icon title18 color"><i
                                                class="fa fa-shopping-basket"></i></span>
                                    <span class="mini-cart-number"><span class="CartCount">0</span> item - <span
                                                class="color" id="CartCost"> <span class="money"
                                                                                   data-currency-usd="$461.99"
                                                                                   data-currency-inr="Rs. 0.00"
                                                                                   data-currency="INR">Rs. 0.00</span></span></span>
                                </a>
                                <div class="mini-cart-content text-left" id="CartContainer">
  
	<div class="cart-empty" style="padding :30px">
        <p>Your shopping bag is empty</p>
      </div>
      <div class="cart-empty mini-cart-button" style="padding :0 30px 30px 30px">
        <a href="/collection.php" class="mini-cart-checkout">Go to the shop</a>
      </div>
 
  
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-header nav-header7 header-ontop">
                <div class="container">
                    <nav class="main-nav main-nav1">
                        <ul>
                            <li class=""><a href="/index.php">Home</a></li>
                            <li class=""><a href="/category.php">Category</a></li>
                            <li class=" menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="/shoplist.php">Shop list</a></li>
                                    
                                  </ul>
                                </li>
                                <li class=" menu-item-has-children">
                                    <a href="#">Latest News</a>
                                    <ul class="sub-menu">
                                        <li><a href="/latestnews.php">Latest News List</a></li>
                                  </ul>
                                </li>
                                <li class=""><a href="/aboutus.php">About</a></li>
                                <li class=""><a href="/contact.php">Contact</a></li>
                            </ul>
                            <a href="#" class="toggle-mobile-menu"><span></span></a>
                        </nav>
                    </div>
                </div>
                <!-- End Nav Header -->
            </div>
        </header>
    </div>';
return $header;
}