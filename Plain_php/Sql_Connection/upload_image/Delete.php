<?php
    $conn  =  new mysqli ('localhost','root','','stuInfo'  );
    
    function check_exist ($img){
        global $conn ;
        $query = "SELECT * FROM img_detail WHERE  img_address = '$img' " ;
        $n = $conn -> query ($query) -> num_rows ;
        if( $n>0 ){
            return true ;
        }else{
            return false ;
        }
    }


    if( $conn -> connect_error){
        die( $conn -> connect_error);
    }
    else{

        if(isset( $_GET['msg'] )){
        $img_name = $_GET['msg'] ;

        $query = "DELETE FROM img_detail WHERE img_address = '$img_name' ";

        if(check_exist ($img_name) == true  ){ 

            if( $conn -> query($query)){

                unlink($img_name) ;
                header("location:front.php?del_msg=Image deleted successfully  ") ;
            }else{
                header("location:front.php?del_msg=error in deleted image") ;
            }
        }
            else{
                header ('location:front.php?del_msg=file not exist') ;
            }

        }
        else{
            header('location:front.php?del_msg=invalid Operation');
        }
    }

?>