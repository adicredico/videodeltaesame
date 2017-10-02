<?php

	$query_soap_opera_e_telenovele="SELECT * FROM soap_opera_e_telenovele";
				
	if (!($risultato = $connessione->query($query_soap_opera_e_telenovele)))
		die("Query su Soap opera e telenovele fallita!");
	$i=1;
	while ($riga = $risultato->fetch_array()) {
		$id = $riga["id"];
		$immagine = $riga["immagine"];
		$nome = $riga["nome"];
				
		if ($i==1) {
			echo "<div class='row'>";
		}
					
		echo "<div class='col-lg-3 col-sm-6 col-xs-12'>";
		echo "<article><img class='img-thumbnail locandina' src='images/prodotti/soap_opera_e_telenovele/$immagine'>";
		echo "<h5>$nome</h5>";
		echo "</article>";
		echo "</div>";
					
		if ($i==4) {
			echo "</div>";
			$i=1;
		} 	else {
				$i++;
		}

	}
	if ($i!=1) {
		echo "</div>";
	}
	
?>