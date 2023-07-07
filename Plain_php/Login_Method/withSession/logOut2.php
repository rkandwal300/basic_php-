<?php
session_start() ;
    if(isset ( $_SESSION['userId'] ) ){
        session_destroy() ;
        header('location:Login.php');
    }else{
        header('location:Login.php');
    }

?>