<style>
<?php include "../assets/css/test.css"; ?>
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
							<li><a href="#">Test Jogaplary</a></li>

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


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer1` = '".$_POST['answer_1_2_3']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3>unit_1_1_2 -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3>unit_1_1_3 -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_1_3` = '".$_POST['unit_1_1_3']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_1_4` = '".$_POST['unit_1_1_4']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_1_5` = '".$_POST['unit_1_1_5']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_1_6` = '".$_POST['unit_1_1_6']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_1_7_1` = '".$_POST['unit_1_1_7_1']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_1_7_2` = '".$_POST['unit_1_1_7_2']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_1_8` = '".$_POST['unit_1_1_8']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_2_2` = '".$_POST['unit_1_2_2']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_2_3` = '".$_POST['unit_1_2_3']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_2_4` = '".$_POST['unit_1_2_4']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_2_5` = '".$_POST['unit_1_2_5']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_3_3` = '".$_POST['unit_1_3_3']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_3_4` = '".$_POST['unit_1_3_4']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_3_5` = '".$_POST['unit_1_3_5']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_3_6` = '".$_POST['unit_1_3_6']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_3_7` = '".$_POST['unit_1_3_7']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_4_1` = '".$_POST['unit_1_4_1']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_4_2` = '".$_POST['unit_1_4_2']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_4_3` = '".$_POST['unit_1_4_3']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_4_4` = '".$_POST['unit_1_4_4']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_4_5` = '".$_POST['unit_1_4_5']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_4_6` = '".$_POST['unit_1_4_6']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_4_7` = '".$_POST['unit_1_4_7']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_4_8` = '".$_POST['unit_1_4_8']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_5_2` = '".$_POST['unit_1_5_2']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }






                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_5_3` = '".$_POST['unit_1_5_3']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }


                    $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_5_4` = '".$_POST['unit_1_5_4']."'")
                    or exit(mysqli_error($con));

                    if(mysqli_num_rows($select)) {
                        echo('<h3> -nji jogap Dogry </h3> &#x2611;


                        <br><br><br>');
                    }else {
                      echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                      <br><br><br>');
                    }




                                        $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_1_5_5` = '".$_POST['unit_1_5_5']."'")
                                        or exit(mysqli_error($con));

                                        if(mysqli_num_rows($select)) {
                                            echo('<h3> -nji jogap Dogry </h3> &#x2611;


                                            <br><br><br>');
                                        }else {
                                          echo('<h3> -nji jogap Nadogry! &#10060;</h3>


                                          <br><br><br>');
                                        }







                    ?>
                    </p>


                    </section>

                    </div>


                    <!-- Copyright -->
                    <div id="copyright">
                    <ul><li>&copy; Turkmen-English</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
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
