<?php

    interface First {
        public function add( $a , $b   ) : int ;
        public function sub( $a , $b   ) : int ;
        public function mul( $a , $b   ) : int ;
    }

    class calc implements First {
        public function add (  $x , $y  ) : int
        {
            $c = $x+$y ;
            return $c  ;
        }
        public function sub (  $x , $y  ) : int
        {
            $c = $x-$y ;
            return $c ;
        }
        public function mul (  $x , $y  ) : int
        {
        
            $c = $x*$y ;
            return $c  ;
        }
    }

    $obj = new calc () ;

    echo 'sum = '.$obj -> add ( 3 , 4 )."<br>" ;
    echo 'sub = '.$obj -> sub ( 3 , 4 )."<br>" ;
    echo 'mul = '.$obj -> mul ( 3 , 4 )."<br>" ;


?>