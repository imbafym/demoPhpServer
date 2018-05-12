<?php

require "database.php";
//connect to the data base


//fetch data from table food in the database
$query = "SELECT * FROM FOOD";
$result = mysqli_query($connection, $query);

//create an array
$emparray = array();

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $emparray[] = $row;
    }
}

echo json_encode($emparray);

?>