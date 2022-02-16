<?php 

class Dir{
	private $directories=[];
	private $files=[];
	private $path;
	private $directoryObject=[];

	function __construct($path){
       if(is_readable($path)){
         $entries= scandir($path);
          $this->path=$path;
			foreach ($entries as $entry) {
				if("." != $entry && ".." != $entry){
			       if(is_dir($path.DIRECTORY_SEPARATOR.$entry)){
			         array_push($this->directories,$entry);
			       }else{
			       	array_push($this->files,$entry);
			       }
				}
			}
       }
	}

	function getDirectories(){
		 return $this->directories;
	}

	function getFiles(){
		 return $this->files;
	}

	function getDirectory($index){
         if(isset($this->directories[$index])){
         	if(!isset($this->directoryObject[$index])){
              $this->directoryObjec[$index]= new Dir($this->path.DIRECTORY_SEPARATOR.$this->directories[$index]);
         	}
         	return $this->directoryObjec[$index];
           
         }else{
         	throw new Exception("Directory is not Found");
         	
         }
         return false;
	}
}

$DR= new Dir(getcwd());
$drD=$DR-> getDirectories();
$drF=$DR-> getFiles();
$drGD=$DR-> getDirectory(2);

print_r($drGD->getFiles());

 ?>
 <pre>
 	<?php print_r($drD); ?>
 </pre> 
 <pre>
 	<?php print_r($drF); ?>
 </pre>
 <h2>GEt Directory</h2>
 <pre>
 	<?php print_r($drGD); ?>
 </pre>