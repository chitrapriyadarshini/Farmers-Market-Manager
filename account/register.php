<?php
require("../theme/lib.php");
require ("../lib/dblib.php");
if(is_null($_SESSION['user']))
    $_SESSION['user'] = $_COOKIE['user'];
else
    $_SESSION['user'] = NULL;
$DB = new Db();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users(username,password,name,dob,gender,address,role_id) values (
'$username',
'$password',
'$name',
'$dob',
'$gender',
'$address',
'$role'
)";

    if($result = $DB->query($sql)) {
        redirect("http://uzhavarsandhai.com/account/login.php");
    } else {
        echo "Wrong Credentials";
    }
}
?>
<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface js csstransitions shopify-features__smart-payment-buttons--enabled"
      lang="en" style="">
<head>
    <?php
    echo get_meta();
    echo get_styles();
    ?>
    <title> Account - Register </title>
</head>

<body class="template-index" style="background: rgb(255, 255, 255);">

<?php echo get_header(); ?>
<br><br>
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <div class="content-page">
            <div class="page-width page-login">
                <div class="grid contaner">
                    <div class="shop-banner banner-adv line-scale zoom-image">
                        <a href="#" class="adv-thumb-link">
                            <img src="/theme/assets/images/breadcrumb_image_6.jpg"
                                 alt="Banner-header">
                        </a>
                        <div class="banner-info">
                            <h2 class="title30 color">
                                Account
                            </h2>
                            <div class="bread-crumb white">
                                <a href="/index.php" title="Back to the frontpage" class="white">Home</a>
                                <span> Account - Register </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid__item medium-up--one-half medium-up--push-one-quarter">
                        <div class="form-vertical">
                            <form method="post" action="" id="create_customer" accept-charset="UTF-8"><input
                                        type="hidden" name="form_type" value="create_customer">
                                <input type="hidden" name="utf8" value="✓">
                                <h3>Create Account</h3>
                                <p>Create your own account.</p>
                                <label class="control-label" for="Name">Name</label>
                                <input type="text" name="name" id="Name">
                                <label class="control-label" for="Username">Username</label>
                                <input type="text" name="username" id="Username">
                                <label class="control-label" for="Password">Password</label>
                                <input type="password" name="password" id="Password">
                                <label class="control-label" for="Address">Address</label>
                                <textarea name="address" form="create_customer"></textarea>
                                <label class="control-label" for="DOB">Date of Birth</label>
                                <input type="date" name="dob" id="DOB">
                                <label class="control-label" for="Gender">Gender</label>
                                <select name="gender" id = "Gender" >
                                    <option value = "male">Male</option>
                                    <option value = "female">Female</option>
                                    <option value = "others">Others</option>
                                </select>
                                <label class="control-label" for="Role">Role</label>
                                <select name="role" id="Role">
                                    <option value = "2">Farmer</option>
                                    <option value = "3">Retailer</option>
                                    <option value = "4">Community Center Manager</option>
                                    <option value = "5">User</option>
                                </select>
                                <p class="text-left">
                                    <input type="submit" value="Create" class="link-v1 rt">
                                </p>
                            </form>
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