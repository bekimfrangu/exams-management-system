<?php
// including the database connection file 
include("kontrollo.php");
?>
<?php
include_once("konfiguro.php");
if(isset($_POST['modifiko_Profesor']))
{	
	$ID_Profesori = $_POST['ID_Profesori'];
	
	$Emri_Prof=$_POST['Emri_Prof'];
	$Mbiemri_Prof=$_POST['Mbiemri_Prof'];
	$Datelindja_Prof = $_POST['Datelindja_Prof'];
	$Adresa_Prof=$_POST['Adresa_Prof'];	
	$Profili_Prof=$_POST['Profili_Prof'];	
	$Niveli_Prof=$_POST['Niveli_Prof'];	
	
	
	// checking empty fields
	if(empty($Emri_Prof) || empty($Mbiemri_Prof) || empty($Datelindja_Prof) || empty($Adresa_Prof) || empty($Profili_Prof) || empty($Niveli_Prof))
	{			
		if(empty($Emri_Prof)) {echo "<font color='red'>Fusha Emri eshte e zbrazet.</font><br/>";}
		if(empty($Mbiemri_Prof)) {echo "<font color='red'>Fusha Mbiemri eshte e zbrazet.</font><br/>";}
		if(empty($Datelindja_Prof)) {echo "<font color='red'>Fusha Datelindja eshte e zbrazet.</font><br/>";}
		if(empty($Adresa_Prof)) {echo "<font color='red'>Fusha Adresa eshte e zbrazet.</font><br/>";}
		if(empty($Profili_Prof)) {echo "<font color='red'>Fusha Profili eshte e zbrazet.</font><br/>";}
		if(empty($Niveli_Prof)) {echo "<font color='red'>Fusha Niveli eshte e zbrazet.</font><br/>";}
		//link to the previous Mbiemri_Prof
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	}
	else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE ump_profesoret SET Emri_Prof='$Emri_Prof',Mbiemri_Prof='$Mbiemri_Prof',Adresa_Prof='$Adresa_Prof',Datelindja_Prof='$Datelindja_Prof', Profili_Prof='$Profili_Prof',Niveli_Prof='$Niveli_Prof' WHERE ID_Profesori=$ID_Profesori");
		
		//redirectig to the display pMbiemri_Prof. In our case, it is admin.php
		header("Location: modifiko_profesor_forma.php");
	}
}
?>
<?php
//getting ID_Profesori from url
$ID_Profesori = $_GET['ID_Profesori'];

//selecting data associated with this particular ID_Profesori
$rezultati = mysqli_query($lidhu,"SELECT * FROM ump_profesoret WHERE ID_Profesori=$ID_Profesori");

while($rezultat = mysqli_fetch_array($rezultati))
{
	$Emri_Prof = $rezultat['Emri_Prof'];
	$Mbiemri_Prof = $rezultat['Mbiemri_Prof'];
	$Datelindja_Prof = $rezultat['Datelindja_Prof'];
	$Adresa_Prof = $rezultat['Adresa_Prof'];
	$Profili_Prof=$rezultat['Profili_Prof'];	
	$Niveli_Prof=$rezultat['Niveli_Prof'];
	
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
							<form enctype="multipart/form-data"  name="form1" method="post" action="modifiko_Profesor.php">
								<h3>Modifiko të dhënat e profesorit</h3>
								<div class="row gtr-uniform gtr-50">
								<div class="col-6 col-12-xsmall">
									<table border="0">
									
										<tr> 
											<td>Emri</td>
											<td><input type="text" name="Emri_Prof" value='<?php echo $Emri_Prof;?>' required /></td>
										</tr>
										<tr> 
											<td>Mbiemri</td>
											<td><input type="text" name="Mbiemri_Prof" value='<?php echo $Mbiemri_Prof;?>' required /></td>
										</tr>
										<tr> 
											<td>Datelindja</td>
											<td><input type="date" name="Datelindja_Prof" value='<?php echo $Datelindja_Prof;?>' required /></td>
										</tr>
										<tr> 
											<td>Adresa</td>
											<td><input type="text" name="Adresa_Prof" value='<?php echo $Adresa_Prof;?>' required /></td>
										</tr>
										<tr> 
											<td>Profili</td>
											<td><input type="text" name="Profili_Prof" value='<?php echo $Profili_Prof;?>' required /></td>
										</tr>
										<tr> 
											<td>Niveli</td>
											<td><input type="text" name="Niveli_Prof" value='<?php echo $Niveli_Prof;?>' required /></td>
										</tr>
										
										<tr>
											<td><input type="hidden" name="ID_Profesori" value='<?php echo $_GET['ID_Profesori'];?>' /></td>
											<td><input type="submit" name="modifiko_Profesor" value="Modifiko"></td>
										</tr>
									</table>
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