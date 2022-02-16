<?php 

class Student{
private $name;
Private $age;
Private $class;

function __construct( $name='',$age='',$class='' ){
	return $this->name;
	return $this->age;
	return $this->class;
}

public function __get($foo){
  return $this->foo;
}
public function __set($foo,$value){
  $this->foo=$value;
}

}

$st= new Student();

echo $st->age;


 ?>