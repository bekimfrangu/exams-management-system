<?php
/* Index.php faqja qe permban formen e loginit) */
	include('kycu.php'); // Include Login Script
	if ((isset($_SESSION['Emri']) != '')) 
	{
		header('Location: faqja_Administruese.php');
	}	
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
		
			<?php include_once("fillimi_faqes.php"); ?>
			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						

						<!-- Text -->
						

						<!-- Lists -->
							
						<!-- Table -->
					

						<!-- Buttons -->
						
						<!-- Form -->
						
						
							
							<section>
							<h3>Udhëzim</h3>
							<blockquote>Për t'u kycur në webaplikacion ju lutem kontaktone administratorin për krijimin e llogarisë</blockquote>
								<h3>Kycja në webaplikacion</h3>
								<form method="post" action="">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="Emri_Perdoruesi" id="Emri_Perdoruesi" value="" placeholder="Përdoruesi" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="password" name="Fjalekalimi_Perdoruesi" id="Fjalekalimi_Perdoruesi" value="" placeholder="Fjalëkalimi" />
										</div>
									
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" name="submit" value="Kycu" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
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