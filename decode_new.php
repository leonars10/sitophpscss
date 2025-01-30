<?php
// Percorso del file JSON
//$file_path = 'generate_file_list.php';
$file_path= __DIR__ . "/file_structure.json";

// Controlla se il file esiste
if (file_exists($file_path)) {
    // Leggi il contenuto del file
    $json_data = file_get_contents($file_path);

    // Decodifica il JSON in un array PHP
    $data = json_decode($json_data, true);

    // Controlla se la decodifica è andata a buon fine
    if ($data === null) {
        echo "Errore nella decodifica del JSON.";
    } else {
        // Stampiamo il JSON decodificato in formato leggibile
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
} else {
    echo "File JSON non trovato.";
}
?>
