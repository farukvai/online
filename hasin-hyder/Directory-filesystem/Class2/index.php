<?php 
// sleep(3);
// mkdir("test");
// //unlink("test/cd/ft/hu");
 //sleep(3);
 //file_put_contents("test/text.txt"," HEllo");
 //sleep(3);
// unlink("test/text.txt");
// sleep(3);
// rmdir("test");




# next step


/* 
//mkdir("test");
//file_put_contents("test/text.txt"," HEllo");
deleteDir(getcwd().DIRECTORY_SEPARATOR."test");
function deleteDir($path){
	$filesInPath=scandir($path);
  if(count(scandir($path))>2){
     foreach ($filesInPath as $file) {
     	if("." !=$file && ".." !=$file){
     		$filePath=$path.DIRECTORY_SEPARATOR.$file;
     	    unlink($filePath);
     	}
     }
  }
  	rmdir($path);
 }
*/



#next Step

mkdir("test/d1/d2/d3/d4",0777,true);
file_put_contents("test/text.txt"," HEllo");
file_put_contents("test/d1/text.txt"," HEllo");
file_put_contents("test/d1/d2/text.txt"," HEllo");
file_put_contents("test/d1/d2/d3/text.txt"," HEllo");
file_put_contents("test/d1/d2/d3/d4/text.txt"," HEllo");
sleep(10);
deleteDir(getcwd().DIRECTORY_SEPARATOR."test");
function deleteDir($path){
	if(!is_readable($path)){
		return;
	}

	$filesInPath=scandir($path);
  if(count(scandir($path))>2){
     foreach ($filesInPath as $file) {
     	if("." !=$file && ".." !=$file){
     		$filePath=$path.DIRECTORY_SEPARATOR.$file;
     		if(is_dir($filePath)){
     			deleteDir($filePath);
     		}else{
     			 unlink($filePath);
     		}
     	   
     	}
     }
  }
  	rmdir($path);
 }




 ?>
