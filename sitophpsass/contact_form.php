<?php
$file_path= __DIR__ . "/messaggi_contatti.txt";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim(htmlspecialchars($_POST["nome"]));
    $email = trim(htmlspecialchars($_POST["email"]));
    $messaggio = trim(htmlspecialchars($_POST["messaggio"]));

    if (!empty($nome) && !empty($email) && !empty($messaggio)) {
        
        $contenuto = "Nome: $nome\nEmail: $email\nMessaggio: $messaggio\n--------------------\n";

       
        if (file_put_contents($file_path, $contenuto, FILE_APPEND)) {
            header("Location: index.php?success=true");
            exit();
        } else {
            header("Location: index.php?error=file");
            exit();
        }
    } else {
        header("Location: index.php?error=empty");
        exit();
    }
}
?>