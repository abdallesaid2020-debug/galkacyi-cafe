<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $allowedPages = ['menu', 'about', 'contact', 'order', 'food', '404'];

    if (!in_array($page, $allowedPages, true)) {
        $page = '404';
    }

    require __DIR__ . '/pages/' . $page . '.php';
    exit;
}

require_once __DIR__ . '/includes/init.php';

$pageTitle   = 'Home';
$currentPage = 'home';
$featured    = featuredItems($menuItems);

require __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <h1><?= greeting() ?>, welcome to <?= SITE_NAME ?></h1>
    <p>Fresh coffee, Somali tea and tasty snacks every day.</p>
    <a href="<?= BASE_URL ?>/menu" class="btn">See our menu</a>
    <a href="<?= BASE_URL ?>/order" class="btn">Order on WhatsApp</a>
</section>

<section>
    <h2>Today's Favourites</h2>
    <div class="grid">
        <?php foreach ($featured as $item): ?>
            <?php require __DIR__ . '/includes/menu-card.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>