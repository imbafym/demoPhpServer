<?php

require "init.php";


$name=$_POST["name"];
$password=$_POST["password"];
$contact=$_POST["contact"];
$country=$_POST["country"];

$sql_query="insert into users values( '$name','$password','$contact','$country');";

if(mysqli_query($connection, $sql_query)){
  echo "data inserted";
}else{
  echo "data not inserted";
}

?>
