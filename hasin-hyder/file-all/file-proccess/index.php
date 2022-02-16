<?php 
$filename='\laragon\www\hasin-hyder\file-all\file-proccess\text.txt';

$student=array(
  array(
  "Name" =>"Omor",
  "class"=>"10",
  "Age"=>"23",
  "Roll"=>"2"
  ),

  array(
  "Name" =>"Ahmed",
  "class"=>"07",
  "Age"=>"15",
  "Roll"=>"9",
  ),

  array(
  "Name" =>"Kabor",
  "class"=>"!2",
  "Age"=>"35",
  "Roll"=>"8",
  )

);

/*$fp=fopen($filename, "w");
foreach ($student as $stud) {
fputcsv($fp, $stud);

}


$fp=fopen($filename, "r");
while ($student= fgetcsv($fp)) {
	printf("Name = %s\nClass=%s\nAge=%s\nRoll=%s\n\n",$student[0],$student[1],$student[2],$student[3]);
}

$newpwerson = array(
  "Name" =>"Kamal",
  "class"=>"4",
  "Age"=>"5",
  "Roll"=>"8",

);

$fp=fopen($filename, "a");
fputcsv($fp, $newpwerson);
fclose($fp);
*/
$data=file($filename);
print_r($data);
print_r(unset());

 ?>