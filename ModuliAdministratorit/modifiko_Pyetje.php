<?php
// including the database connection file 
include("kontrollo.php");
?>
<?php
include_once("konfiguro.php");
if(isset($_POST['modifiko_Pyetje']))
{	
	$ID_Pyetja = $_POST['ID_Pyetja'];
	$ID_Prov = $_POST['ID_Prov'];
	$Pyetja= $_POST['Pyetja'];
	$Opsioni_I = $_POST['Opsioni_I'];
	$Opsioni_II = $_POST['Opsioni_II'];
	$Opsioni_III = $_POST['Opsioni_III'];
	$Opsioni_IV = $_POST['Opsioni_IV'];
	$Zgjidhja = $_POST['Zgjidhja'];
	
	
	// checking empty fields
	if(empty($Pyetja) || empty($Opsioni_I) || empty($Opsioni_II) || empty($Opsioni_III) || empty($Opsioni_IV) || empty($Zgjidhja))
	{			
		if(empty($Pyetja)) {echo "<font color='red'>Fusha Pyetja eshte e zbrazet.</font><br/>";}
		if(empty($Opsioni_I)) {echo "<font color='red'>Fusha Opsioni_I eshte e zbrazet.</font><br/>";}
		if(empty($Opsioni_II)) {echo "<font color='red'>Fusha Opsioni_II eshte e zbrazet.</font><br/>";}
		if(empty($Opsioni_III)) {echo "<font color='red'>Fusha Opsioni_III eshte e zbrazet.</font><br/>";}
		if(empty($Opsioni_IV)) {echo "<font color='red'>Fusha Opsioni_IV eshte e zbrazet.</font><br/>";}
		if(empty($Zgjidhja)) {echo "<font color='red'>Fusha Zgjidhja eshte e zbrazet.</font><br/>";}
		
	
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE ump_pyetjet SET Pyetja='$Pyetja', ID_Prov='$ID_Prov',Opsioni_I='$Opsioni_I',Opsioni_II='$Opsioni_II',Opsioni_III='$Opsioni_III',Opsioni_IV='$Opsioni_IV', Zgjidhja='$Zgjidhja' WHERE ID_Pyetja=$ID_Pyetja");
		
		//redirectig to the display pOpsioni_I. In our case, it is admin.php
		header("Location: modifiko_pyetje_forma.php");
	}
}
?>
<?php
//getting ID_Pyetja from url
$ID_Pyetja = $_GET['ID_Pyetja'];

//selecting data associated with this particular ID_Pyetja
$rezultati = mysqli_query($lidhu,"SELECT * FROM ump_pyetjet WHERE ID_Pyetja=$ID_Pyetja");

while($rezultat = mysqli_fetch_array($rezultati))
{
	$Pyetja = $rezultat['Pyetja'];
	$ID_Prov = $rezultat['ID_Prov'];
	$Opsioni_I = $rezultat['Opsioni_I'];
	$Opsioni_II = $rezultat['Opsioni_II'];
	$Opsioni_III = $rezultat['Opsioni_III'];
	$Opsioni_IV = $rezultat['Opsioni_IV'];
	$Zgjidhja = $rezultat['Zgjidhja'];
	
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
							<form enctype="multipart/form-data"  name="form1" method="post" action="modifiko_Pyetje.php">
								<h3>Modifiko të dhënat e pyetjes</h3>
								<div class="row gtr-uniform gtr-50">
								<div class="col-6 col-12-xsmall">
								<table border="0">
									<tr>
									<select name="ID_Prov">
										<option selected="selected" required>Zgjedh Provimin</option>
											<?php
											$rezultat=mysqli_query($lidhu,"SELECT * FROM ump_provimet");
											while($rreshti=$rezultat->fetch_array())
											{
												?>
												<option value="<?php echo $rreshti['ID_Prov']; ?>"><?php echo $rreshti['Emri_Prov']; ?></option>
												<?php
											}
											?>
									</select><br />
									</tr>
									
										<tr> 
											<td>Pyetja</td>
											<td><input type="text" name="Pyetja" value='<?php echo $Pyetja;?>' required /></td>
										</tr>
										<tr> 
											<td>Opsioni I</td>
											<td><input type="text" name="Opsioni_I" value='<?php echo $Opsioni_I;?>' required /></td>
										</tr>
										<tr> 
											<td>Opsioni II</td>
											<td><input type="text" name="Opsioni_II" value='<?php echo $Opsioni_II;?>' required /></td>
										</tr>
										<tr> 
											<td>Opsioni III</td>
											<td><input type="text" name="Opsioni_III" value='<?php echo $Opsioni_III;?>' required /></td>
										</tr>
										<tr> 
											<td>Opsioni IV</td>
											<td><input type="text" name="Opsioni_IV" value='<?php echo $Opsioni_IV;?>' required /></td>
										</tr>
										<tr> 
											<td>Zgjidhja</td>
											<td><input type="text" name="Zgjidhja" value='<?php echo $Zgjidhja;?>' required /></td>
										</tr>
										
										<tr>
											<td><input type="hidden" name="ID_Pyetja" value='<?php echo $_GET['ID_Pyetja'];?>' /></td>
											<td><input type="submit" name="modifiko_Pyetje" value="Modifiko"></td>
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