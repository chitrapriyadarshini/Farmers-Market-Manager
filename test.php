<?php
/**
 * Created by PhpStorm.
 * User: chitra.p
 * Date: 4/5/2018
 * Time: 9:50 PM
 */


require("./lib/dblib.php");

$db= new Db();

$db -> connect();
$query = "insert into user (username,password,full_name,dob,gender,address,roleid) values ('admin','password','admin_user',07-07-97,'female','High Gate',1)";
$db -> query($query);