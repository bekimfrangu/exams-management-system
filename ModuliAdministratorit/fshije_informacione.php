<?php
//including the database connection file
include("konfiguro.php");

//getting uid of the data from url
$ID_Info = $_GET['ID_Info'];

//deleting the row from table
$rezultati = mysqli_query($lidhu,"DELETE FROM ump_informacionet WHERE ID_Info=$ID_Info");

//redirecting to the display page (index.php in our case)
header("Location:fshije_informacione_forma.php");
?>


