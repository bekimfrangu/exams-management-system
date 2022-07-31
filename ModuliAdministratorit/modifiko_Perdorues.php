<?php

	include("kontrollo.php");	
?>
<?php
// including the database lidhuection file
include_once("konfiguro.php");

if(isset($_POST['modifiko_Perdorues']))
{	
	$ID_Perdoruesi = $_POST['ID_Perdoruesi'];
	
	$Emri_Perdoruesi=$_POST['Emri_Perdoruesi'];
	$Fjalekalimi_Perdoruesi=$_POST['Fjalekalimi_Perdoruesi'];
	$Adresa_Perdoruesi=$_POST['Adresa_Perdoruesi'];
	$Email_Perdoruesi=$_POST['Email_Perdoruesi'];	
	
	// checking empty fields
	if(empty($Emri_Perdoruesi) || empty($Fjalekalimi_Perdoruesi) || empty($Adresa_Perdoruesi) || empty($Email_Perdoruesi)) {	
			
		if(empty($Emri_Perdoruesi)) {
			echo "<font color='red'>Fusha perdoruesi eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Fjalekalimi_Perdoruesi)) {
			echo "<font color='red'>Fusha fjalekalimi eshte e zbrazet.</font><br/>";
		}
		if(empty($Adresa_Perdoruesi)) {
			echo "<font color='red'>Fusha adresa eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Email_Perdoruesi)) {
			echo "<font color='red'>fusha email eshte e zbrazet.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE ump_perdoruesit SET Emri_Perdoruesi='$Emri_Perdoruesi',Fjalekalimi_Perdoruesi='$Fjalekalimi_Perdoruesi',Adresa_Perdoruesi='$Adresa_Perdoruesi',Email_Perdoruesi='$Email_Perdoruesi' WHERE ID_Perdoruesi=$ID_Perdoruesi");
		
		//redirectig to the display pFjalekalimi_Perdoruesi. In our case, it is admin.php
		header("Location: modifiko_perdorues_forma.php");
	}
}
?>
<?php
//getting ID_Perdoruesi from url
$ID_Perdoruesi = $_GET['ID_Perdoruesi'];

//selecting data associated with this particular ID_Perdoruesi
$rezultati = mysqli_query($lidhu,"SELECT * FROM ump_perdoruesit WHERE ID_Perdoruesi=$ID_Perdoruesi");

while($rezultat = mysqli_fetch_array($rezultati))
{
	$Emri_Perdoruesi = $rezultat['Emri_Perdoruesi'];
	$Fjalekalimi_Perdoruesi = $rezultat['Fjalekalimi_Perdoruesi'];
	$Adresa_Perdoruesi = $rezultat['Adresa_Perdoruesi'];
	$Email_Perdoruesi = $rezultat['Email_Perdoruesi'];
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
							<form Emri_Perdoruesi="form1" method="post" action="modifiko_Perdorues.php" >
	
								<h3>Modifiko të dhënat e përdoruesit</h3>
									<div class="row gtr-uniform gtr-50">
									<div class="col-6 col-52-xsmall">
								
									Përdoruesi
									<input type="text" name="Emri_Perdoruesi" value='<?php echo $Emri_Perdoruesi;?>' />
									<br>
									Fjalëkalimi
									<input type="text" name="Fjalekalimi_Perdoruesi" value='<?php echo $Fjalekalimi_Perdoruesi;?>' />
									<br>
									Adresa
									<input type="text" name="Adresa_Perdoruesi" value='<?php echo $Adresa_Perdoruesi;?>' />
									<br>
									Email-i
									<input type="email" name="Email_Perdoruesi" value='<?php echo $Email_Perdoruesi;?>' />
									<br >
									<input type="hidden" name="ID_Perdoruesi" value='<?php echo $_GET['ID_Perdoruesi'];?>' />
									<input type="submit" name="modifiko_Perdorues" value="Modifiko">
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