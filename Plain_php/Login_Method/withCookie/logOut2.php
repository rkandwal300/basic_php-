<?php
session_start() ;
    if(isset ( $_COOKIE['userId'] ) ){
        setcookie  ('userId','',time() - 1 ,'/') ;
        header('location:Login.php');
    }else{
        header('location:Login.php');
    }

?>