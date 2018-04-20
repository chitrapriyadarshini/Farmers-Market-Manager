<?php
require("./theme/lib.php");
if(is_null($_SESSION['user']))
    $_SESSION['user'] = $_COOKIE['user'];
else
    $_SESSION['user'] = NULL;?>

<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface js csstransitions shopify-features__smart-payment-buttons--enabled" lang="en" style=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <head>
        <?php
        echo get_meta();
        echo get_styles();
        echo get_script();
        ?>
        <title> Checkout </title>
    </head>

<body class="template-index" style="background: rgb(255, 255, 255);">

<?php echo get_header(); ?>
<br><br>
<div class="container">
    <div class="">

        <div class="page-container" id="PageContainer">
            <main class="main-content" id="MainContent" role="main">
                <div class="content-page">
                    <div class="shop-banner banner-adv line-scale zoom-image">
                        <a href="#" class="adv-thumb-link">
                            <img src="/theme/assets/images/account_banner.jpeg" alt="Banner-header">
                        </a>
                        <div class="banner-info text-center">
                            <h2 class="title30 color">
                                Checkout
                            </h2>
                            <div class="bread-crumb color2">
                                <a href="/" title="Back to the frontpage" class="color2">Home</a>
                                <span>
        Order
      </span>


                            </div>
                        </div>
                    </div>
                </div>





                <div class="page-width page-login">

                    <div class="section-header text-left">
                        <h3>Your Order has been received successfully</h3>
                        <a href="/collection.php" id="customer_logout_link">Go back to Shopping Page</a>
                    </div>

                    <div class="grid">

                    </div>
                </div>
        </div>

        </main>
    </div>
</div>
<?php include("./theme/include/footerr.php"); ?>
</body>
</html>
