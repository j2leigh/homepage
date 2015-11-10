<?php
session_start();
date_default_timezone_set('America/Chicago');
$now = date('Y-m-d h:i:s');

include 'inc/conn.php';
include 'inc/generateUUID.php';

//if(empty($_SESSION['token']))
//{
//    header("Location: login.php"); 
//}
//else {
    $UUID = new generateUUID();
    $token = $UUID::getGUID();
    echo $token;
    $blogUser = "Select * from blog_user" ;
    
    foreach($dbh->query($blogUser) as $bPost)
    {
        $_SESSION['user'] = $bPost['user_name'];
        $_SESSION['token'] = $bPost['token'];
        
    }
//}

