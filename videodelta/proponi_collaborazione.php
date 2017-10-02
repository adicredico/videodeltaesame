<?php

include_once ("connessione_db.php");

$nome = $_REQUEST["name"];
$cognome = $_REQUEST["surname"];
$email = $_REQUEST["email"];
$telefono = $_REQUEST["tel"];
$commento = $_REQUEST["comment"];

$query = "INSERT INTO proposte_collaborazione(nome,cognome,email,telefono,commento) VALUES ('$nome','$cognome','$email','$telefono','$commento')";

$risultato = $connessione->query($query);

if (!$risultato) {
	echo "Non è stato possibile registrare la tua richiesta.";
}

header('Location: grazie.php');
exit;

?>