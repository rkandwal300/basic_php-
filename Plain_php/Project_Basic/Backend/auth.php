<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name     = $_POST['name'] ;
    $username = $_POST['username'] ;
    $email    = $_POST['email'] ;
    $password = $_POST['password'] ;

    $_img_name = $_FILES['profile']['name'] ;
    $_img_temp = $_FILES['profile']['tmp_name'] ;
    $_img_size = $_FILES['profile']['size'] ;
    $_image_type = strtolower( pathinfo($_img_name , PATHINFO_EXTENSION )) ;

    $dir = '../../images/'.date('Ymdhis').mt_rand(100,999).basename($_img_name) ;

    if( isset($name)   && isset($username)   &&  isset($email)   && isset($password)   &&  isset($_img_name)    ){

        if($_image_type == 'jpg' || $_image_type == 'png '){    
        
        if( $_img_size < 200 * 1025 * 1024 ){

            if( move_uploaded_file ( $_img_temp , $dir ) ) {                
        
            $conn = new mysqli('localhost' , 'root', '' , 'stuInfo')  ;
            if($conn -> connect_error){
                die($cn -> connect_error);
            }
            else{


                $query = "INSERT INTO stu_auth (fullname , username , email , password , profile) VALUES (  '$name' ,'$username' ,'$email' ,'$password' ,'$dir'   ) " ;


                if($conn -> query ($query) == true ){
                    header("location:../Frontend/index.php?msg=registered successfully") ;

                }else{
                    echo $conn->error ;
                }
            }
            }
            else{

                header('location:../Frontend/Registration.php?error=file cannot be uploaded .');
            }
        }
            else{
                header('location:../Frontend/Registration.php?error=file too large');
            }
        }
        else{
            header('location:../Frontend/Registration.php?error=invalid image format');
        }


    }


    }

?>