<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
				
					<nav id="nav">
						<ul>
							<li><a href="ballina.php">Ballina</a></li>
							<li><a href="paraqitjet_provimeve.php">Paraqitjet e provimeve</a></li>
							<li><a href="perdoruesit.php">Përdoruesi</a></li>
							<li><a href="ckycu.php">Ckycu</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Uebaplikacioni për Menaxhimin e Provimeve (UMP)</h2>
						</header>

						<!-- Text -->
						

						<!-- Lists -->
							
						<!-- Table -->
					

						<!-- Buttons -->
						
						<!-- Form -->
						<section>
							<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
						</section>
							
							<section id="four" class="wrapper style1 special fade-up">
								<div class="container">
									<div class="box alt">
										<div class="row gtr-uniform">
										
											<section class="col-4 col-6-medium col-12-xsmall">
												<h3>Menaxhimi të dhënave të ballines</h3>
												
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												
											</section>
										
											
										</div>
									</div>

								</div>
						</section>

						<!-- Image -->
							

					</div>
				</div>

			<!-- Footer -->
				<?php include_once("fundi_faqes.php"); ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>