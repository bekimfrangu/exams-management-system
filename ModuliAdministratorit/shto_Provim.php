<html>

	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

<body>
<?php
//including the database connection file
include_once("konfiguro.php");

if(isset($_POST['shto_Provim'])) {	
	$Emri_Prov = $_POST['Emri_Prov'];
	$Totali_Pyetjeve = $_POST['Totali_Pyetjeve'];
	$Kohezgjatja = $_POST['Kohezgjatja'];
	$ID_Lenda = $_POST['ID_Lenda'];
		
	// checking empty fields
	if(empty($Emri_Prov) || empty($Totali_Pyetjeve) || empty($Kohezgjatja)) {			
		if(empty($Emri_Prov)) {echo "<font color='red'>Fusha provimi eshte e zbrazet.</font><br/>";}
		if(empty($Totali_Pyetjeve)) {echo "<font color='red'>Fusha totali i pyetjeve eshte e zbrazet.</font><br/>";}
		if(empty($Kohezgjatja)) {echo "<font color='red'>Fusha kohezgjatja eshte e zbrazet.</font><br/>";}
		
		//link to the previous Totali_Pyetjeve
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO ump_provimet (Emri_Prov,ID_Lenda , Totali_Pyetjeve,Kohezgjatja) VALUES('$Emri_Prov','$ID_Lenda','$Totali_Pyetjeve','$Kohezgjatja')");
		//display success messTotali_Pyetjeve
	echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina_Administrator.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne uebaplikacion. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='perdoruesit.php'>View Result</a>";
	}
}
?>
</body>
</html>