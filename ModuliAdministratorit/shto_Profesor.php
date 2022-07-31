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

if(isset($_POST['shto_Profesor'])) {	
	$Emri_Prof = $_POST['Emri_Prof'];
	$Mbiemri_Prof = $_POST['Mbiemri_Prof'];
	$Datelindja_Prof = $_POST['Datelindja_Prof'];
	$Adresa_Prof = $_POST['Adresa_Prof'];
	$Profili_Prof = $_POST['Profili_Prof'];
	$Niveli_Prof = $_POST['Niveli_Prof'];
		
	// checking empty fields
	if(empty($Emri_Prof) || empty($Mbiemri_Prof) || empty($Datelindja_Prof) || empty($Adresa_Prof) || empty($Profili_Prof) || empty($Niveli_Prof))
	{			
		if(empty($Emri_Prof)) {echo "<font color='red'>Fusha Emri  eshte e zbrazet.</font><br/>";}
		if(empty($Mbiemri_Prof)) {echo "<font color='red'>Fusha Mbiemri eshte e zbrazet.</font><br/>";}
		if(empty($Datelindja_Prof)) {echo "<font color='red'>Fusha Datelindja_Prof eshte e zbrazet.</font><br/>";}
		if(empty($Adresa_Prof)) {echo "<font color='red'>Fusha Adresa eshte e zbrazet.</font><br/>";}
		if(empty($Profili_Prof)) {echo "<font color='red'>Fusha Profili eshte e zbrazet.</font><br/>";}
		if(empty($Niveli_Prof)) {echo "<font color='red'>Fusha Niveli eshte e zbrazet.</font><br/>";}
		//link to the previous Mbiemri_Prof
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO ump_profesoret (Emri_Prof,Mbiemri_Prof,Datelindja_Prof, Adresa_Prof, Profili_Prof, Niveli_Prof) VALUES('$Emri_Prof','$Mbiemri_Prof','$Datelindja_Prof','$Adresa_Prof','$Profili_Prof','$Niveli_Prof')");
		//display success messMbiemri_Prof
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