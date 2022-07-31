<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese Emri_Perdoruesi dhe Fjalekalimi_Perdoruesii qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
	session_start();
	include("konfiguro.php"); //Establishing lidhuection with our database
	
	$gabim = ""; //Variable for storing our gabims.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["Emri_Perdoruesi"]) || empty($_POST["Fjalekalimi_Perdoruesi"]))
		{
			$gabim = "Të dy fushat kërkohen të plotësohen";
		}else
		{
			// Define $Emri_Perdoruesi and $Fjalekalimi_Perdoruesi
			$Emri_Perdoruesi=$_POST['Emri_Perdoruesi'];
			$Fjalekalimi_Perdoruesi=$_POST['Fjalekalimi_Perdoruesi'];
			//Check Emri_Perdoruesi and Fjalekalimi_Perdoruesi from database
			$deklarate="SELECT ID_Perdoruesi FROM ump_perdoruesit WHERE Emri_Perdoruesi='$Emri_Perdoruesi' 
			and Fjalekalimi_Perdoruesi='$Fjalekalimi_Perdoruesi'";
			$rezultati=mysqli_query($lidhu,$deklarate);
			$rreshti=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			//If Emri_Perdoruesi and Fjalekalimi_Perdoruesi exist in our database then create a session.
			//Otherwise echo gabim.
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['Emri_Perdoruesi'] = $Emri_Perdoruesi; // Initializing Session
				header("location: faqja_Administruese.php"); // Redirecting To Other Page
			}else
			{
				$gabim = "Përdoruesi ose Fjalëkalimi gabim";
			}
		}
	}
?>