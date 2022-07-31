<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
//including the database connection file
include_once("konfiguro.php");

//fetching data in descending order (lastest entry first)
$rezultati = mysqli_query($lidhu,
"SELECT * FROM ump_profesoret ORDER BY ID_Profesori DESC");
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
						
						<!-- Text -->
						<section>
							<p style="text-align:right;">Përshëndetje, <em><?php  echo $kycu_perdorues;?>!</em></p>
					
						</section>
						

						<!-- Lists -->
							
						<!-- Table -->
					

						<!-- Buttons -->
						
						<!-- Form -->
						<section>
								<form method="post" action="" >
								<table>
									<tr>
									<h3>Kërko të dhënat e profesorit për fshirje</h3>
									</tr>
									
									<tr>
										<td>
											Shkruaj:
										</td>
										<td>
											<input type="text" name="term" placeholder="Emrin ose Mbiemrin"/>
										</td>
										<td> <input type="submit" value="Kërko" /></td>
									</tr>
								</table>
								</form>
									
								
						</section>
						<section>
								
								<div class="table-wrapper">
								<table border="0">
									
										<tr bgcolor='#CCCCCC'>
											<td>Emri</td>
											<td>Mbiemri</td>
											<td>Datelindja</td>
											<td>Adresa</td>
											<td>Profili</td>
											<td>Niveli</td>
											<td>Fshijë</td>
										</tr> 
												<?php
												if (!empty($_REQUEST['term'])) {
												$term = mysqli_real_escape_string
												($lidhu,$_REQUEST['term']);     
												$deklarate = mysqli_query($lidhu,
												"SELECT * FROM ump_profesoret WHERE
													  Emri_Prof LIKE '%".$term."%' OR Mbiemri_Prof LIKE '%".$term."%'"
														); 
												while($rreshti = mysqli_fetch_array($deklarate)) { 		
														echo "<tr>";
														echo "<td>".$rreshti['Emri_Prof']."</td>";
														echo "<td>".$rreshti['Mbiemri_Prof']."</td>";
														echo "<td>".$rreshti['Datelindja_Prof']."</td>";	
														echo "<td>".$rreshti['Adresa_Prof']."</td>";
														echo "<td>".$rreshti['Profili_Prof']."</td>";
														echo "<td>".$rreshti['Niveli_Prof']."</td>";
														echo "<td><a href=\"fshije_Profesor.php?ID_Profesori=$rreshti[ID_Profesori]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini profesorin/en?')\" class='button' 
														class='button primary'>Fshijë</a> </td>";	
													
													}

												}

												?>
								</table>
							</div>
						</section>
			</div>
						<!-- Image -->
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