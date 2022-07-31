<?php
//including the database connection file
include("konfiguro.php");

//getting uid of the data from url
$ID_Prov = $_GET['ID_Prov'];

//deleting the row from table
$rezultati = mysqli_query($lidhu,"DELETE FROM ump_provimet WHERE ID_Prov=$ID_Prov");

//redirecting to the display page (index.php in our case)
header("Location: fshije_provim_forma.php");
?>

