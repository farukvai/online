<?php 


abstract class Farukvai{
	abstract public function age($age);

}

class childclass extends Farukvai{
   public function age($n){
        return "My age is $n <br>";
   }
}

$cd= new childclass();
echo $cd->age(24);

/* For more information search w3 School 

Final key */


abstract Class  OurClass{
	final  function Love(){
		echo "I have no GirlFriends ";
	}

	public function heart(){
		echo "You Broke My heart";
	}
}

Class MyClass extends OurClass{
	// public function Love(){
	// 	echo"I have No one";
	// }

	public function heart(){
		echo "You Broke My heart";
	}


}

$FK =  New MyClass();
$FK-> Love();


echo "<br>";





// Force-----------------------------


Class shape{

}


Class Shapes{
	private $Shapes;

	public function __construct(){
		$this->Shapes=array();
	}

	function addShape(shape $shape){
      array_push($this->Shapes,$shape);
	}

	function tottalShape(){
		return count($this->Shapes);
	}
}


Class rectangle extends shape{

}
Class Triangle extends shape{

}
Class Students{

}
$shapeCollection= new Shapes();
$shapeCollection->addShape(new rectangle);
$shapeCollection->addShape(new Triangle);
//$shapeCollection->addShape(new Students); [So we can't use it as a Base Class ]
echo $shapeCollection->tottalShape();

 ?>