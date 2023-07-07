<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $conn = new mysqli ('localhost' , 'root' , '' , 'stuInfo') ;
    
        $allData = $_POST;
        $name = $allData['name'] ;
        $gender = $allData['gender'] ;
        $dob = $allData['dob'] ;
        $address = $allData['address'] ;
        
        // echo ' hello '.$name.' '.$gender.' '.' '.$dob.' '.$address.' '  ;


        $cmd = "INSERT INTO stu_data ( sname , gender , dob , address ) VALUES ( '$name' , '$gender' , '$dob' , '$address' )";

        if( $conn ->query($cmd) == true ){
            echo "data saved" ;
        }else{
            echo $cn-> error ;
        }


}else{
    echo " invalid request " ;
}
?>