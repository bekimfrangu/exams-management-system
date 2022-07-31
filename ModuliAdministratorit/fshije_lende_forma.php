<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
//including the database connection file
include_once("konfiguro.php");

//fetching data in descending order (lastest entry first)
$rezultati = mysqli_query($lidhu,
"SELECT * FROM ump_lendet ORDER BY ID_Lenda DESC");
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
									<h3>Kërko të dhënat e lëndës për fshirje</h3>
									</tr>
									
									<tr>
										<td>
											Shkruaj:
										</td>
										<td>
											<input type="text" name="term" placeholder="Lëndën ose Përshkrimin"/>
										</td>
										<td> <input type="submit" value="Kërko" /></td>
									</tr>
								</table>
								</form>
									
								
						</section>
						<section>
								
								<div class="table-wrapper">
								<table width='80%' border=0>
									<div class="table-wrapper">
										<tr bgcolor='#CCCCCC'>
											<td>Lënda</td>
											<td>Profesori</td>
											<td>Përshkrimi</td>
											<td>Foto</td>
											<td>Emri skedar-it</td>
											<td>Modifiko</td>
										</tr> 
												<?php
												if (!empty($_REQUEST['term'])) {
												$term = mysqli_real_escape_string
												($lidhu,$_REQUEST['term']);     
												$deklarate = mysqli_query($lidhu,
												"SELECT ump_lendet.ID_Lenda,
														  ump_lendet.Emri_Lenda,
														  ump_profesoret.Emri_Prof,
														  ump_lendet.Pershkrimi_Lenda,
														  ump_lendet.Foto_Lenda,
														  ump_lendet.Emri_Foto
														 
														FROM
														 ump_lendet 
														INNER JOIN
														  ump_profesoret ON ump_lendet.ID_Profesori = ump_profesoret.ID_Profesori
														WHERE
														  ump_lendet.Emri_Lenda LIKE '%".$term."%' OR ump_lendet.Pershkrimi_Lenda LIKE '%".$term."%'"
															); 
												while($rreshti = mysqli_fetch_array($deklarate)) { 		
														echo "<tr>";
														echo "<td>".$rreshti['Emri_Lenda']."</td>";	
														echo "<td>".$rreshti['Emri_Prof']."</td>";	
														echo "<td>".$rreshti['Pershkrimi_Lenda']."</td>";	
														echo "<td><img src=data:image/jpeg;base64,".base64_encode($rreshti['Foto_Lenda'])." width='80'  height='100'/></td>";
														echo "<td>".$rreshti['Emri_Foto']."</td>";	
														echo "<td><a href=\"fshije_Lende.php?ID_Lenda=$rreshti[ID_Lenda]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini lenden?')\" class='button'
														class='button primary'>Fshijë</a> </td>";		
													}

												}

												?>
									</div>
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