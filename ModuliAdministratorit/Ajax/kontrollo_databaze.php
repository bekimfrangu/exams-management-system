<?php
class KONTROLLO_DATABAZE {
	private $Hosti_Databaze = "localhost";
	private $Perdoruesi_Databaze = "root";
	private $Fjalekalimi_Databaze = "";
	private $Emri_Databaze = "ump";
	private $lidhu;
	
	function __construct() {
		$this->lidhu = $this->connectDB();
	}
	
	function connectDB() {
		$lidhu = mysqli_connect($this->Hosti_Databaze,$this->Perdoruesi_Databaze,$this->Fjalekalimi_Databaze,$this->Emri_Databaze);
		return $lidhu;
	}
	
	function runQuery($pyet) {
		$rezultati = mysqli_query($this->lidhu,$pyet);
		while($rreshti=mysqli_fetch_array($rezultati)) {
			$rezultati_vendosur[] = $rreshti;
		}
		if(!empty($rezultati_vendosur))
			return $rezultati_vendosur;
	}
	
	function insertQuery($pyet) {
	    mysqli_query($this->lidhu, $pyet);
	    $insert_id = mysqli_insert_id($this->lidhu);
	    return $insert_id;
	}
	
	function getIds($pyet) {
	    $rezultati = mysqli_query($this->lidhu,$pyet);
	    while($rreshti=mysqli_fetch_array($rezultati)) {
	        $rezultati_vendosur[] = $rreshti[0];
	    }
	    if(!empty($rezultati_vendosur))
	        return $rezultati_vendosur;
	}
}
?>