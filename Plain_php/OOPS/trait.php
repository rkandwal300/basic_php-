<?php 

    trait t1 {
        public function t1f1 (){
            echo "hello trait 1 and func 1  <br>" ; 
        }

        public function t1f2 (){
            echo "hello trait 1 and func 2  <br>" ; 
        }
    }

    trait t2 {
        public function t2f1 (){
            echo "hello trait 2 and func 1 <br>" ; 
        }

        public function t2f2 (){
            echo "hello trait 2 and func 2 <br>" ; 
        }

    }

    class C1 {
        use t1 , t2 ;
    }

    $obj = new C1 ;
    $obj->t1f1() ;
    $obj->t1f2() ;
    $obj->t2f1() ;
    $obj->t2f2() ;
?>