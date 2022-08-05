<?php


$localhost = "sql109.epizy.com";
$root = "epiz_31737624";
$sahy = "p4hiQ58gutTGw";
$unit = "epiz_31737624_unit_two";

$con = mysqli_connect($localhost,$root,$sahy,$unit);



$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer1` = '".$_POST['answer1']."'")
or exit(mysqli_error($con));
if(mysqli_num_rows($select)) {
    echo('1-nji jogap Dogry<br><br>');
}else {
  echo('1-nji jogap Nadogry!');
}
























































































































































































// Create connection
/*
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
*/