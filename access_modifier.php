<?php 

// class Fruit {
//     public $name;
//     protected $color;
//     private $waight;
// }

// $obj = new Fruit();

// $obj->name = "Banana";
// $obj->color = "Yellow";

class Fruit{

    public $name;
    public $color;
    public $weight;

    public function set_name($name){
          $this->name = $name;
    }

    protected function set_color($color){
        $this->color = $color;

    }

    private function set_weight($waight){
        $this->weight = $weight;
    }
}

class mango extends Fruit{

     function set_color($color){
        $this->color = $color;

    }

    function get_color(){
      return  $this->color;

    }

}

$obj = new Fruit();
$obj->set_name("Apple");
//$obj->set_color("Red");
// $obj->set_weight("10");

$obj1 = new mango();
$obj1->set_color("Red");

echo $obj1->get_color();


?>