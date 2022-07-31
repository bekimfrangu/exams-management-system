<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

<?php
include('../konfiguro.php');
session_start();
$kontrollo_perdorues=$_SESSION['Emri_Perdoruesi'];
$starto_deklarate = mysqli_query($lidhu,"SELECT ID_Perdoruesi, Emri_Perdoruesi FROM ump_perdoruesit WHERE Emri_Perdoruesi='$kontrollo_perdorues' ");
$rreshti=mysqli_fetch_array($starto_deklarate,MYSQLI_ASSOC);
$kycu_perdorues=$rreshti['Emri_Perdoruesi'];
if(!isset($kontrollo_perdorues))
{ header("Location: index.php");} 

	
    $_SESSION["Antari_Id"] =  $rreshti['ID_Perdoruesi'];
    
	require("kontrollo_databaze.php");
	$kontrollodatabaze = new KONTROLLO_DATABAZE();
	
	$pyet = "SELECT DISTINCT Pyetja_Id from ump_votimet WHERE Antari_Id = " . $_SESSION["Antari_Id"]; 
	$rezultati = $kontrollodatabaze->getIds($pyet);
	
	$kushti = "";
	if(!empty($rezultati)) {
	    $kushti = " WHERE Id NOT IN (" . implode(",", $rezultati) . ")";
    }
    
    $pyet = "SELECT * FROM `ump_pyetjet_votim` " . $kushti . " limit 1";
    $Pyetjet = $kontrollodatabaze->runQuery($pyet);
    
    if(!empty($Pyetjet)) {
?>      
		<div class="question"><?php echo $Pyetjet[0]["Pyetja"]; ?><input type="hidden" name="Pyetja" id="Pyetja" value="<?php echo $Pyetjet[0]["Id"]; ?>" ></div>      
<?php 
        $pyet = "SELECT * FROM ump_pergjigjet_votim WHERE Pyetja_Id = " . $Pyetjet[0]["Id"];
        $Pergjigjejet = $kontrollodatabaze->runQuery($pyet);
        if(!empty($Pergjigjejet)) {
            foreach($Pergjigjejet as $k=>$v) {
                ?>
			<div class="question"><input type="radio" name="Pergjigjeja" class="radio-input" value="<?php echo $Pergjigjejet[$k]["Id"]; ?>" /><?php echo $Pergjigjejet[$k]["Pergjigjeja"]; ?></div>      
<?php 
            }
        }
?>
		<div class="poll-bottom">
			<button id="btnSubmit" onClick="shtoVotim()">Dergo</button>
		</div>
<?php        
    } else {
?>

<div class="error">Votimi perfundoi me sukses!</div>


<?php 
    }
?>