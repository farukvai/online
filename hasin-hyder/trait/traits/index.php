<?php 


trait NumberSeriesOne{
	private function numberSeriesA(){
		echo "NumberSeries A";
	}
	function numberSeriesB(){
		$this->numberSeriesA();
		echo "NumberSeries B";
	}
}

trait NumberSeriesTwo{
	function numberSeriesC(){
		echo "NumberSeries C";
	}
	function numberSeriesD(){
		echo "NumberSeries D";
	}
}

trait numberseries3{
	use NumberSeriesOne;
	use NumberSeriesTwo;
}

Class NumberSeries{
  use NumberSeries3;
  
}

$ns= new  NumberSeries;
//$ns->numberSeriesA();
$ns->numberSeriesD();
//$ns->numberSeriesC();
// $ns->numberSeriesD();

echo "<br>";
#Example Number Two // Function Override kora

Trait Numbergenarate{
	function factorialA(){
      echo "Factorial Is a Real Number";
      parent::factorialA();
	}
	Function fibonakki(){
		echo "Fibonacci is vary Cool item";
	}
}


Class Math{
	use Numbergenarate;
   function factorialA(){
      echo "Shame";
	}

}


Class MathPro extends Math{
  use Numbergenarate;
}
$Math= new MathPro();
$Math->factorialA();


 ?>