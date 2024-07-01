<?php 

// class Calc {
//     public $a;
//     public $b;
   
//     public function add($a,$b){
//         $c= ($this->a = $a) + ($this->b = $b);
//         echo "Some of two number is : ". $c."</br>";
//     }

//     public function sub($a,$b){
//         $c= ($this->a = $a) - ($this->b = $b);

//         echo "Subtraction of two number is : ".$c;
//     }
// }

// $obj = new Calc();
// $obj->add(5,7);
// $obj->sub(10,5);

class Fruit{
    public $name;
    public $color;

    function set_name($name){

       return $this->name = $name;

    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){

        // echo $color;exit;

        return $this->name = $color;
 
     }
 
     function get_color(){
         return $this->color;
     }
}

$obj = new Fruit();
$obj->set_name('Apple');
echo $obj->get_name();

$obj->set_color('Red');
echo $obj->get_color();

?>