<?php






 








$conn  =   mysqli_connect("localhost", "root" ,"sahy", "unit-1");


$select = mysqli_query($conn, "SELECT * FROM answers WHERE answer1 = '".$_POST['answer1']."'");
if(mysqli_num_rows($select)) {
    exit('This email address is already used!');
}
else{
  exit('array key')
}
 