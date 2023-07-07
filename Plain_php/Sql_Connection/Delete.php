<?php
    $cn = new mysqli('localhost','root','','stuInfo')  ;
    
    if(isset($_GET['msg']) ){

        if($cn -> connect_error){
            die($cn -> connect_error);
        }
        else{
            $id = $_GET['msg'] ;
            $cmd = "DELETE FROM stu_data WHERE  id = '$id'";

            if( $cn ->query($cmd) == true ){
                header('location:FrontPage.php?msg=Data Deleted ');
            }else{
                echo $cn-> error ;
            }
        }
    
    }else{
    header('location:FrontPage.php?msg=invalid request.') ;
}
?>