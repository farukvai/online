<?php 
$data='\laragon\www\hasin-hyder\file-all\file-write\text.txt';
if(is_writable($data)){
 $fp=fopen($data, "a");

fwrite($fp,"Hello Omor Faruk\n");
}

 ?>