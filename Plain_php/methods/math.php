<?php


    echo 'underroot of 625 is '.sqrt(625).'<br>' ;
    echo  'round ='.round(4.555,2).'<br >' ;
    echo ' round figure of number 23.4 value is greater than 23.4  =  '.ceil(23.4).'<br>' ;
    echo ' round figure of number 23.4 value is smallerr than 23.4 =  '.floor(23.4).'<br>' ;
    echo  'pwerr of  3 by 2 = '.pow(3,2).'<br >' ;
    echo  'minimun number of  given numbers is  = '.min( 23,54,33,19,67,99 ).'<br >' ;
    echo  'maximum number of  given numbers is  = '.max( 23,54,33,19,67,99 ).'<br >' ;
    echo 'Random number is '.rand() .'<br> ' ;
    echo 'Random number between 5 to 20 is  '.mt_rand(  5,20 ) .'<br> ' ;

    
    echo ' array betwnn values varying from 10, 20  =  ';
    
    print_r(range(10 , 20 )).'<br>' ;


?>