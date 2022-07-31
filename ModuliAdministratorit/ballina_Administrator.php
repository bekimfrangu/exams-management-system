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
							<h3 style="text-align:left"><b>MENAXHIMI TË DHËNAVE TË BALLINËS</b></h3><br>
								<div class="box alt">
									<div class="row gtr-uniform">

											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="shto_lende_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Shto Lëndë</h3>
												<p>Forma për shtimin e lëndëve të reja në webaplikacion me të drejta të administratorit.</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="modifiko_lende_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Modifiko Lëndë</h3>
												<p>Forma për modifikimin e lëndëve aktuale në webaplikacion me të drejta të administratorit.</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="fshije_lende_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Fshijë Lëndë</h3>
												<p>Forma për fshirjen e lëndëve aktuale nga webaplikacioni me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="shto_provim_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Shto Provim</h3>
												<p>Forma për shtimin e provimeve të reja ne webaplikacion me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="modifiko_provim_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Modifiko Provim</h3>
												<p>Forma për modifkimin e provimeve aktuale në webaplikacion me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="fshije_provim_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Fshijë Provim</h3>
												<p>Forma për fshirjen e provimeve aktuale nga webaplikacioni me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="shto_pyetje_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Shto Pyetje</h3>
												<p>Forma për shtimin e pyetjeve të reja në webaplikacion me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="modifiko_pyetje_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Modifiko Pyetje</h3>
												<p>Forma për modifikimin e pyetjeve aktuale në webaplikacion me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="fshije_pyetje_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Fshijë Pyetje</h3>
												<p>Forma për fshirjen e pyetjeve aktuale nga webaplikacioni me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="shto_profesor_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Shto Profesor</h3>
												<p>Forma për shtimin e profesorëve të rinjë në webaplikacion me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="modifiko_profesor_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Modifiko Profesor</h3>
												<p>Forma për modifikimin e profesorëve aktual në webaplikacion me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="fshije_profesor_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Fshijë Profesor</h3>
												<p>Forma për fshirjen e profesorëve aktual nga webaplikacioni me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="shto_informacione_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Shto Informacione</h3>
												<p>Forma për shtimin e informacioneve të reja në webaplikacion me të drejta të administratorit .</p>
											</section>
											
											<section class="col-4 col-6-medium col-12-xsmall">
												<a href="modifiko_informacione_forma.php"><span class="icon solid alt major fa-file"></span></a>
												<h3>Modifiko Informacione</h3>
												<p>Forma për modifikimin e informacioneve aktuale në webaplikacion me të drejta të administratorit .</p>
											</section>
										
											<section class="col-4 col-6-medium col-12-xsmall">
													<a href="fshije_informacione_forma.php"><span class="icon solid alt major fa-file"></span></a>
													<h3>Fshijë Informacione</h3>
													<p>Forma për fshirjen e informacioneve aktuale nga webaplikacioni me të drejta të administratorit .</p>
											</section>
							
									</div>
								</div> 
							</div>
						</section>
						


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