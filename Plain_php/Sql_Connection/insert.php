<?php
    $cn = new mysqli('localhost','root','','stuInfo')  ;
    if($cn -> connect_error){
        die($cn -> connect_error);
    }
    else{
        $txt1 = $_POST['t1'] ;
        $txt2 = $_POST['t2'] ;
        $txt3 = $_POST['t3'] ;
        $txt4 = $_POST['t4'] ;

        $cmd = "INSERT INTO stu_data ( sname , gender , dob , address ) VALUES ( '$txt1' , '$txt2' , '$txt3' , '$txt4' )";

        if( $cn ->query($cmd) == true ){
            header('location:FrontPage.php?msg=Data Inserted');
        }else{
            echo $cn-> error ;
        }
    }
?>