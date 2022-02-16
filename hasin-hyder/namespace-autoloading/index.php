<?php 

namespace CloudStorage;

include('autoloader.php');

use \CloudStorage\mail\mailler;
use \CloudStorage\filesystem\scanner;
use \CloudStorage\filesystem\file\images\jpeg;

class Main{
	function __construct(){
       $Mailler=new Mailler();
       echo $Mailler->sendMail();


       $scanner= new Scanner();
       $scanner-> scan();

      $Jpeg= new Jpeg();
      echo $Jpeg->imageDimention();

	}
}

new Main();



 ?>