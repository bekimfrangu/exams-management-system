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
		<title>Modduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
					<h1 id="logo"><a href="index.php"></a></h1>
					<?php include_once("meny.php"); ?>
			</header>

			<!-- Main -->
			<?php include_once("fillimi_faqes.php"); ?>
		
		<div id="main" class="wrapper style1">
			<div class="container">
						
						
						<section>
							<p style="text-align:right;">Përshëndetje, <em><?php  echo $kycu_perdorues;?>!</em></p>
					
						</section>

						<!-- Text -->
						

						<!-- Lists -->
							
						<!-- Table -->
					

						<!-- Buttons -->
						
						<!-- Form -->
						<section>
							<h3>Shto të dhënat e përdoruesit</h3>
							
								<form method="post" action="shto_Perdorues.php" >
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="Emri_Perdoruesi" id="Emri" value="" placeholder="Përdoruesi" />
										<br>
											<input type="password" name="Fjalekalimi_Perdoruesi" id="Fjalekalimi" value="" placeholder="Fjalëkalimi" />
										<br>
											<input type="text" name="Adresa_Perdoruesi" id="Adresa" value="" placeholder="Adresa" />
										<br>
											<input type="email" name="Email_Perdoruesi" id="Email" value="" placeholder="Email-i" />
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" name="shto_Perdorues" value="Shto" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
						</section>

						<!-- Image -->
							

			</div>
	</div>
						<!-- Text -->
						

						<!-- Lists -->
							
						<!-- Table -->
					

						<!-- Buttons -->
						
						<!-- Form -->
						

						<!-- Image -->


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