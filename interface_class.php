<?php 

interface Animal{
    public function makeSound();
}

class Cow implements Animal {
    public function makeSound()
    {
        echo " Cow Maa";
    }
}

class Buffalow implements Animal {
    public function makeSound()
    {
        echo "Buffalow Maa";
    }
} 

class Rat implements Animal {
    public function makeSound()
    {
        echo "Rat chewk";
    }
}

class Bee implements Animal {
    public function makeSound()
    {
        echo " Bee bhree";
    }
}

$cow = new Cow();
$buffalow = new Buffalow();
$rat = new Rat();
$bee = new Bee();

$animal = array($cow,$buffalow,$rat,$bee);

foreach($animal as $item){
    $item->makeSound();
    echo "<br>";
}
   


?>