<?php 

$file= '\laragon\www\hasin-hyder\file-all\file-read\read.txt';
$fp= fopen($file, "r");
$line= fgets($fp);
echo $line;
$line= fgets($fp);
echo $line;
$line= fgets($fp);
echo $line;
fclose($fp);

print_r(file($file)); 
echo "<br>";
echo file($file)[3];
echo "<br>";
echo file_get_contents($file);
 ?>