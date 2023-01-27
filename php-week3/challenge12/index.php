<?php
// Stap 1: Haal de JSON-data op vanuit een bestand of een API-endpoint
$json_data = file_get_contents('data.json');

// Stap 2: Gebruik de json_decode functie om de JSON-data te parsen
$data = json_decode($json_data, true);

// Stap 3: Toegang tot de data in het JSON-object en geef het weer
echo "Naam: " . $data['name'] . "<br>";
echo "Leeftijd: " . $data['age'] . "<br>";
echo "Stad: " . $data['address']['city'] . "<br>";
?>