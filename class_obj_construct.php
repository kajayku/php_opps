<?php 
// class Calc{
//     public $num1;
//     public $num2;
//     public $num3;

//     public function __construct($n1,$n2){
//                     $this->num1 = $n1;
//                     $this->num2 = $n2;
//         }
// public function add(){
// $num3 = $this->num1 + $this->num2;

// echo "Some of two number is : ".$num3;
// }

//     }

// $obj = new Calc(10,30);

// $obj->add();



// class Fruit{

//     public $name;
//     public $color;

//     public function __construct($name,$color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }

//     public function get_name(){
//        return $this->name;
//     }
//     public function get_color(){
//         return $this->color;
//      }
// }

// $obj = new Fruit("Apple","Red");
// echo $obj->get_name() . "<br>";
// echo $obj->get_color();

//  ------------Destructor ---------

class Fruit {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        
    }

     function __destruct()
     {
        echo $this->name;
        
     } 
}

$obj = new Fruit("Apple");

?>