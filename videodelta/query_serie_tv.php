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
					
		echo "<div class='col-lg-3 col-sm-6 col-xs-12'>";
		echo "<article><img class='img-thumbnail locandina' src='images/prodotti/serie_tv/$immagine'>";
		echo "<h4>$nome</h4>";
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