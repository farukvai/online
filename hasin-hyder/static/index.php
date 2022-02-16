<?php 

class doo{
	static public $name;
	static function foo(){
         self::doSomething();
         self::$name="Faruk\n";
		echo "I am fine".self::$name="Faruk\n";
	}

	static function doSomething(){
		echo "Do Something";
	}
}

doo::foo();

echo "<br>";
/* Child Class Static Over static Over Ride */


class A{

	static function saiHi(){
		echo "Hi From A";
	}
}
Class B extends A{
	Static function saiHi(){
		echo "I am Faruk";
		Parent::saiHi();
	}
} 

B::saiHi();

echo "<br>";
/*Static Method Public/protected/Private */ 

Class X{

	//
	//public static $name;
	//protected static $name;
	private static $name;

	static function name(){
		echo "My name is ....";
	}
}

//For Public method 
// Class Y extends X{
//         static function name(){
//     	echo "My name is ".self::$name="Fa";
//     }
// }
// Y::name();// when it is public i can use it from outside


//For Protected

// Class Y extends X{
//    static function foo(){
//    	echo "My name is ".self::$name="xoxo";
//    }
// }
// Y::foo();


//For Private section 

Class Y extends X{
	private static $name;
	static function Doo(){
		echo "My name is ".self::$name="hahaha";
	}
}
Y::Doo(); // This is The Private section of Static Methid 





 ?>