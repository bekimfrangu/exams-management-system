<?php
// including the database connection file
include("kontrollo.php");
?>
<?php
include_once("konfiguro.php");
if(isset($_POST['modifiko_Provim']))
{	
	$ID_Prov = $_POST['ID_Prov'];
	
	$Emri_Prov=$_POST['Emri_Prov'];
	$ID_Lenda=$_POST['ID_Lenda'];
	$Totali_Pyetjeve=$_POST['Totali_Pyetjeve'];
	$Kohezgjatja=$_POST['Kohezgjatja'];	
		
	
	// checking empty fields
	if(empty($Emri_Prov) || empty($Totali_Pyetjeve)  || empty($Kohezgjatja)) {	
			
		if(empty($Emri_Prov)) {
			echo "<font color='red'>Fusha Provimi eshte e zbraze.t</font><br/>";
		}
		
		if(empty($Totali_Pyetjeve)) {
			echo "<font color='red'>Fusha Totali i pyetjeve eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Kohezgjatja)) {
			echo "<font color='red'>Fusha Kohezgjatja eshte e zbrazet.</font><br/>";
		}
			
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE ump_provimet SET Emri_Prov='$Emri_Prov',ID_Lenda='$ID_Lenda',Totali_Pyetjeve='$Totali_Pyetjeve',Kohezgjatja='$Kohezgjatja' WHERE ID_Prov=$ID_Prov");
		
		//redirectig to the display pTotali_Pyetjeve. In our case, it is admin.php
		header("Location: modifiko_provim_forma.php");
	}
}
?>
<?php
//getting ID_Prov from url
$ID_Prov = $_GET['ID_Prov'];

//selecting data associated with this particular ID_Prov
$rezultati = mysqli_query($lidhu,"SELECT * FROM ump_provimet WHERE ID_Prov=$ID_Prov");

while($rezultat = mysqli_fetch_array($rezultati))
{
	$Emri_Prov = $rezultat['Emri_Prov'];
	$ID_Lenda=$rezultat['ID_Lenda'];
	$Totali_Pyetjeve = $rezultat['Totali_Pyetjeve'];
	$Kohezgjatja = $rezultat['Kohezgjatja'];
	
}
?>
<!DOCTYPE HTML> <!--te modifikimi duhet mi modifiku ose kejt 
				ose nuk bon-->
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
							<form enctype="multipart/form-data"  name="form1" method="post" action="modifiko_Provim.php">
								<h3>Modifiko të dhënat e provimit</h3>
								<div class="row gtr-uniform gtr-50">
								<div class="col-6 col-12-xsmall">
								<table border="0">
									<tr>
										<select name="ID_Lenda">
											<option selected="selected" required>Zgjedh Lëndën</option>
												<?php
												$rezultat=mysqli_query($lidhu,"SELECT * FROM ump_lendet");
												while($rreshti=$rezultat->fetch_array())
												{
													?>
													<option value="<?php echo $rreshti['ID_Lenda']; ?>"><?php echo $rreshti['Emri_Lenda']; ?></option>
													<?php
												}
												?>
										</select><br />
										</tr>
										<tr> 
											<td>Provimi</td>
											<td><input type="text" name="Emri_Prov" value='<?php echo $Emri_Prov;?>' required /></td>
										</tr>
										<tr> 
											<td>Totali i pyetjeve</td>
											<td><input type="text" name="Totali_Pyetjeve" value='<?php echo $Totali_Pyetjeve;?>' required /></td>
										</tr>
										<tr> 
											<td>Kohëzgjatja</td>
											<td><input type="text" name="Kohezgjatja" value='<?php echo $Kohezgjatja;?>' required /></td>
										</tr>
										
										<tr>
											<td><input type="hidden" name="ID_Prov" value='<?php echo $_GET['ID_Prov'];?>' /></td>
											<td><input type="submit" name="modifiko_Provim" value="Modifiko"></td>
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