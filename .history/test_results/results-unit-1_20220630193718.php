<style>
  <?php include '../assets/css/test.css'; ?>
</style>
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
		<link rel="stylesheet" href="../assets/css/test.css" />
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

								</header>

								<!-- Text stuff -->

								  <p>








                  <?php  


                  $localhost = "localhost";
                  $root = "root";
                  $sahy = "sahy";
                  $unit = "unit-1";

                  $con = mysqli_connect($localhost,$root,$sahy,$unit);



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer1` = '".$_POST['answer1']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('<h2>1-nji</h2> jogap <b>Dogry</b><br><br>');
                  }else {
                    echo('<h2>1-nji</h2> jogap <b>NaDogry</b><br><br>');
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



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer9` = '".$_POST['answer9']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('9-nji jogap Dogry<br><br>');
                  }else {
                    echo('9-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer10` = '".$_POST['answer10']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('10-nji jogap Dogry<br><br>');
                  }else {
                    echo('10-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer11` = '".$_POST['answer11']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('11-nji jogap Dogry<br><br>');
                  }else {
                    echo('11-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer12` = '".$_POST['answer12']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('12-nji jogap Dogry<br><br>');
                  }else {
                    echo('12-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer13` = '".$_POST['13']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('13-nji jogap Dogry<br><br>');
                  }else {
                    echo('13-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer14` = '".$_POST['answer14']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('14-nji jogap Dogry<br><br>');
                  }else {
                    echo('14-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer15` = '".$_POST['answer15']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('15-nji jogap Dogry<br><br>');
                  }else {
                    echo('15-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer16` = '".$_POST['answer16']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('16-nji jogap Dogry<br><br>');
                  }else {
                    echo('16-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer17` = '".$_POST['answer17']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('17-nji jogap Dogry<br><br>');
                  }else {
                    echo('17-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer18` = '".$_POST['answer18']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('18-nji jogap Dogry<br><br>');
                  }else {
                    echo('18-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer19` = '".$_POST['answer19']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('19-nji jogap Dogry<br><br>');
                  }else {
                    echo('19-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer20` = '".$_POST['answer20']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('20-nji jogap Dogry<br><br>');
                  }else {
                    echo('20-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer21` = '".$_POST['answer21']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('21-nji jogap Dogry<br><br>');
                  }else {
                    echo('21-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer22` = '".$_POST['answer22']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('22-nji jogap Dogry<br><br>');
                  }else {
                    echo('22-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer23` = '".$_POST['answer23']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('23-nji jogap Dogry<br><br>');
                  }else {
                    echo('23-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer24` = '".$_POST['answer24']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('24-nji jogap Dogry<br><br>');
                  }else {
                    echo('24-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer25` = '".$_POST['answer25']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('25-nji jogap Dogry<br><br>');
                  }else {
                    echo('25-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer26` = '".$_POST['answer26']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('26-nji jogap Dogry<br><br>');
                  }else {
                    echo('26-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer27` = '".$_POST['answer27']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('27-nji jogap Dogry<br><br>');
                  }else {
                    echo('27-nji jogap Nadogry!<br><br>');
                  }



                  $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer28` = '".$_POST['answer28']."'")
                  or exit(mysqli_error($con));

                  if(mysqli_num_rows($select)) {
                      echo('28-nji jogap Dogry<br><br>');
                  }else {
                    echo('28-nji jogap Nadogry!<br><br>');
                  }











                  ?>







































































































































































// Create connection

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
*/