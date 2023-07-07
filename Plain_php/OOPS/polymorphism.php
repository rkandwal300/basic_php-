<?php 

class Calculator {

    // public , private  , protected are 3 access modifiers .
    private $value1 , $value2 ;

    function __construct ( $value1 , $value2) {
        $this -> value1 = $value1 ;
        $this -> value2 = $value2 ;
    }

    public function display ($type ,$value){
        echo 'solution of '.$type.$value.'<br>' ;
    }

    public function add (){
        $a = $this -> value1 ;
        $b = $this -> value2 ;
        echo 'operands = '.$a.' '.$b.'<br> ';
        $sum = $this -> value1 + $this -> value2 ;
        $this -> display ('sum = ' , $sum) ;
    }

    public function sub (){
        $sub = $this -> value1 - $this -> value2 ;
        $this ->display ('sub = ',$sub) ;
    }

    public function mul (){
        $mul = $this -> value1 * $this -> value2 ;
        $this ->display ('multiply  = ', $mul) ;
    }

    public function divide (){
        $div = ($this -> value1) / ($this -> value2 ) ;
        $this ->display ('div = ',$div) ;
    }
}

$a = 10 ;
$b = 5  ;

    // $Obj = new Calculator ( $a , $b  ) ; // because constructor takes value ;
    $Obj = new Calculator ( 5 , 10 ) ; // because constructor takes value ;
    $Obj -> add() ;
    $Obj -> sub() ;
    $Obj -> mul() ;
    $Obj -> divide() ;


?>
