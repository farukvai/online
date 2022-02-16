<?php 
$filepath='\laragon\www\hasin-hyder\file-all\serialized\text.txt';

$srudent= array(
 array(
 'Name' => 'Omor Faruk',
 'Age'  => 25,
 'Class'=> "Hon's 4",
  "profession" => "web developer"

 ),
 array( 
 'Name' => 'Kajol',
 'Age'  => 24,
 'Class'=> "Hon's 6",
  "profession" => "SEo"

 ),
  array(
'Name' => 'Rafiq',
 'Age'  => 17,
 'Class'=> "12",
  "profession" => "Designer"
 )
);

/*
$data= serialize($srudent);

file_put_contents($filepath,$data);

*/
$dataFromFile = file_get_contents($filepath);
$allstudent=unserialize($dataFromFile);
print_r($allstudent);

/*
unset($allstudent[2]);
$data= serialize($allstudent);
file_put_contents($filepath,$data);
*/

$newStudents=array(
  array(
  'Name' => 'Muksed',
 'Age'  => 17,
 'Class'=> "12",
  "profession" => "Laravel"
  ),

  array(
  'Name' => 'boyati',
 'Age'  => 18,
 'Class'=> "12",
  "profession" => "Nailler"
  )
);


array_push($allstudent, $newStudents);

$data= serialize($allstudent);

file_put_contents($filepath,$data);
 ?>