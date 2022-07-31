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

		if(isset($_POST['shto_informacione'])) {	
			$Shenimi = $_POST['Shenimi'];
			$Shpjegimi = $_POST['Shpjegimi'];
			

			$Pjesa_Faqes = $_POST['Pjesa_Faqes'];
	

	
	
			// checking empty fields
			if(empty($Shenimi) || empty($Shpjegimi) || empty($Pjesa_Faqes)) {
						
				if(empty($Shenimi)) {
					echo "<font color='red'>Fusha shenimi eshte e zbrazet.</font><br/>";
				}
				
				if(empty($Shpjegimi)) {
					echo "<font color='red'>Fusha shpjegimi eshte e zbrazet.</font><br/>";
				}
					
				if(empty($Pjesa_Faqes)) {
					echo "<font color='red'>Fusha pjesa e faqes eshte e zbrazet.</font><br/>";
				}
				
				//link to the previous pMbiShenimi
				echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
			} else { 
				// if all the fields are filled (not empty) 
					
				//insert data to database	
				$rezultati = mysqli_query($lidhu, "INSERT INTO ump_informacionet (Shenimi,Shpjegimi, Pjesa_Faqes) VALUES('$Shenimi', '$Shpjegimi', '$Pjesa_Faqes')");
						//display success message
					echo "<script>
				 setTimeout(function(){
					window.location.href = 'ballina_Administrator.php';
				 }, 5000);
			  </script>";
				 echo"<p><b>   E dhena eshte duke u regjistruar ne uebaplikacion. Ju lutem pritni 5 sekonda. <b></p>";
				 
				//echo "<font color='green'>Data added successfully.";
				//echo "<br/><a href='ballina.php'>View Result</a>";
			}
		}
?>

</body>
</html>