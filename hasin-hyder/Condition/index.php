<?php 

$n= 10;

if($n%2 == 0){
  echo "The Number is even";
}else{
	echo "The number is Odd";
}


echo "<br>";

$Food = "Banana";

if("Banana" == $Food){
 echo"Have a lot of Iron";
}


echo "<br>";


$year= 2000;


if($year%4==0 && ($year%100!=0 || $year%400==0) ){
 echo"$year is a leap year";
}else{
	echo "$year is not leap year";
}


echo "<br>";



//Nested else hasin hyder-1.14 
 /*eita easy */

// Tarnanry Operator hasin hyder-1.15

$n=10;

echo $result = ($n%2==0) ? "Even":($n%2==1) ?"ODD" :"Even" ;

echo "<br>";
//Swicth Case -1.16

$color= "Blue";

switch ($color) {
	case 'red':
		echo "Red like my girl friends";
		break;
	case "Blue":
		echo"Blue like my girl friends";
		break;
	case "Pink":
		echo"I Don't like pink";
		break;
	default:
		echo "Color Is okay";
}

echo '<br>';
/*-------      ----------*/
$color= "Blue";

switch ($color) {
	case 'red':
	case 'Blue':
		echo ucwords($color)." like my girl friends";
		break;
	case "Pink":
		echo"I Don't like pink";
		break;
	default:
		echo "Color Is okay";
}

echo '<br>';
//Swicth Case -1.17

$a=12;
$b=$a%2;
switch (True) {
	case ($b==0 && $a>0):
		echo "$a is even positive number";
		break;
	case ($b==0 && $a<0):
		echo "$a is even Negative number";
		break;
	
	default:
		 echo"$a is okay";
		

}

echo '<br>';
//Swicth Case -1.20

$xy=12;

if($xy%2==0):
	echo"Even number";
else:
	echo"Odd Number";
endif;

echo '<br>';
//Swicth Case -1.21

//Trurnury operation

$n=12;

echo $result=($n%2==0)?"A": (($n%2!=0) ?"B":"C");

//Loop
echo '<br>';
for($i=0; $i<10; $i++){
	echo PHP_EOL;
	echo $i."<br>";
}

echo '<br>';
for ($i=0; $i <10 ; $i++) { 
	echo PHP_EOL;
	for($j=0;$j<$i;$j++){
	echo "*";
  }

}
echo PHP_EOL;

$i=1;
while ( $i<= 10) {
	echo $i."<br>";
	$i++;
}

[dynamichidden product-price "CF7_PRODUCT_PRICE"]

shoponline.pkofficial@gmail.com
 ?>