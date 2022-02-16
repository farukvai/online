<?php 
$filePath='\laragon\www\hasin-hyder\file-all\jssonData\text.txt';

$student=array(
 array(
 "fname" => "Omor",
 "lname" => "faruk",
 "Age"   => 25,
  "Profession"  => "Web Developer"
 ),
 array(
 "fname" => "Ahmed",
 "lname" => "Kabir",
 "Age"   => 25,
  "Profession"  => "Web Developer"
 ),
 array(
 "fname" => "Mhadi",
 "lname" => "Hossain",
 "Age"   => 25,
  "Profession"  => "Web Developer"
 ),
);

//$student= json_encode($student);
//file_put_contents($filePath, $student);

$data=file_get_contents($filePath);
$studentdata=json_decode($data,true);
print_r($studentdata);


 ?>