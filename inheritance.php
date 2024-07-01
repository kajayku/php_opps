<?php 

// class Fruit{
//     public $name;
//     public $color;

//     public function __construct($name,$color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }

//     protected function intro(){
//         echo "The name of fruit is {$this->name} and The color of fruit is {$this->color}";
//     }
// }

// class Mango extends Fruit {

//     public function message(){
//         echo "I am Fruit";

//          $this->intro();
//     }
// }

// $obj = new Mango("Apple","Red");
// // $obj->intro()."<br>";
// $obj->message();

class Fruit{
    public $name;
    public $color;

    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    
    public function intro(){
        echo "Name of fruit is {$this->name} and color of fruit is {$this->color}";
    }
}

class Mango extends Fruit {

    public $weight;

    public function __construct($name,$color,$weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro(){
        echo "Name of fruit is {$this->name} the color of fruit is {$this->color} and weight is {$this->weight}";
    }

    
}

$obj = new Mango("Mango","Yellow","10");
$obj->intro();

?>