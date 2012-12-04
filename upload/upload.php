<?php

$dimensione_massima=51200000; //dimensione massima consentita per file in byte -> 1024 byte = 1 Kb
$dimensione_massima_Kb=$dimensione_massima/1024;
//$cartella_upload="../files/"; //cartella in cui eseguire l'upload (controllare permessi scrittura)
// percorso cartella relativo su win
$cartella_upload="/var/www/walks/isa/upload/musica/";
$filtrare=1; //filtrare x estensioni ammesse? 1=si 0=no
$array_estensioni_ammesse=array('.mp3'); //estensioni ammesse

if(!isset($_FILES['file1']) || $_FILES['file1']['size']==0){
	echo "Nessun file selezionato per l'upload";
}elseif($_FILES['file1']['size']>$dimensione_massima){
	echo "Il file selezionato per l'upload supera dimensione massima di $dimensione_massima_Kb Kb";
}else{
	$nome_file=$_FILES['file1']['name'];
		$errore="";
 if($filtrare==1){
 	$estensione = strtolower(substr($nome_file, strrpos($nome_file, "."), strlen($nome_file)-strrpos($nome_file, ".")));
 		if(!in_array($estensione,$array_estensioni_ammesse)){
 			$errore.="Upload file non ammesso. Estensioni ammesse: ".implode(", ",$array_estensioni_ammesse)."<br/>";
 			}
 	}
	if(!file_exists($cartella_upload)){
			$errore.="La cartella di destinazione non esiste</br>";
		}
	if($errore==""){
			if(move_uploaded_file($_FILES['file1']['tmp_name'], $cartella_upload.$_FILES['file1']['name'])){
		  	chmod($cartella_upload.$_FILES['file1']['name'],0777); //permessi per poterci scrivere
				echo "Operazione eseguita con successo. Upload riuscito.";
					}else{
						echo "Impossibile effettuare l'upload del file";
						}
		}else{
			echo $errore;
			}
}
?>
