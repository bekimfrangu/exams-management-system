<?php
$Hosti_Databaze ="localhost";
$Perdoruesi_Databaze = "root";
$Fjalekalimi_Databaze = "";
$Emri_Databaze ="umptest";
//connect to database
$lidhu = @mysqli_connect($Hosti_Databaze, $Perdoruesi_Databaze, $Fjalekalimi_Databaze, $Emri_Databaze) or die("Gabim ne lidhje.");
//get the data from table Data_ahome
$pyetja = "SELECT Informacioni FROM ump_info_administrator";
//execute the pyetja
$rezultati = mysqli_query($lidhu, $pyetja);
if(!$rezultati){ echo "Gabim ne ekzekutim "; die();}
else{
 //creates an empty array to hold informatcion
 $informatcion = array();
  while($row = mysqli_fetch_assoc($rezultati)){
    $informatcion[]=$row;
  }
//  echo json_encode($data, JSON_PRETTY_PRINT);
//it will create file results.json with writing mode.
//you can read more about file handling in PHP here. 
$dosja = fopen('Teksti_Administrator.json', 'w');
//json_enconde($array, $options(optional) is the method to convert array into JSON
fwrite($dosja, json_encode($informatcion, JSON_PRETTY_PRINT));
echo "Dosja eshte krijuar";
//close the file
fclose($dosja);
}
?>