<?php 




function bighand($l1,$l2){
	
	foreach (range($l1,$l2) as $allalpha => $Letter) {
	echo  $Letter ." = ". ord($Letter). "<br>";
 }
}
 bighand(0,100);


 ?>