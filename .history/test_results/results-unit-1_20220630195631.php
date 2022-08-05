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
							<li><a href="units/.html">Test Jogap</a></li>

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
                       /*
                      $localhost = "sql109.epizy.com";
                      $root = "epiz_31737624";
                      $sahy = "p4hiQ58gutTGw";
                      $unit = "epiz_31737624_unit_";
*/
                      $localhost = "localhost";
                      $root = "root";
                      $sahy = "sahy";
                      $unit = "unit-1";



                      $con = mysqli_connect($localhost,$root,$sahy,$unit);

                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `answer1` = '".$_POST['answer1']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 


                      

                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 





                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 




                      $select = mysqli_query($con, "SELECT * FROM `answers` WHERE `unit_` = '".$_POST['unit_']."'")
                      or exit(mysqli_error($con));
                      
                      if(mysqli_num_rows($select)) {
                          echo('<h2> -nji jogap Dogry</h2><br>
                          
                          <br><br><br>');
                      }else {
                        echo('<h2> -nji jogap Nadogry!</h2><br>

                        <br><br><br>');
                      } 








                  ?>




              </p>


              </section>

              </div>


              <!-- Copyright -->
              <div id="copyright">
              <ul><li>&copy; Trukmen-English</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
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

 