<?php
    $user = '' ;
    session_start() ;
    if(isset ( $_SESSION['userId' ] ) ){
        $user = $_SESSION['userId' ]  ;
    }else{
        header('location : Login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Welcome :   
        <?php  echo  $user ?> 
    </h1>

    <a href= 'logOut2.php'>  Log Out  </a>
</body>
</html>