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
					<h1 id="logo"><a href="index.html"></a></h1>
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
							<h3>Shto informacione</h3>
							
								<form enctype="multipart/form-data" name="form1" method="post" action="shto_informacione.php" >
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<table border="0">
												
												
												<tr> 
													<td>Shënimi</td>
													<td><input type="text" name="Shenimi"></td>
												</tr>
										
												<tr> 
													<td>Shpjegimi</td>
													<td>
													<textarea name="Shpjegimi" rows="10" cols="30"></textarea>
													</td>
												</tr>
												
											
												<tr> 
												<td>Pjesa e faqes</td>
													<td><input type="text" name="Pjesa_Faqes"></td>
												</tr>
							
												<tr> 
													<td></td>
													<td><input type="submit" name="shto_informacione" value="Shto"></td>
												</tr>
												
											</table>
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