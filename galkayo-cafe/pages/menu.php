<?php
require_once __DIR__ . '/../includes/init.php';

$pageTitle   = 'Our Menu';
$currentPage = 'menu';

require __DIR__ . '/../includes/header.php';
?>

<h1>Our Menu</h1>
<p>We have <?= count($menuItems) ?> items. Everything is fresh every day.</p>

<div class="grid">
    <?php foreach ($menuItems as $item): ?>
        <?php require __DIR__ . '/../includes/menu-card.php'; ?>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>