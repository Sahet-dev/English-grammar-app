<?php
//email to check
$email = $_POST['answer1'];
//prepare the statement
$stmt = $pdo->prepare("SELECT * FROM answers WHERE answer1=?");
//execute the statement
$stmt->execute([$email]); 
//fetch result
$user = $stmt->fetch();
if ($user) {
    // email exists
} else {
    // email does not exist
} 
?>