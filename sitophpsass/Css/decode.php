<?php
$json_file = "file_list.json"; // Nome del file JSON

// Verifica se il file JSON esiste
if (!file_exists($json_file)) {
    die("❌ Errore: Il file JSON non esiste.");
}

// Legge il contenuto del file JSON
$json_data = file_get_contents($json_file);

// Decodifica il JSON
$file_list = json_decode($json_data, true);

// Verifica se il JSON è stato decodificato correttamente
if ($file_list === null) {
    die("❌ Errore nella decodifica del JSON: " . json_last_error_msg());
}

// Stampa i file in una lista HTML
echo "<h2>📂 Contenuto della cartella 'sitophpsass'</h2>";
echo "<ul>";
foreach ($file_list as $file) {
    echo "<li>";
    if ($file['type'] === 'directory') {
        echo "📁 <strong>" . htmlspecialchars($file['name']) . "</strong> (Cartella)";
    } else {
        echo "📄 <a href='" . htmlspecialchars($file['path']) . "' target='_blank'>" . htmlspecialchars($file['name']) . "</a> (File - " . $file['size'] . " bytes)";
    }
    echo "</li>";
}
echo "</ul>";
?>
