<?php
session_start();
if(isset($_SESSION["email"])){ $email=$_SESSION["email"];
    $email=substr($email,0,strpos($email,'@'));
    echo  "hello ".$email;
 }
?>