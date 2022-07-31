<?php

	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['modifiko_Lende']))
{	
	$ID_Lenda = $_POST['ID_Lenda'];
	$ID_Profesori = $_POST['ID_Profesori'];
	$Emri_Lenda=$_POST['Emri_Lenda'];
	$Pershkrimi_Lenda=$_POST['Pershkrimi_Lenda'];
	
	
	
		$FotoData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
		$Emri_Foto = $_FILES['userfile']['name'];
	$maxsize = 10000000; // 10mb
	// checking empty fields
	if(empty($Emri_Lenda) || empty($Pershkrimi_Lenda)) {	
			
		if(empty($Emri_Lenda)) {
			echo "<font color='red'>Fusha Emri_Lenda eshte e zbrazet.</font><br/>";
		}
		if(empty($Pershkrimi_Lenda)) {
			echo "<font color='red'>Fusha pershkrimi eshte e zbrazet.</font><br/>";
		}
		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE ump_lendet SET Emri_Lenda='$Emri_Lenda',ID_Profesori='$ID_Profesori',Pershkrimi_Lenda='$Pershkrimi_Lenda',Foto_Lenda='$FotoData',Emri_Foto='$Emri_Foto'  WHERE ID_Lenda=$ID_Lenda");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: modifiko_lende_forma.php");
	}
}
?>
<?php
//getting ID_Lenda from url
$ID_Lenda = $_GET['ID_Lenda'];

//selecting data associated with this particular ID_Lenda
$rezultati = mysqli_query($lidhu,"SELECT * FROM ump_lendet WHERE ID_Lenda=$ID_Lenda");

while($rezultat = mysqli_fetch_array($rezultati))
{
	$Emri_Lenda = $rezultat['Emri_Lenda'];
	$ID_Profesori = $rezultat['ID_Profesori'];
	$Pershkrimi_Lenda=$rezultat['Emri_Lenda'];
	$Pershkrimi_Lenda=$rezultat['Pershkrimi_Lenda'];
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
				
					<form enctype="multipart/form-data"  name="form1" method="post" action="modifiko_Lende.php" >
					<h3>Modifiko të dhënat e lëndës</h3>
								<div class="row gtr-uniform gtr-50">
									<div class="col-6 col-12-xsmall">
									<table border="0">
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
										</select>
									</tr>
									<br/>
									
									<tr>
										<td>Lënda</td>
										<td><input type="text" name="Emri_Lenda"  value='<?php echo $Emri_Lenda;?>' required /></td>	
									</tr>
									<tr>
										<td>Përshkrimi</td>
										<td><textarea name="Pershkrimi_Lenda" rows="5" cols="20"><?php echo $Pershkrimi_Lenda;?></textarea></td>
									</tr>
									<tr>
											
											<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
								
											<td><input name="userfile" type="file" />			</td>
									</tr>	
										
										<tr>
										
											
												<td><input type="hidden" name="ID_Lenda" value='<?php echo $_GET['ID_Lenda'];?>' /></td>
												<td><input type="submit" name="modifiko_Lende" value="Modifiko" class="primary" /></td>
											
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