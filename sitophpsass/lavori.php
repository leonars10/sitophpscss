<?php
include 'includes/config.php';
include 'includes/header.php';
include 'includes/footer.php';

includeCSS($lavori_css);

renderHeader($site_name, $menu_items);
?>

<!-- Sfondo -->
<section class="sfondo">
    <div class="sfondo-content">
        <h2>Lavori</h2>
    </div>
</section>

<section class="video-section">
    <div class="video-container">
        <video controls autoplay>
            <source src="Video/Michael_Jordan.mp4" title="Michael Jordan" type="video/mp4">
        </video>
    </div>
</section>

<!-- Progetti -->
<div class="projects-container">
    <?php
    $projects = [
        [
            'link' => 'lavoroesempio.php',
            'title' => 'Bagnolo',
            'image' => 'Img/1Lavoro.png',
            'alt' => 'Immagine 1',
            'name' => 'Social Content ristorante Bagnolo',
        ],
        [
            'link' => 'lavoroesempio.php',
            'title' => 'Cinecittà',
            'image' => 'Img/2Lavoro.png',
            'alt' => 'Immagine 2',
            'name' => 'Motion Graphics per Cinecittà',
        ],
        [
            'link' => 'lavoroesempio.php',
            'title' => 'Qadmio',
            'image' => 'Img/3Lavoro.png',
            'alt' => 'Immagine 3',
            'name' => 'Qadmio Web Services',
        ],
        [
            'link' => 'lavoroesempio.php',
            'title' => 'Polemos',
            'image' => 'Img/4Lavoro.png',
            'alt' => 'Immagine 4',
            'name' => 'Polemos Podcast',
        ],
        [
            'link' => 'lavoroesempio.php',
            'title' => 'PogbaXAdidas',
            'image' => 'Img/5Lavoro.png',
            'alt' => 'Immagine 5',
            'name' => 'PogbaXAdidas',
        ],
        [
            'link' => 'lavoroesempio.php',
            'title' => 'Wildside',
            'image' => 'Img/6Lavoro.png',
            'alt' => 'Immagine 6',
            'name' => 'Branding Wildside Brewery',
        ],
    ];

    foreach ($projects as $project): ?>
        <div class="project-item">
            <a href="<?= htmlspecialchars($project['link']); ?>" title="<?= htmlspecialchars($project['title']); ?>">
                <div class="project-image">
                    <img 
                        src="<?= htmlspecialchars($project['image']); ?>" 
                        alt="<?= htmlspecialchars($project['title']); ?>" 
                        loading="lazy">
                </div>
                <div class="project-name"><?= htmlspecialchars($project['title']); ?></div>
            </a>
        </div>
    <?php endforeach; ?>
</div> 

</body> 

<?php
renderFooter($current_year, $site_name);
?>
</html>
