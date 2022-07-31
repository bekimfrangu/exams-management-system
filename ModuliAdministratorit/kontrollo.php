<?php
/* Kontrollon sesionin */
include('konfiguro.php');
session_start();
$kontrollo_perdorues=$_SESSION['Emri_Perdoruesi'];
$starto_deklarate = mysqli_query($lidhu,"SELECT Emri_Perdoruesi FROM ump_perdoruesit WHERE Emri_Perdoruesi='$kontrollo_perdorues' ");
$rreshti=mysqli_fetch_array($starto_deklarate,MYSQLI_ASSOC);
$kycu_perdorues=$rreshti['Emri_Perdoruesi'];
if(!isset($kontrollo_perdorues))
{ header("Location: index.php");} 
?>