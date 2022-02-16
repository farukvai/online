<?php 

Class Room{
  function door($var1){
  	echo $var1;
  }
}

$rm=new Room();
//$rm=$rm2;
$rm->door("ami");
$rm2=clone $rm;
//$rm2=$rm3=$rm;
$rm2->door("ami nai");
//$rm3->door("ami achi");

//print_r($rm);
//print_r($rm2);
//print_r($rm3);
//$rm2->door();

echo "<br>";
//#To String 

// Declare a simple class
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('Hello');
echo $class;




 ?>