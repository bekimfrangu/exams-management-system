<?php
    session_start();
    require("kontrollo_databaze.php");
	$kontrollodatabaze = new KONTROLLO_DATABAZE();
	
	$Pergjigjeja_Id  = $_POST['Pergjigjeja'];
	$Pyetja_Id = $_POST['Pyetja'];
	
	$pyet = "INSERT INTO ump_votimet (Pyetja_Id,Pergjigjeja_Id,Antari_Id) VALUES ('" . $Pyetja_Id ."','" . $Pergjigjeja_Id . "','" . $_SESSION["Antari_Id"] . "')";
    $insert_id = $kontrollodatabaze->insertQuery($pyet);
    
    if(!empty($insert_id)) {
        $pyet = "SELECT * FROM ump_pergjigjet_votim WHERE Pyetja_Id = " . $Pyetja_Id;
        $Pergjigjeja = $kontrollodatabaze->runQuery($pyet);
    }
    
    if(!empty($Pergjigjeja)) {
?>        
        <div class="poll-heading"> Rezultati </div> 
<?php
        $pyet = "SELECT count(Pergjigjeja_Id) as total_count FROM ump_votimet WHERE Pyetja_Id = " . $Pyetja_Id;
        $vleresimi_total = $kontrollodatabaze->runQuery($pyet);

        foreach($Pergjigjeja as $k=>$v) {
            $pyet = "SELECT count(Pergjigjeja_Id) as Pergjigjeja_count FROM ump_votimet WHERE Pyetja_Id = " .$Pyetja_Id . " AND Pergjigjeja_Id = " . $Pergjigjeja[$k]["Id"];
            $Pergjigjeja_vleresim = $kontrollodatabaze->runQuery($pyet);
            $Pergjigjejet_numerim = 0;
            if(!empty($Pergjigjeja_vleresim)) {
                $Pergjigjejet_numerim = $Pergjigjeja_vleresim[0]["Pergjigjeja_count"];
            }
            $perqindja = 0;
            if(!empty($vleresimi_total)) {
                $perqindja = ( $Pergjigjejet_numerim / $vleresimi_total[0]["total_count"] ) * 100;
                if(is_float($perqindja)) {
                    $perqindja = number_format($perqindja,2);
                }
            }
            
?>
		<div class="answer-rating"> <span class="answer-text"><?php echo $Pergjigjeja[$k]["Pergjigjeja"]; ?></span><span class="answer-count"> <?php echo $perqindja . "%"; ?></span></div>      
<?php 
        }
    }
?>
<div class="poll-bottom">
	<button class="next-link" onClick="shfaq_votim();">Vazhdo</button>
</div>