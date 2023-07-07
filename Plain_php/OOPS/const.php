<?php

    class Features // superClass
    {
        const data = "Hello PHP<br> " ; // constant variable 
        public static $a = 10  ; // Instance variable 

        public static function display () {
            echo "<br> hello function ";
        }
    }
    echo Features ::data ;
    echo Features ::$a;
    Features ::display() ;
?>