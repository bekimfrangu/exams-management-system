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
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
					<h1 id="logo"><a href="index.php"></a></h1>
					<?php include_once("meny.php"); ?>
			</header>
			
			<?php include_once("fillimi_faqes.php"); ?>
			<!-- Main -->
				
						<!-- Text -->
						

						<!-- Lists -->
							
						<!-- Table -->
					

						<!-- Buttons -->
						
						<!-- Form -->
						
							
						
						<section id="four" class="wrapper style1 special fade-up">
							<div class="container">
								<div class="container">
								<p style="text-align:right;">Përshëndetje, <em><?php  echo $kycu_perdorues;?>!</em></p>
								</div>
								<h3 style="text-align:left"><b>MENAXHIMI TË DHËNAVE TË PARAQITJEVE TË PROVIMEVE</b></h3>
									<div class="box alt">
										<div class="row gtr-uniform">
										
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="shto_paraqitjetprovimeve_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Shto Paraqitje të provimit</h3>
												<p>Forma për shtimin e paraqitjeve të provimeve të reja në webaplikacion me të drejta të administratorit.</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="modifiko_paraqitjetprovimeve_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Modifiko Paraqitje të provimit</h3>
												<p>Forma për modifikimin e paraqitjeve të provimeve aktuale në webaplikacion me të drejta të administratorit.</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="fshije_paraqitjetprovimeve_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Fshijë Paraqitje të provimit</h3>
												<p>Forma për fshirjen e paraqitjeve të provimeve aktuale nga webaplikacioni me të drejta të administratorit.</p>
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