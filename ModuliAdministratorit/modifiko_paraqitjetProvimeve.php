<?php
// including the database connection file // nuk u kry
include("kontrollo.php");
?>
<?php
include_once("konfiguro.php");
if(isset($_POST['modifiko_paraqitjetProvimeve']))
{	
	$ID_Paraqitja=$_POST['ID_Paraqitja'];
	$ID_Prov=$_POST['ID_Prov'];
	$Emri_Paraqitesi=$_POST['Emri_Paraqitesi'];	
	$Mbiemri_Paraqitesi=$_POST['Mbiemri_Paraqitesi'];
	$Viti_Studimit_Paraqitesi=$_POST['Viti_Studimit_Paraqitesi'];	
	$Email_Paraqitesi=$_POST['Email_Paraqitesi'];	
	
	// checking empty fields
	if(empty($Emri_Paraqitesi) || empty($Mbiemri_Paraqitesi) || empty($Viti_Studimit_Paraqitesi) || empty($Email_Paraqitesi)) {	
			
		
		
		if(empty($SEmri_Paraqitesi)) {
			echo "<font color='red'>Fusha emri eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Mbiemri_Paraqitesi)) {
			echo "<font color='red'>Fusha mbiemri eshte e zbrazet.</font><br/>";
		}	
		if(empty($Viti_Studimit_Paraqitesi)) {
					echo "<font color='red'>Fusha viti studimit eshte e zbrazet.</font><br/>";
				}
		if(empty($Email_Paraqitesi)) {
			echo "<font color='red'>Fusha email eshte e zbrazet.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE ump_paraqitjet_provimeve SET ID_Prov='$ID_Prov',Emri_Paraqitesi='$Emri_Paraqitesi', Mbiemri_Paraqitesi='$Mbiemri_Paraqitesi', Viti_Studimit_Paraqitesi='$Viti_Studimit_Paraqitesi',Email_Paraqitesi='$Email_Paraqitesi' WHERE ID_Paraqitja=$ID_Paraqitja");
		
		//redirectig to the display pID_Prov. In our case, it is admin.php
		header("Location: modifiko_paraqitjetprovimeve_forma.php");
	}
}
?>
<?php
//getting ID_Paraqitja from url
$ID_Paraqitja = $_GET['ID_Paraqitja'];

//selecting data associated with this particular ID_Paraqitja
$rezultati = mysqli_query($lidhu,"SELECT * FROM ump_paraqitjet_provimeve WHERE ID_Paraqitja=$ID_Paraqitja");

while($rezultat = mysqli_fetch_array($rezultati))
{
	$ID_Prov = $rezultat['ID_Prov'];
	$Emri_Paraqitesi = $rezultat['Emri_Paraqitesi'];
	$Mbiemri_Paraqitesi=$rezultat['Mbiemri_Paraqitesi'];
	$Viti_Studimit_Paraqitesi = $rezultat['Viti_Studimit_Paraqitesi'];
	$Email_Paraqitesi = $rezultat['Email_Paraqitesi'];
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
							<form  name="form1" method="post" action="modifiko_paraqitjetProvimeve.php">
	
								<h3>Modifiko të dhënat e paraqitjes të provimit</h3>
									<div class="row gtr-uniform gtr-50">
									<div class="col-6 col-52-xsmall">
									<select name="ID_Prov">
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
									
									Emri
									<input type="text" name="Emri_Paraqitesi" value='<?php echo $Emri_Paraqitesi;?>'   required />
									<br>
									Mbiemri
									<input type="text" name="Mbiemri_Paraqitesi" value='<?php echo $Mbiemri_Paraqitesi;?>'   required />
									<br >
									Viti studimit
									<input type="text" name="Viti_Studimit_Paraqitesi" value='<?php echo $Viti_Studimit_Paraqitesi;?>'   required />
									<br >
									Email-i
									<input type="email" name="Email_Paraqitesi" value='<?php echo $Email_Paraqitesi;?>'   required />
									<br >
									<input type="hidden" name="ID_Paraqitja" value='<?php echo $_GET['ID_Paraqitja'];?>' />
									<input type="submit" name="modifiko_paraqitjetProvimeve" value="Modifiko">
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