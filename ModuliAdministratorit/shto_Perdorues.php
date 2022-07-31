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
//including the database lidhuection file
include_once("konfiguro.php");

if(isset($_POST['shto_Perdorues'])) {	
	$Emri_Perdoruesi = $_POST['Emri_Perdoruesi'];
	$Fjalekalimi_Perdoruesi = $_POST['Fjalekalimi_Perdoruesi'];
	$Adresa_Perdoruesi = $_POST['Adresa_Perdoruesi'];
	$Email_Perdoruesi = $_POST['Email_Perdoruesi'];
		
	// checking empty fields
	if(empty($Emri_Perdoruesi) || empty($Fjalekalimi_Perdoruesi)|| empty($Adresa_Perdoruesi) || empty($Email_Perdoruesi)) {			
		if(empty($Emri_Perdoruesi)) {echo "<font color='red'>Fusha perdoruesi eshte e zbrazet.</font><br/>";}
		if(empty($Fjalekalimi_Perdoruesi)) {echo "<font color='red'>Fusha fjalekalimi eshte e zbrazet.</font><br/>";}
		if(empty($Adresa_Perdoruesi)) {echo "<font color='red'>Fusha Adresa_Perdoruesi eshte e zbrazet.</font><br/>";}
		if(empty($Email_Perdoruesi)) {echo "<font color='red'>Fusha Email_Perdoruesi eshte e zbrazet.</font><br/>";}
		//link to the previous Fjalekalimi_Perdoruesi
		
	echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO ump_perdoruesit (Emri_Perdoruesi,Fjalekalimi_Perdoruesi,Adresa_Perdoruesi,Email_Perdoruesi) VALUES('$Emri_Perdoruesi','$Fjalekalimi_Perdoruesi','$Adresa_Perdoruesi','$Email_Perdoruesi')");
		//display success messFjalekalimi_Perdoruesi
	echo "<script>
         setTimeout(function(){
            window.location.href = 'perdoruesit.php';
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