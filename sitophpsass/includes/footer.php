<?php
function renderFooter($current_year, $site_name) {
    $footer_links = [
        "Cookie policy" => "#",
        "Privacy" => "#",
        "Contattaci" => "?page=contatti"
    ];
    ?>
    <!-- Contatti footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <a href="?page=home"><img src="Logo_Sito.png" alt="Logo del sito"></a>
            </div>
            <div class="footer-contacts">
                <ul>
                    <li><strong>Email:</strong> leonardocipollini108@gmail.com</li>
                    <li><strong>Telefono:</strong> +39 3312936507</li>
                    <li><strong>P.IVA:</strong> FR 10 123456789</li>
                </ul>
            </div>
            <div class="footer-links">
                <ul>
                    <?php foreach ($footer_links as $label => $link): ?>
                        <li><a href="<?= htmlspecialchars($link); ?>"><?= htmlspecialchars($label); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="footer-copyright">
                <p>© <?= htmlspecialchars($current_year); ?> <?= htmlspecialchars($site_name); ?>. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>
    </body>
    </html>
    <?php
}
?>
