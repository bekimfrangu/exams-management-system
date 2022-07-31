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

if(isset($_POST['shto_Lende'])) {	
	$Emri_Lenda = $_POST['Emri_Lenda'];	
	$ID_Profesori = $_POST['ID_Profesori'];	
	$Pershkrimi_Lenda = $_POST['Pershkrimi_Lenda'];	
	
		
	
			$FotoData = addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
			$Emri_Foto = $_FILES['userfile']['name'];
	
			$maxsize = 10000000; // 10 mb
	// checking empty fields
	if(empty($Emri_Lenda) || empty($Pershkrimi_Lenda))
	{			
		if(empty($Emri_Lenda)) {
			echo "<font color='red'>Fusha Lenda eshte e zbrazet.</font><br/>";
			}
		if(empty($Pershkrimi_Lenda)) {
			echo "<font color='red'>Fusha pershkrimi eshte e zbrazet.</font><br/>";
			}
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO ump_lendet (Emri_Lenda, ID_Profesori, Pershkrimi_Lenda, Foto_Lenda, Emri_Foto ) VALUES('$Emri_Lenda','$ID_Profesori','$Pershkrimi_Lenda','$FotoData','$Emri_Foto')");
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina_Administrator.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne uebaplikacion. Ju lutem pritni 5 sekonda. <b></p>";
	
		
	}
}
?>
</body>
</html>

