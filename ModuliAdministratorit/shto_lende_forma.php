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
							<h3>Shto të dhënat e lëndës</h3>
							
								<form enctype="multipart/form-data"  name="form1" method="post" action="shto_Lende.php"> 
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<table  border="0">
											
											<tr>
												<select name="ID_Profesori">
													<option selected="selected">Zgjedh Profesorin</option>
													<?php
															$rezultat=mysqli_query($lidhu,"SELECT * FROM ump_profesoret");
															while($rreshti=$rezultat->fetch_array())
															{
																?>
																<option value="<?php echo $rreshti['ID_Profesori']; ?>"><?php echo $rreshti['Emri_Prof']; ?> <?php echo $rreshti['Mbiemri_Prof']; ?></option>
																<?php
															}
													?>
												</select><br/>
											</tr>
										
											<tr>
												<td>Lënda</td>
												<td><input type="text" name="Emri_Lenda"  /></td>
											</tr>
											<tr>
												<td>Përshkrimi</td>
												<td><textarea name="Pershkrimi_Lenda" rows="5" cols="20"></textarea></td>
											</tr>
											<tr>
												<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
												<td><input name="userfile" type="file" /></td>
											</tr>
											
											<tr>
												<td></td>
												<td><input type="submit" name="shto_Lende" value="Shto" class="primary" /></td>
												
											</tr>
											</table>
											</div>
									</div>
								</form>
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