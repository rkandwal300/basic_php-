<?php

    class Features {
        private $speed , $price , $name ; 

        public function __construct ( $name , $price , $speed  ){
            $this ->name  = $name ;
            $this ->price = $price;
            $this ->speed = $speed ;
        }

        public function display () {
            echo "<br> Name :-  ".$this -> name."<br> "   ;
            echo "<br> Price :-  ".$this -> price."<br> " ;
            echo "<br> Speed :-  ".$this -> speed."km/s <br> " ;
        }

    }

    class car extends Features {
        public  function __construct ( $name , $price , $speed ) {
            parent :: __construct( $name , $price , $speed  ) ;
        }
    }

    class bike extends Features {
        public  function __construct ( $name , $price , $speed ) {
            parent :: __construct( $name , $price , $speed  ) ;
        }
    }


    $obj = new car ('toyota', 500000 , 100) ;
    $obj2 = new bike ('pulsar', 80000 , 100) ;

    $obj->display() ;
    $obj2->display() ;
?>