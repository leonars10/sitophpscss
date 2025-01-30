<?php
include 'includes/config.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'contact_form.php';

includeCSS($index_css); 

renderHeader($site_name, $menu_items);
?>

<body>
<section class="basesfondo">
<div class="sfondo">
    <img src="Css/Sfondo/Grafica_Sito.png" alt="Grafica-sito">
</div>
</section>

<!-- Servizi -->
<?php
$services = [
    [
        "title" => "Brand Design",
        "description" => "Trasformo idee in identità visive che comunicano valori, personalità e unicità. Dallo sviluppo del logo alla definizione del tono visivo, mi assicuro che ogni progetto di branding racconti una storia distintiva."
    ],
    [
        "title" => "Motion Design",
        "description" => "Creo animazioni dinamiche che danno vita a idee complesse, rendendo la comunicazione visiva più coinvolgente ed efficace. Dai video promozionali alle infografiche animate, offro soluzioni innovative per catturare l’attenzione del pubblico."
    ],
    [
        "title" => "Layout Design",
        "description" => "Realizzo layout accattivanti per materiali pubblicitari, presentazioni aziendali e contenuti digitali. Ogni progetto è studiato per combinare estetica e funzionalità, adattandosi alle esigenze specifiche del cliente."
    ],
    [
        "title" => "Web",
        "description" => "Con una visione d’insieme e competenze organizzative, posso gestire ogni fase di un progetto creativo: dalla pianificazione all’esecuzione, fino alla consegna finale, garantendo qualità e puntualità."
    ]
];
?>


<section class="services">
    <div class="container">
        <h2>I MIEI SERVIZI</h2>
        <?php foreach ($services as $service): ?>
            <div class="service-item">
                <h3><?= htmlspecialchars($service['title']); ?></h3>
                <p><?= htmlspecialchars($service['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<!-- Form -->
<?php
$file_path = $_SERVER['DOCUMENT_ROOT'] . "/messaggi_contatti.txt";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $messaggio = htmlspecialchars($_POST["messaggio"]);
  
    $contenuto = "Nome: $nome\nEmail: $email\nMessaggio: $messaggio\n--------------------\n";

    file_put_contents($file_path, $contenuto, FILE_APPEND);

    header("Location: index.php?success=true");
    exit();
}
?>

<section class="contact-form">
    <h2>Contattami</h2>
    <form action="contact_form.php" method="post">
        <div class="form-row">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="form-row">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-row">
            <label for="messaggio">Messaggio:</label>
            <textarea id="messaggio" name="messaggio" rows="5" required></textarea>
        </div>
        <button type="submit">Invia</button>
    </form>
</body>

<?php
renderFooter($current_year, $site_name);
?>
