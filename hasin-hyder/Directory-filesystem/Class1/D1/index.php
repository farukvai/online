<?php 
/*
$entries= scandir(getcwd());

foreach ($entries as $entry) {
	if("." != $entry && ".." != $entry){
       if(is_dir($entry)){
        echo "[D] $entry \n";
       }else{
       	echo "[F] $entry \n";
       }
	}
}

*/



$entries = opendir(getcwd());
while( false !== ($entry=readdir($entries))){
  echo $entry;
}


 ?>