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

if(isset($_POST['shto_Pyetje'])) {	
	$Pyetja = $_POST['Pyetja'];
	$ID_Prov = $_POST['ID_Prov'];
	$Opsioni_I = $_POST['Opsioni_I'];
	$Opsioni_II = $_POST['Opsioni_II'];
	$Opsioni_III = $_POST['Opsioni_III'];
	$Opsioni_IV = $_POST['Opsioni_IV'];
	$Zgjidhja = $_POST['Zgjidhja'];
	
		
	// checking empty fields
	if(empty($Pyetja) || empty($Opsioni_I) || empty($Opsioni_II) || empty($Opsioni_III) || empty($Opsioni_IV) || empty($Zgjidhja))
	{			
		if(empty($Pyetja)) {echo "<font color='red'>Fusha Pyetja eshte e zbrazet.</font><br/>";}
		if(empty($Opsioni_I)) {echo "<font color='red'>Fusha Opsioni I eshte e zbrazet.</font><br/>";}
		if(empty($Opsioni_II)) {echo "<font color='red'>Fusha Opsioni II eshte e zbrazet.</font><br/>";}
		if(empty($Opsioni_III)) {echo "<font color='red'>Fusha Opsioni III eshte e zbrazet.</font><br/>";}
		if(empty($Opsioni_IV)) {echo "<font color='red'>Fusha Opsioni IV eshte e zbrazet.</font><br/>";}
		if(empty($Zgjidhja)) {echo "<font color='red'>Fusha Zgjidhja eshte e zbrazet.</font><br/>";}
		//link to the previous Opsioni I
			echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa!</a>";
	
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO ump_pyetjet (Pyetja,ID_Prov,Opsioni_I,Opsioni_II,Opsioni_III,Opsioni_IV,Zgjidhja) VALUES('$Pyetja', '$ID_Prov', '$Opsioni_I','$Opsioni_II','$Opsioni_III','$Opsioni_IV','$Zgjidhja')");
		//display success messOpsioni I
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