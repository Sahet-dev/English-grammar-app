<?php






 
$servername   = "localhost";
$database = "unit-1";
$username = "root";
$password = "sahy";

  








$conn  =   mysqli_connect("localhost", "root" ,"sahy", "unit-1");


$select = mysqli_query($conn, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
    exit('This email address is already used!');
}

 