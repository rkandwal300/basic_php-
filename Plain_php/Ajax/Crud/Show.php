<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $conn = new mysqli ('localhost' , 'root' , '' , 'stuInfo' ) ;

    $cmd = "select * from  stu_data  ";
    $Obj = array(); 

    if( $conn ->query($cmd) == true ){
        $data = $conn ->query($cmd) ;
        while( $value = $data->fetch_row())  { 
            
            $Obj[]  = $value ;
        }
        echo json_encode($Obj) ;
    }else{
        echo $cn-> error ;
    }
}else{
    echo " invalid request " ;
}
?>