<?php
//including the database connection file
include("konfiguro.php");

//getting uid of the data from url
$ID_Paraqitja = $_GET['ID_Paraqitja'];

//deleting the row from table
$rezultati = mysqli_query($lidhu,"DELETE FROM ump_paraqitjet_provimeve WHERE ID_Paraqitja=$ID_Paraqitja");

//redirecting to the display page (index.php in our case)
header("Location:fshije_paraqitjetprovimeve_forma.php");
?>

