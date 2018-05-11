<?php


require "database.php";


$connection=mysqli_connect($db['default']);

if(!$connection){
  echo "Connection not successful";
}else{
  echo "Connection successful";
}






?>
