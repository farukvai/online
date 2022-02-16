<?php 

$fname= 'Omor' ;
$lname= 'Faruk' ;

printf("My name is %s %s",$fname,$lname);

echo"<br>";
$number=12;

echo $number+=1  "<br>";


if(isset($fname)){
 echo"hello";
}else{
	echo"break";
}

 isset($fname) ? $fname:' ' ;
 ?>