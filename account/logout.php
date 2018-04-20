<?php
require ('../theme/lib.php');
setcookie("user", '', time() - (86400 * 30), "/");
setcookie("username", '', time() - (86400 * 30), "/");
unset($_SESSION['user']);
session_destroy();
redirect("http://uzhavarsandhai.com");