<?php

include("konfiguro.php");

$ID_Perdoruesi = $_GET['ID_Perdoruesi'];

$rezultati = mysqli_query($lidhu,"DELETE FROM ump_perdoruesit WHERE ID_Perdoruesi=$ID_Perdoruesi");

header("Location: fshije_perdorues_forma.php");
?>
