<?php
function renderHeader($site_name, $menu_items) {
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site_name); ?></title>
</head>
<body>
<header>
    <div class="header-content">
        <!-- Logo -->
        <div class="header-logo">
            <a href="index.php"><img src="Logo_Sito.png" alt="Logo del sito"></a>
        </div>

        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </label>

        <!-- Menu di navigazione -->
        <nav class="menu">
            <ul>
                <?php foreach ($menu_items as $name => $link): ?>
                    <li><a href="<?= htmlspecialchars($link); ?>"><?= htmlspecialchars($name); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>
<?php
}
?>

