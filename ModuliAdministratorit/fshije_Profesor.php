<?php
//including the database connection file
include("konfiguro.php");

//getting uid of the data from url
$ID_Profesori = $_GET['ID_Profesori'];

//deleting the row from table
$rezultati = mysqli_query($lidhu,"DELETE FROM ump_profesoret WHERE ID_Profesori=$ID_Profesori");

//redirecting to the display page (index.php in our case)
header("Location:fshije_profesor_forma.php");
?>

