<?php 

session_name('my-app');
session_start([
  'cookie_lifetime'  =>60
]);

$_SESSION['name']="Faruk";

echo $_SESSION['name'];





 ?>