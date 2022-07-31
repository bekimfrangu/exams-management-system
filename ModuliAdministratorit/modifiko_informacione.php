<?php
// including the database connection file //
	include("kontrollo.php");
?>
<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['modifiko_informacione']))
{	
	$ID_Info = $_POST['ID_Info'];
	
	$Shenimi=$_POST['Shenimi'];
	$Shpjegimi=$_POST['Shpjegimi'];
	
	$Pjesa_Faqes=$_POST['Pjesa_Faqes'];	
	// checking empty fields
	if(empty($Shenimi) || empty($Shpjegimi)  || empty($Pjesa_Faqes)){	
			
		if(empty($Shenimi)) {
			echo "<font color='red'>Fusha Shenimi eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Shpjegimi)) {
			echo "<font color='red'>Fusha Shpjegimi eshte e zbrazet.</font><br/>";
		}
		
			
	if(empty($Pjesa_Faqes)) {
			echo "<font color='red'>Fusha Pjesa e Faqes eshte e zbrazet.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE ump_informacionet SET Shenimi='$Shenimi',Shpjegimi='$Shpjegimi',Pjesa_Faqes='$Pjesa_Faqes' WHERE ID_Info=$ID_Info");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: modifiko_informacione_forma.php");
	}
}
?>
<?php
//getting ID_Dep from url
$ID_Info = $_GET['ID_Info'];

//selecting data associated with this particular ID_Dep
$rezultati = mysqli_query($lidhu,"SELECT * FROM ump_informacionet WHERE ID_Info=$ID_Info");

while($rezultat = mysqli_fetch_array($rezultati))
{
	$Shenimi = $rezultat['Shenimi'];
	$Shpjegimi = $rezultat['Shpjegimi'];
	
	$Pjesa_Faqes = $rezultat['Pjesa_Faqes'];
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
			<header id="header">
					<h1 id="logo"><a href="index.php"></a></h1>
					<nav id="nav">
						<ul>
						<li><a href="ballina_Administrator.php">Ballina</a></li>
						<li><a href="paraqitjet_provimeve.php">Paraqitjet e  provimeve</a></li>
						<li><a href="perdoruesit.php">Përdoruesit</a></li>
						<li><a href="ckycu.php">Ckycu</a></li>
						</ul>
					</nav>
			</header>

			<section id="banner">
					<div class="content">
						<header>
							<h2>Uebaplikacioni për Menaxhimin e Provimeve (UMP)</h2>
							<p></p>
						</header>
					
					</div>
					
			</section>
			<!-- Main -->
					
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
							<form name="form1" method="post" action="modifiko_informacione.php">
								<div class="row gtr-uniform gtr-50">
								<div class="col-6 col-12-xsmall">
								<h3>Modifiko informacione</h3>
										Shënimi
										<input type="text" name="Shenimi" value='<?php echo $Shenimi;?>'   required />
										<br>
										Shpjegimi
										
										<textarea name="Shpjegimi"  rows="10" cols="30"><?php echo $Shpjegimi;?></textarea>
										
										<br >
										Pjesa e faqes
										<input type="text" name="Pjesa_Faqes" value='<?php echo $Pjesa_Faqes;?>'   required />
										<br >
										<input type="hidden" name="ID_Info" value='<?php echo $_GET['ID_Info'];?>' />
										<input type="submit" name="modifiko_informacione" value="Modifiko">
									</div>
									</div>

						</form>
					
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
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
					<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				
				<ul class="copyright">
				<li>&copy; Untitled. Të gjitha drejtat e rezervuara.</li>	
				
				<li>Fotot <a href="https://unsplash.com/">Unsplash</a></li>	
					
					<li>Pyetjet  
					<a href="https://www.sanfoundry.com/data-structure-interview-questions-answers-single-linked-lists/">Programim I</a>,
					<a href="https://www.sanfoundry.com/data-structure-questions-answers-binary-search-iterative/">Programim II</a>,
					<a href="https://www.math-only-math.com/math-questions-answers.html">Matematike I</a>,
					<a href="https://www.hitbullseye.com/Probability-Examples.php">Probabilitet dhe Statistike</a>
					</li>
				
				
						
					<li>&copy; Meritat @html5upnet për shabllonin falas <a href="https://html5up.net/license">Creative Commons</a></li>
		
				</ul>
			</footer>
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