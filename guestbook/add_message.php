<?php
include ('core/init.php');
?>

<?php

// tietokanta olio.
$db = new database;

// Query 
$db->query("INSERT INTO 'viestit' (nimi, viesti) VALUES (:nimi, :viesti)");

// Kiinnitys
$db->bind(':nimi', $_POST['nimi']);
$db->bind(':viesti', $_POST['viesti']);

if($db->execute()) {
    echo "Viesti lisätty";
} else {
    echo "Virhe viestin lisäyksessä";
}
?>