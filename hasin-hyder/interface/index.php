<?php 	
/*
interface OurInterface{
	//public $name;
	public function setVariable();

	public function heart($n);
}

interface yourinter extends OurInterface{
  public function math();
}

Class myinter implements OurInterface{
	
	public function setVariable(){
		echo "I set it";
	}
	public function heart($n){
        return "My heart is $n";
	}

}

$in= new OurInterface();
echo $in->heart("DDK");

*/

interface baseanimal{
	function caneat();
	function swiwm($param1,$para2);
	function run();
}

class animal implements baseanimal{
	function caneat(){}
	function swiwm($param1,$para2){}
	function run(){}
}

interface Basehuman extends baseanimal{
	function canTalk();
	function haveFelling();
}

class human implements Basehuman{
	function canTalk(){}
  function haveFelling(){}
	function caneat(){}
	function swiwm($param1,$para2){}
	function run(){}
}

abstract class man extends human{
	abstract function haveBrain();
}



$h =new animal();
echo $h instanceof animal;


//countable interface


// class DistrictCollection implements IteratorAggregate, countable{
// 	public $districts;

// 	function __construct(){
//      $this->districts=array();
// 	}

// 	function add($district){
// 		array_push( $this->districts, $district);
// 	}

//    function getIterator(){
// 		return new ArrayIterator( $this->districts);
// 	}
// // 	function count(){
// //      return count($this->districts);
// 	}

	
// }
// $DS=new DistrictCollection;
// $DS->add("Dhaka");
// $DS->add("Dhka");
// $DS->add("Dhka");

// echo count($districts);


//  ?>