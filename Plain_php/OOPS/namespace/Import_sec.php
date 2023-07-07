<?php

use student\fees;
use teacher\salary;
include 'export_first.php' ;
    $obj =  new fees() ;
    $obj -> stu_name() ;

    $obj2 =  new salary() ;
    $obj2 -> name() ;

?>