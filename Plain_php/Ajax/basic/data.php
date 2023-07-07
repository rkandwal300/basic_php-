<?php
    $select = '<select>' ;
    // $arr  = array('Honda' , 'Suzuki' , 'Bajaj' , "Hero" ,  "TVS" ) ;
    $arr  =  ['Honda' , 'Suzuki' , 'Bajaj' , "Hero" ,  "TVS" ] ;
    foreach( $arr as $key) {
        $select.="<option>".$key."</option>" ;
    }
    $select.='</select>' ;
    echo $select ;
?>