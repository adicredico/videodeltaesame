<?php

include_once ("connessione_db.php");

$nome = $_REQUEST["name"];
$cognome = $_REQUEST["surname"];
$email = $_REQUEST["email"];
$telefono = $_REQUEST["tel"];

$query = "INSERT INTO richieste_provino(nome,cognome,email,telefono) VALUES ('$nome','$cognome','$email','$telefono')";

$risultato = $connessione->query($query);

if (!$risultato) {
	echo "Non è stato possibile registrare la tua richiesta.";
}

header('Location: grazie.php');
exit;

?>