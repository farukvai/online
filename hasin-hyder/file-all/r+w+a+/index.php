<?php 
$data='\laragon\www\hasin-hyder\file-all\r+w+a+\text.txt';
$fp=fopen($data,'r+');
fwrite($fp, "Hello World\n");
fwrite($fp, "Hello Faruk");
$line= fgets($fp);
echo $line;
 ?>