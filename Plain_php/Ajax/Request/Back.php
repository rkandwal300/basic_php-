<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' ){

        $arr  = array() ;
        $key  = $_POST['key'] ; 
        if(isset($_POST['key'] )){
        
        $conn = new mysqli ('localhost' , 'root' ,'' ,'stuinfo' ) ;
        $query = "SELECT * FROM stu_data where sname like '%$key%'" ;
        $data = $conn-> query ( $query );
        while( $value = $data -> fetch_assoc()){
            $arr[] = $value ;
        } 
        echo json_encode($arr) ;
    }else{
        $_alldata = $_POST ;
        
    }
    }
    else{
        echo"Invalid request";
    }
?>