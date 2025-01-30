<?php
include 'includes/config.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'contact_form.php';

includeCSS($contatti_css);

renderHeader($site_name, $menu_items);

// contatti principali
function renderContatti() {
    ?>
    <section class="sfondo">
        <div class="sfondo-content">
            <h2>Contatti</h2>
        </div>
    </section>

    <div class="contact-section">
        <ul class="contact-list">
            <li>Email: leonardocipollini108@gmail.com</li>
            <li>Instagram: @varsnoise</li>
            <li>Behance: Leonardo Cipollini</li>
        </ul>
    </div>

    <section class="contact-form">
        <h2>Contattami</h2>
        <form action="index.php" method="post">
            <div class="form-row">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="Nome" required>
            </div>
            <div class="form-row">
                <label for="email">Email:</label>
                <input type="email" id="email" name="Email" required>
            </div>
            <div class="form-row">
                <label for="message">Messaggio:</label>
                <textarea id="message" name="Messaggio" rows="5" required></textarea>
            </div>
            <button type="submit">Invia</button>
        </form>
    </section>
    <?php
}

$file_path = $_SERVER['DOCUMENT_ROOT'] . "/messaggi_contatti.txt";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $messaggio = htmlspecialchars($_POST["messaggio"]);
  
    $contenuto = "Nome: $nome\nEmail: $email\nMessaggio: $messaggio\n--------------------\n";

    file_put_contents($file_path, $contenuto, FILE_APPEND);

    header("Location: contatti.php?success=true");
    exit();
}
?>

<?php
renderContatti();


renderFooter($current_year, $site_name);
?>

