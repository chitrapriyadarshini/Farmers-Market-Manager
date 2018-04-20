<?php

require ("theme/lib.php");
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
        <title> Category </title>
    </head>

<body class="template-index" style="background: rgb(255, 255, 255);">

<?php echo get_header();
?>

<div class="page-container" id="PageContainer">

    <main class="main-content" id="MainContent" role="main">

      <div class="page-width">
  <header class="section-header text-center">
    <h1>Classification</h1>
  </header>

  <div class="grid grid--uniform">
    
      <div class="grid__item small--one-half medium-up--one-third">
        


<div class="collection-grid-item">
  <a href="/collection.php" class="collection-grid-item__link">
    <div class="collection-grid-item__overlay" style="background-image: url(/theme/assets/images/sust_1.png)">
      
    </div>
    <div class="collection-grid-item__title-wrapper">
      <h3 class="collection-grid-item__title">
        
          All
        
      </h3>
    </div>
  </a>
</div>

      </div>
    
      <div class="grid__item small--one-half medium-up--one-third">
        


<div class="collection-grid-item">
  <a href="/vegetables.php" class="collection-grid-item__link">
    <div class="collection-grid-item__overlay" style="background-image: url(/theme/assets/images/vegetable.jpeg)">
      
    </div>
    <div class="collection-grid-item__title-wrapper">
      <h3 class="collection-grid-item__title">
        
          Vegetables
        
      </h3>
    </div>
  </a>
</div>

      </div>
    
      <div class="grid__item small--one-half medium-up--one-third">
        


<div class="collection-grid-item">
  <a href="/fruits.php" class="collection-grid-item__link">
    <div class="collection-grid-item__overlay" style="background-image: url(/theme/assets/images/fruitlist.jpeg)">
      
    </div>
    <div class="collection-grid-item__title-wrapper">
      <h3 class="collection-grid-item__title">
        
          Fruits
        
      </h3>
    </div>
  </a>
</div>

      </div>
    
      <div class="grid__item small--one-half medium-up--one-third">
       
    
      <div class="grid__item small--one-half medium-up--one-third">
        
    
      </div>
   
</div>


    </main>
 </div>
<?php include ("./theme/include/footerr.php");?>
</body>
</html>
