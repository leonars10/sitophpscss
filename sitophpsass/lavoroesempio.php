<?php
include 'includes/config.php';
include 'includes/header.php';
include 'includes/footer.php';

includeCSS($lavoroesempio_css);

renderHeader($site_name, $menu_items);
?>

<!-- Sfondo -->
    
<section class="sfondo">
    <div class="sfondo-content">
        <h2>Motion Graphics per Cinecittà</h2>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="service-item">
            <div class="service-title">
                <h3>Sviluppo</h3>
            </div>
            <div class="service-description">
                <p>I video promozionali che si trovano di seguito, hanno l'obiettivo di esplicare nel migliore dei modi 
                    le esposizioni della mostra di Cinecittà, sottolineando l’immaginario cinematografico riguardante i 
                    ruoli, i luoghi e la storia di essa.</p>
            </div>
        </div>
    </div>
</section>

<section class="image-gallery">
    <?php 
    $images = [
        ["src" => "Immagini_Lavoro/1Cine.png", "title" => "Cinecittà", "alt" => "Immagine 1"],
        ["src" => "Immagini_Lavoro/2Cine.png", "title" => "Cinecittà", "alt" => "Immagine 2"]
    ];

    foreach ($images as $image): ?>
        <div class="gallery-item">
            <img 
                src="<?= htmlspecialchars($image['src']); ?>" 
                title="<?= htmlspecialchars($image['title']); ?>" 
                alt="<?= htmlspecialchars($image['alt']); ?>">
            <div class="project-name"><?= htmlspecialchars($image['title']); ?></div>
        </div>
    <?php endforeach; ?>
</section>

<?php

renderFooter($current_year, $site_name);
?>
