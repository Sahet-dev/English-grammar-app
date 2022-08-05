<style>
<?php include "assets/css/test.css"; ?>
</style>
<?php 
 

$localhost = "localhost";
$root = "root";
$sahy = "sahy";
$unit = "unit-1";?>




<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Test </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/test.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="../index.html" class="logo">Esasy Sahypa</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="units/.html">This is Massively</a></li>

						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<h2>


									</h2>
								</header>

								<!-- Text stuff -->

									<p>












<?php
$con = mysqli_connect($localhost,$root,$sahy,$unit);


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer1` = '".$_POST['answer1']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo(' 
    <h2>1-nji jogap Dogry</h2>
    <br><br>
    
    ');
}else {
  echo('<h2>1-nji jogap Nadogry!</h2><br><br>');
}


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer2` = '".$_POST['answer2']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('2-nji jogap Dogry<br><br>');
}else {
  echo('2-nji jogap Nadogry!<br><br>');
}

$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer3` = '".$_POST['answer3']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('3-nji jogap Dogry<br><br>');
}else {
  echo('3-nji jogap Nadogry!<br><br>');
}


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer4` = '".$_POST['answer4']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('4-nji jogap Dogry<br><br>');
}else {
  echo('4-nji jogap Nadogry!<br><br>');
}


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer5` = '".$_POST['answer5']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('5-nji jogap Dogry<br><br>');
}else {
  echo('5-nji jogap Nadogry!<br><br>');
}

$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer6` = '".$_POST['answer6']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('6-nji jogap Dogry<br><br>');
}else {
  echo('6-nji jogap Nadogry!<br><br>');
}


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer7` = '".$_POST['answer7']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('7-nji jogap Dogry<br><br>');
}else {
  echo('7-nji jogap Nadogry!<br><br>');
}


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer8` = '".$_POST['answer8']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('8-nji jogap Dogry<br><br>');
}else {
  echo('8-nji jogap Nadogry!<br><br>');
}

$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer9` = '".$_POST['unit_6_4_2']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('9-nji jogap Dogry<br><br>');
}else {
  echo('9-nji jogap Nadogry!<br><br>');
}



$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer10` = '".$_POST['unit_6_4_3']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('10-nji jogap Dogry<br><br>');
}else {
  echo('10-nji jogap Nadogry!<br><br>');
}


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer11` = '".$_POST['unit_6_4_4']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('11-nji jogap Dogry<br><br>');
}else {
  echo('11-nji jogap Nadogry!<br><br>');
}

$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer12` = '".$_POST['unit_6_4_5_1']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('12-nji jogap Dogry<br><br>');
}else {
  echo('12-nji jogap Nadogry!<br><br>');
}




$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer13` = '".$_POST['unit_6_4_5_2']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('13-nji jogap Dogry<br><br>');
}else {
  echo('13-nji jogap Nadogry!<br><br>');
}


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer14` = '".$_POST['unit_6_4_6_1']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('14-nji jogap Dogry<br><br>');
}else {
  echo('14-nji jogap Nadogry!<br><br>');
}

$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer15` = '".$_POST['unit_6_4_6_2']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('15-nji jogap Dogry<br><br>');
}else {
  echo('15-nji jogap Nadogry!<br><br>');
}



$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer16` = '".$_POST['unit_6_4_7']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('16-nji jogap Dogry<br><br>');
}else {
  echo('16-nji jogap Nadogry!<br><br>');
}


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer17` = '".$_POST['unit_6_4_8_1']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('17-nji jogap Dogry<br><br>');
}else {
  echo('17-nji jogap Nadogry!<br><br>');
}

$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer18` = '".$_POST['unit_6_4_8_2']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('18-nji jogap Dogry<br><br>');
}else {
  echo('18-nji jogap Nadogry!<br><br>');
}

$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer19` = '".$_POST['unit_6_4_9_1']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('18-nji jogap Dogry<br><br>');
}else {
  echo('18-nji jogap Nadogry!<br><br>');
}

$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer20` = '".$_POST['unit_6_4_9_2']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('18-nji jogap Dogry<br><br>');
}else {
  echo('18-nji jogap Nadogry!<br><br>');
}


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer21` = '".$_POST['unit_6_4_9_3']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('18-nji jogap Dogry<br><br>');
}else {
  echo('18-nji jogap Nadogry!<br><br>');
}


$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer22` = '".$_POST['unit_6_4_9_4']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('18-nji jogap Dogry<br><br>');
}else {
  echo('18-nji jogap Nadogry!<br><br>');
}


 

$select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer23` = '".$_POST['unit_6_4_10']."'")
or exit(mysqli_error($con));

if(mysqli_num_rows($select)) {
    echo('18-nji jogap Dogry<br><br>');
}else {
  echo('18-nji jogap Nadogry!<br><br>
  
  </div>
  ');
}
 ?>
 </p>


</section>

</div>


<!-- Copyright -->
<div id="copyright">
<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
</div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
