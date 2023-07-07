<?php
if( $_SERVER['REQUEST_METHOD'] == 'POST'){

    // echo ' post method <br> ';
    $userName = $_POST['txt1'] ;
    $password = $_POST['txt2'] ;

    //echo $password;

    if($userName == '') {
        header( 'location:Login.php?userToken= Enter userName&status = 401') ;
    }
    if($password == ''){
        header( 'loaction:Login.php?passwordToken = enter your password&status= 401' ) ;
    }
    if(strcmp($userName, 'rahul') !=0 ){
        header( 'location:Login.php?userToken= Invalid userName&status= 401') ;
    }
    if(strcmp($password,'12345') !=0 ){
        header( 'location:Login.php?passwordToken=invalid password&status= 401' ) ;
    }
        if( strcmp($userName, 'rahul') !=0 && strcmp($password,'12345') !=0 ){
        header( 'location:Login.php?userToken= Invalid userName&passwordToken=invalid password&status= 401' ) ;
    }
    if( strcmp($userName , 'rahul') == 0 && strcmp($password , '12345') ==0  ){
        setcookie( 'userId',$userName , time() + ( 60 *60) , '/'  ) ; // time = 1hour . 
        header( 'location: index.php' ) ;
    }
    else{
        header( 'location:Login.php?userToken= invalid credentialsS&status= 401' ) ;

    }

    // echo $a.'<br>'.$b ;
}else{
    echo ' get method <br> ';
    $a = $_GET['txt1'] ;
    $b = $_GET['txt2'] ;
    echo $a.'<br>'.$b ;
}

?>