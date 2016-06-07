<?php 
include('core/init.php'); 
?>

<?php

// tietokanta olio.
$db = new database;

// Query
$db->query("DELETE FROM 'viestit' WHERE id = :id");

$db->bind(':id', $_POST['id']);

if($db->execute()) {
    echo "Viesti poistettu";
} else {
    echo "Virhe poistaessa viestiä";
}
?>