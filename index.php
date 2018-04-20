<?php require("theme/lib.php");

session_start();
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
    <title> Farmer's Market Manager </title>
</head>

<body class="template-index preload" style="background:#ffffff">

<?php echo get_header(); ?>
<br>
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <div id="shopify-section-1516359879983" class="shopify-section index-section">
            <div data-section-id="1516359879983" data-section-type="section-slider-v7" style=" ">
                <section>
                    <div class="container">
                        <div class="banner-slider banner-slider7">
                            <div class="wrap-item owl-carousel owl-theme"
                                 data-itemscustom="[[0,1]]" style="opacity: 1; display: block;">
                                <div class="owl-wrapper-outer">
                                    <div class="owl-wrapper" style="width: 7020px; left: 0px; display: block;">
                                        <div class="owl-item active" style="width: 1170px;">
                                            <div class="item-slider item-slider7">
                                                <div class="banner-thumb"><a href=""><img
                                                                src="/theme/assets/images/banner-1.png"
                                                                alt=""></a></div>
                                                <div class="banner-info text-center text-uppercase animated zoomInRight"
                                                     data-animated="zoomInRight">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div id="shopify-section-1516360315505" class="shopify-section index-section">
            <div data-section-id="1516360315505" data-section-type="section-fruit-health" style=" ">
                <section>
                    <div class="container">
                        <div class="fruit-health7">
                            <h2 class="title30 font-bold text-center">Fruit And Health</h2>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="list-diet7 left">
                                        <div class="item-diet table">
                                            <div class="diet-info text-right">
                                                <h3 class="title18"><a href="#"
                                                                       class="black">Capsicum</a></h3>
                                                <p class="desc">Best Superfoods for Weight Loss</p>
                                            </div>
                                            <div class="diet-thumb"><a href="#"><img
                                                            src="/theme/assets/images/diet1.png"
                                                            alt=""></a></div>
                                        </div>
                                        <div class="item-diet table">
                                            <div class="diet-info text-right">
                                                <h3 class="title18"><a href="#"
                                                                       class="black">Kiwi</a></h3>
                                                <p class="desc">Healthiest Superfoods for Women</p>
                                            </div>
                                            <div class="diet-thumb"><a href="#"><img
                                                            src="/theme/assets/images/diet2_2bd6e5d3-de9f-470d-aba2-58f07ebaea47_small.png"
                                                            alt=""></a></div>
                                        </div>
                                        <div class="item-diet table">
                                            <div class="diet-info text-right">
                                                <h3 class="title18"><a href="#"
                                                                       class="black">Red Apple</a></h3>
                                                <p class="desc">Fresh fruit that helps you to Lose
                                                    Weight</p>
                                            </div>
                                            <div class="diet-thumb"><a href="#"><img
                                                            src="/theme/assets/images/diet3.png"
                                                            alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="sevenup-theme">
                                        <a href="#">
                                            <img src="/theme/assets/images/seven_large.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="list-diet7 right">
                                        <div class="item-diet table">
                                            <div class="diet-thumb"><a href="#"><img
                                                            src="/theme/assets/images/diet4_small.png"
                                                            alt=""></a></div>
                                            <div class="diet-info">
                                                <h3 class="title18"><a href="#"
                                                                       class="black">Strawberry</a></h3>
                                                <p class="desc">Best Superfoods for Weight Loss</p>
                                            </div>
                                        </div>
                                        <div class="item-diet table">
                                            <div class="diet-thumb"><a href="#"><img
                                                            src="/theme/assets/images/diet5_small.png"
                                                            alt=""></a></div>
                                            <div class="diet-info">
                                                <h3 class="title18"><a href="#"
                                                                       class="black">Watermelon</a></h3>
                                                <p class="desc">Healthiest Superfoods for Women</p>
                                            </div>
                                        </div>
                                        <div class="item-diet table">
                                            <div class="diet-thumb"><a href="#"><img
                                                            src="/theme/assets/images/diet6_small.png"
                                                            alt=""></a></div>
                                            <div class="diet-info">
                                                <h3 class="title18"><a href="#"
                                                                       class="black">Banana</a></h3>
                                                <p class="desc">A great dietary source of potassium
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div id="shopify-section-1516361152118" class="shopify-section index-section">
            <div data-section-id="1516361152118" data-section-type="section-blog-v2" style=" ">
                <section class="blog-v2">
                    <div class="container">
                        <div class="from-blog2">
                            <h2 class="color2 title30 text-center title-box2 wow zoomIn"
                                style="visibility: visible; animation-name: zoomIn;">Why Farmer's Market Manager?</h2>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="item-blog2 wow fadeInUp"
                                         style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-6 col-xs-6">
                                                <div class="banner-adv zoom-image overlay-image">

                                                    <a href="/blogs/home2/food-allergy-survival" class="adv-thumb-link"><img
                                                                src="/theme/assets/images/stewardship.jpeg"
                                                                alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-6">
                                                <div class="blog-info2 text-center info-center">
                                                    <h2 class="title18">STEWARDSHIP</h2>
                                                    <ul class="list-inline-block post-comment-date">
                                                        <li><span class="color"><i
                                                                        class="fa fa-commenting-o"></i></span><a
                                                                    href="#" class="color"></a></li>
                                                    </ul>
                                                    <p class="desc">We nourish the health and integrity of farmers and people, by building a local, sustainable, and organic food economy in a vibrant, educational marketplace.We support agriculture in Tamil Nadu by connecting community and agricultural producers through commerce.It exists to provide a living wage for our area farmers, conserve our farm land, provide the people with fresh, high-quality agricultural products to save family farms.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <div class="item-blog2 wow fadeInLeft"
                                         style="visibility: visible; animation-name: fadeInLeft;">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="blog-info2 text-left info-left">
                                                    <h2 class="title18">COMMUNITY</h2>
                                                    <ul class="list-inline-block post-comment-date">
                                                        <li><span class="color"><i
                                                                        class="fa fa-commenting-o"></i></span><a
                                                                    href="#" class="color"></a></li>
                                                    </ul>
                                                    <p class="desc">We promote a thriving and inclusive gathering place that celebrates our agricultural heritage in a national, historic landmark.
                                                        FMM believes to be an effective leader by creating an equitable, healthy, and sustainable local food system. FMM is a sustainable organization.
                                                        Our Market brings fresh food, education, and fun to our community and it promotes small farms and sustainable agriculture in TamilNadu.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="banner-adv zoom-image overlay-image">
                                                    <a href="/blogs/home2/change-your-eating-habits-with-this-organic-food-diet-plan"
                                                       class="adv-thumb-link"><img
                                                                src="/theme/assets/images/Community-logo.jpeg"
                                                                alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-blog2 wow fadeInRight"
                                         style="visibility: hidden; animation-name: none;">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="banner-adv zoom-image overlay-image">
                                                    <a href="/blogs/home2/tips-for-ripening-your-fruit"
                                                       class="adv-thumb-link"><img
                                                                src="/theme/assets/images/partnership1jpg.jpeg"
                                                                alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="blog-info2 text-left info-right">
                                                    <h2 class="title18">PARTNERSHIP</h2>
                                                    <ul class="list-inline-block post-comment-date">
                                                        <li><span class="color"><i
                                                                        class="fa fa-commenting-o"></i></span><a
                                                                    href="#" class="color"></a></li>
                                                    </ul>
                                                    <p class="desc">We believe authentic, collaborative relationships are essential to achieving our vision.
                                                        To inspire and nurture a healthy community by building a local, sustainable and organic food economy in a vibrant experiential marketplace.
                                                        We support to create a healthier community through partnerships.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>

<?php include("theme/include/footerr.php");
echo get_script(); ?>
</body>
</html>