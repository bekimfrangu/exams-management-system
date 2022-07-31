<?php 

include("konfiguro.php");

$ID_Lenda = $_GET['ID_Lenda'];

$rezultati = mysqli_query($lidhu,"DELETE FROM ump_lendet WHERE ID_Lenda=$ID_Lenda");

header("Location: fshije_lende_forma.php");
?>
