<?php

include_once ("connessione_db.php");

$nome = $_REQUEST["name"];
$cognome = $_REQUEST["surname"];
$privato_azienda = $_REQUEST["optradio"];
$tipo_societa = $_REQUEST["tipo_societa"];
$lingua_originale = $_REQUEST["lingua_originale"];
$email = $_REQUEST["email"];
$telefono = $_REQUEST["tel"];

$query = "INSERT INTO richieste_preventivo(nome,cognome,privato_azienda,tipo_societa,lingua_originale,email,telefono) VALUES ('$nome','$cognome','$privato_azienda','$tipo_societa','$lingua_originale','$email','$telefono')";

$risultato = $connessione->query($query);

if (!$risultato) {
	echo "Non è stato possibile registrare la tua richiesta.";
}

header('Location: grazie.php');
exit;

?>