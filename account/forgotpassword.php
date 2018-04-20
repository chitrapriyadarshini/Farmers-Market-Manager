<?php
require("../theme/lib.php");
require("../lib/dblib.php");
if(is_null($_SESSION['user']))
    $_SESSION['user'] = $_COOKIE['user'];
else
    $_SESSION['user'] = NULL;?>
<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface js csstransitions shopify-features__smart-payment-buttons--enabled"
      lang="en" style="">
<head>
    <?php
    echo get_meta();
    echo get_styles();
    ?>
    <title> Account - Reset Password </title>
</head>

<body class="template-index" style="background: rgb(255, 255, 255);">

<?php echo get_header(); ?>
<br><br>
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <div class="content-page">
            <div class="page-width page-login">
                <div class="grid container">
                    <div class="shop-banner banner-adv line-scale zoom-image">
                        <a href="#" class="adv-thumb-link">
                            <img src="/theme/assets/images/breadcrumb_image_6.jpg"
                                 alt="Banner-header">
                        </a>
                        <div class="banner-info">
                            <h2 class="title30 color">Account</h2>
                            <div class="bread-crumb white">
                                <a href="/" title="Back to the frontpage" class="white">Home</a>
                                <span>Account - Reset Password</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid__item medium-up--one-half medium-up--push-one-quarter">
                        <div class="note form-success hide" id="ResetSuccess">
                            We\'ve sent you an email with a link to update your password.
                        </div>
                        <div id="RecoverPasswordForm" style="">
                            <div class="text-left">
                                <h3>Reset your password</h3>
                                <p>We will send you an email to reset your password.</p>
                            </div>
                            <div class="form-vertical">
                                <form method="post" action="" accept-charset="UTF-8">
                                    <input type="hidden" name="form_type" value="recover_customer_password">
                                    <input type="hidden" name="utf8" value="✓">
                                    <label class="control-label" for="RecoverEmail">Email</label>
                                    <input type="email" value="" name="email" id="RecoverEmail"
                                           class="input-full form-control" autocorrect="off" autocapitalize="off">
                                    <div class="text-left">
                                        <p>
                                            <input type="submit" class="link-v1 rt" value="Submit">
                                        </p>
                                        <button type="button" id="HideRecoverPasswordLink" class="text-link">Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include("../theme/include/footer.php");
echo get_script();?>

</body>
</html>

