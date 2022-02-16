<?php 

define("dhaka","Is my City");


class MyClass{
	Const key="Home";
}
echo MyClass::key;

Class OurClass{
	const charecter="Nice";

	function person(){
		return "His charecter is ".$this::charecter;
	}
	function person2(){
		return "His charecter is ".self::charecter;
	}
}

$m= new OurClass();
echo $m->person();
echo $m->person2();

 ?>