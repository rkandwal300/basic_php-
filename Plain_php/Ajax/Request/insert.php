<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['uname']))
    {
    $name = $_POST['uname'];
    $password = $_POST['password'];

    echo ' hello '.$name.' '.$password.' ' ;
}
else{
    $allData = $_POST;
    $name = $allData['uname'] ;
    $password = $allData['password'];
    
    echo ' hello '.$name.' '.$password.' ' ;
    }



}else{
    echo 'invalid request' ;
}
?>