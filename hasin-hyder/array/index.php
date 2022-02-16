<?php 
//Indexed Array
$name=["Car","House","School"];

echo $namelenth=count($name);

for ($i=0; $i < $namelenth; $i++) { 
	echo $name[$i];
	echo"<br>";
}


//Associative Arrays
$information=["Nisad"=>"40","Noto"=>"35","Jalal"=>"40"];

foreach ($information as $key => $value) {
	echo $key ."=".$value."<br>";
}


$fruits=['Jack','Tormoj','paipal','Licho','Mango'];

$sf=array_slice($fruits,2,-1);

print_r($sf);







 ?>