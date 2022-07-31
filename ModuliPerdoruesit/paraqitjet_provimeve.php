<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("konfiguro.php");	
?>

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Perdoruesit</title>
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
			
				
				<!-- Banner -->
			
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
				<h3>Forma për paraqitje të provimit</h3>
	
								<form method="post" action="paraqit_provim.php" >
								
									<div class="row gtr-uniform gtr-50">
									<div class="col-6 col-52-xsmall">
									<select  name="ID_Prov">
												<option selected="selected">Zgjedh Provimin</option>
												<?php
														$rezultati=mysqli_query($lidhu,"SELECT * FROM ump_provimet");
														while($rreshti=$rezultati->fetch_array())
														{
															?>
															<option value="<?php echo $rreshti['ID_Prov']; ?>"><?php echo $rreshti['Emri_Prov']; ?></option>
															<?php
														}
											?>
									</select>
								
											<br>
											
												<input type="text" name="Emri_Paraqitesi" id="Provimi_Paraqitesi" value="" placeholder="Emri" />
											
											<br>
												<input type="text" name="Mbiemri_Paraqitesi" id="Mbiemri_Paraqitesi" value="" placeholder="Mbiemri" />
											
											
											<br>
											<input type="text" name="Viti_Studimit_Paraqitesi" id="Viti_Studimit_Paraqitesi" value="" placeholder="Viti studimit" />
											
											
											<br>
												<input type="email" name="Email_Paraqitesi" id="Email_Paraqitesi" value="" placeholder="Email-i" />
											
									</div>
										<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="paraqit_provim" value="Paraqit" class="primary" /></li>
												
												</ul>
										</div>
									</div>
								
								</form>
					</div>
			</section>
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