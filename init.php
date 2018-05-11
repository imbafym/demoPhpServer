<?php


require "database.php";

echo "$db['default']";
$connection=mysqli_connect($db['default']);

if(!$connection){
  echo "Connection not successful v2";
}else{
  echo "Connection successful";
}






?>
