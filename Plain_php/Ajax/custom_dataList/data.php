<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if( isset($_POST['data']) ) {
        $key = $_POST['data'] ;
        $arr = array () ;

        $conn = new mysqli ( 'localhost' , 'root' , '' , 'stuInfo' );

        $query = "SELECT sname FROM stu_data WHERE  sname LIKE '%$key%' " ;
        if( $conn -> query ($query)) {
            $data = $conn -> query ($query) ;
            while ( $val = $data -> fetch_row()){
                $arr [] = $val ;
            }
        echo json_encode($arr) ;

        }else{
            $conn -> error ;
        }


        }
        else{
            echo ' invalid request ' ;
        }
    }
    else{
        echo ' its get ' ;
    }

?>