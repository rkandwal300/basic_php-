<?php
    $conn = new mysqli('localhost','root','','stuInfo')  ;

    $id      = $_POST['id' ] ;
    $name    = $_POST['name' ] ;
    $gender  = $_POST['gender' ] ;
    $dob     = $_POST['dob' ] ;
    $address = $_POST['address' ] ;

    if(  $id     &&  $name   &&  $gender &&  $dob    &&  $address   ){


        
        if( $conn -> connect_error){
            die( $conn -> connect_error) ;
        }else{

            $query = " UPDATE stu_data SET sname = '$name' , gender = '$gender' , dob = '$dob' , address = '$address' WHERE id = '$id'  " ;
            if( $conn -> query($query) == true ) {
                header("location:FrontPage.php?msg=value updated of id= $id") ;
            }else{
                echo $conn -> error ;
            }

        }

    }else{
        header('location:FrontPage.php?msg=invalid request') ;
    }
?>