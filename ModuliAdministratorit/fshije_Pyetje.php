<?php
//including the database connection file
include("konfiguro.php");

//getting uid of the data from url
$ID_Pyetja = $_GET['ID_Pyetja'];

//deleting the row from table
$rezultati = mysqli_query($lidhu,"DELETE FROM ump_pyetjet WHERE ID_Pyetja=$ID_Pyetja");

//redirecting to the display page (index.php in our case)
header("Location:fshije_pyetje_forma.php");
?>

