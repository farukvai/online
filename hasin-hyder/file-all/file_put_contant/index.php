<?php 
$filename='\laragon\www\hasin-hyder\file-all\file_put_contant\text.txt';

file_put_contents($filename, "Hello World\n",FILE_APPEND | LOCK_EX);
file_put_contents($filename, "Hello Omor\n",FILE_APPEND | LOCK_EX);
 ?>