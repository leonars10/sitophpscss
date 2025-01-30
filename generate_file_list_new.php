<?php

function scanDirectory($dir) {
    $result = [];
    $files = scandir($dir);
    
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }
        
        $filePath = $dir . DIRECTORY_SEPARATOR . $file;
        
        if (is_dir($filePath)) {
            $result[] = [
                'type' => 'directory',
                'name' => $file,
                'path' => realpath($filePath),
                'contents' => scanDirectory($filePath) // Recursive call
            ];
        } else {
            $result[] = [
                'type' => 'file',
                'name' => $file,
                'path' => realpath($filePath),
                'size' => filesize($filePath)
            ];
        }
    }
    
    return $result;
}

$directory = __DIR__; // Cartella principale (dove si trova lo script)
$data = scanDirectory($directory);
$json = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents('file_structure.json', $json);

echo "File JSON generato con successo: file_structure.json";
?>
