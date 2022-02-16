<?php 

//Here Doc
$name="faruk";
$heredoc = <<<EOD
	MY Name is $name \n
	I live in Dhaka
	I want to be Web developer /n
	So I use my time properly 
	/t i know what i have to do every day of fife in my life
EOD;

echo $heredoc;

echo "<br>";
//nowdoc
$name="faruk";
$heredoc = <<<'EOD'
	MY Name is $name \n
	I live in Dhaka
	I want to be Web developer /n
	So I use my time properly 
	/t i know what i have to do every day of fife in my life
EOD;

echo $heredoc;
 ?>