<?php
echo 'hello world <br>' ;

// function with  parameters 
function add( $a , $b ) {
    echo 'sum = '.$a + $b .'<br>' ;
}

add( 2 , 3) ;

//  in php  there is no lexical scope    

// now static  varible 

function inc() {
    $a = 0 ;
    $a++;
    return $a ;
    // echo ' normal inc = '.$a.'<br>';
}

function staticInc () {
    static  $a = 0 ;
    $a++;
    // echo ' static inc = '.$a.'<br>';
    return $a ;
} 




echo 'static func = '.staticInc() .' normal inc = '. inc().'<br>' ;
echo 'static func = '.staticInc() .' normal inc = '.inc().'<br>' ;
echo 'static func = '.staticInc() .' normal inc = '.inc().'<br>' ;
echo 'static func = '.staticInc() .' normal inc = '.inc().'<br>' ;

//  globals variable .

$b = 10 ; 
$a = 20 ;

function superGlobalVariable () {

    echo $GLOBALS['a'] +  $GLOBALS['b'] ;

}

function globalVariable () {

    global $a ,$b ;
    echo $a + $b ;

}

superGlobalVariable() ;
echo '<br>' ;

globalVariable () ;


?>