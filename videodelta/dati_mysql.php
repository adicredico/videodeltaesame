<?php

	$query_serie_tv="SELECT * FROM serie_tv";
				
	if (!($risultato = $connessione->query($query_serie_tv)))
		die("Query su Serie TV fallita!");
	$i=1;
	while ($riga = $risultato->fetch_array()) {
		$id = $riga["id"];
		$immagine = $riga["immagine"];
		$nome = $riga["nome"];
				
		if ($i==1) {
			echo "<div class='row'>";
		}
					
		echo "<div class='col-md-3'>";
		echo "<article><img class='img-thumbnail locandina' src='images/serie_tv/$immagine'>";
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