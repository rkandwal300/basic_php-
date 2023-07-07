<?php

    if($_SERVER[ 'REQUEST_METHOD' ] == 'POST')  {
        $title    = $_POST['name'] ;
        $_img_name = $_FILES['img_data']['name'] ;
        $_img_temp = $_FILES['img_data']['tmp_name'] ;
        $_img_size = $_FILES['img_data']['size'] ;
        $_image_type = strtolower( pathinfo($_img_name , PATHINFO_EXTENSION )) ;


        $dir = '../../images/'.date('Ymdhis').mt_rand(100,999).basename($_img_name) ;
        if( $_image_type == 'jpg' || $_image_type == 'png'  ){
            if( $_img_size <=  200 * 1024 * 1024  ) {
                if( move_uploaded_file ( $_img_temp , $dir ) ) {
                    $conn = new mysqli('localhost' , 'root', '' , 'stuInfo') ;

                        $qury =  "INSERT INTO img_detail (  img_address , img_name ) VALUES ('$dir','$title' )  " ; 

                        
                        if($conn->query($qury) == true){
                            
                            header("location:front.php?del_msg=file uploaded ") ;
                        }
                        else{
                            echo $conn->error ;
                    }
                }
        else{
            
            header("location:front.php?del_msg=Updation failed") ;
        }
    }
    else{
        header("location:front.php?del_msg=File Too Large") ;
    }
}
}
else{
    header("location:front.php?del_msg=Invalid file type ") ;
}

    

?>