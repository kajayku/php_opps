<?php 
trait message1 {
   public function msg1(){
    echo "This is Oops language";
   }
}

trait message2 {
    public function msg2(){
        echo "Opps reduce the line of code";
    }
}

class Welcome {
    use message1;
}

class Welcome1 {
    use message1,message2;
}

$obj1 = new Welcome();
$obj2 = new Welcome1();

$obj1->msg1();
echo "<br>";
$obj2->msg1();
echo "<br>";
$obj2->msg2();
?>