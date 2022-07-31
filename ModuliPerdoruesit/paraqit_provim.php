<html>
<head>
	<title>Moduli Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
</head>
<body>
<?php
//including the database lidhuection file
include_once("konfiguro.php");

if(isset($_POST['paraqit_provim'])) {	
	$ID_Prov = $_POST['ID_Prov'];
	$Emri_Paraqitesi = $_POST['Emri_Paraqitesi'];
	$Mbiemri_Paraqitesi = $_POST['Mbiemri_Paraqitesi'];
	$Viti_Studimit_Paraqitesi = $_POST['Viti_Studimit_Paraqitesi'];
	$Email_Paraqitesi = $_POST['Email_Paraqitesi'];
	// checking empty fields
	if( empty($Emri_Paraqitesi) || empty($Mbiemri_Paraqitesi) || empty($Viti_Studimit_Paraqitesi) || empty($Email_Paraqitesi)) {			
		
		if(empty($Emri_Paraqitesi)) {echo "<font color='red'>Fusha emri eshte e zbrazet.</font><br/>";}
		if(empty($Mbiemrii_Paraqitesi)) {echo "<font color='red'>Fusha mbiemri eshte e zbrazet.</font><br/>";}
		if(empty($Viti_Studimit_Paraqitesi)) {echo "<font color='red'>Fusha viti studimit eshte e zbrazet.</font><br/>";}
		if(empty($Email_Paraqitesi)) {echo "<font color='red'>Fusha email eshte e zbrazet.</font><br/>";}
		//link to the previous Emri_Paraqitesi
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO ump_paraqitjet_provimeve (ID_Prov,Emri_Paraqitesi,Mbiemri_Paraqitesi,Viti_Studimit_Paraqitesi,Email_Paraqitesi) VALUES('$ID_Prov','$Emri_Paraqitesi','$Mbiemri_Paraqitesi','$Viti_Studimit_Paraqitesi','$Email_Paraqitesi')");
		//display success messEmri_Paraqitesi
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='contact.php'>View Result</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne uebaplikacion. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
