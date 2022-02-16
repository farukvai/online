<?php 
/*
class Faruk{
   
	protected $name;

	public function __construct($name='Google'){
      return $this->name=$name;
	}

	public function person(){
		return "My". " Name ". $this->name;
	}
}

class Saju extends Faruk{
	public function age($age){
     return "My age is $age";
	}
}
$MyJon=new Saju();

echo $MyJon->person();
*/
// fac
/*
Class Animal{
	public $cat;

	public function action($sound){
           return "Cat sound $sound";
	}
}

Class Pet extends Animal{
	public function ani(){
	 $this->action();
	}
}

$Bio=New Pet();
echo $Bio->action("Meow"); 
*/

/*
class ParentClass{
  protected $name;

  public function __construct($name=''){
           $this->name= $name;
           $this->sayHi();
 }

 public function sayHi(){
 	echo  "Hellw $this->name";
 }

 protected function pass(){
 	echo "Pass Word";
 }

}

class childClass extends ParentClass{
	public function sayHi(){
		parent::sayHi();
		//echo "Hi";
	}

	public function hack(){
		parent::pass();
	}
}
 $myClass = new childClass('Omor');

$myClass->hack();

*/

class parentClass{
	public $color;
	public $size;

	function __construct($name,$color) {
		$this->name=$name;
		$this->color=$color;
	}
    
    public function get_name(){
    	return $this->name; 
    }
    public function get_color(){
    	return $this->color; 
    }

    public function result(){
    	echo "My name is $this->name & my color is $this->color";
    } 
}

$rsult = new parentClass("faruk","Red");
$rsult->result();



 ?>