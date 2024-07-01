<?php 
//Abstract class is properties that we declear class as abstract kery workd and ther is at least one abstract method and it is incompleted and the methos is use is derived class and the abstract class shoud not make object;

abstract class Car{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        
    }

    abstract public function intro();
}

class Tata extends Car {

    public function intro(){
        echo "This is indian branc of tata {$this->name}";
    }
}
class Maruti extends Car{
    public function intro()
    {
        echo "This is Japani brand {$this->name}";
    }
}

class Mahendra extends Car {
    public function intro()
    {
        echo "This is also india brand  {$this->name}";

    }
}

$obj = new Tata("Tata Punch");
$obj->intro();
echo "<br>";
$obj = new Maruti("Swift Desire");
$obj->intro();
echo "<br>";
$obj = new Mahendra("Thar");
$obj->intro();


?>