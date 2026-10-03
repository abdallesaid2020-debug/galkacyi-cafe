<?php
require_once __DIR__ . '/../includes/init.php';

$pageTitle   = 'About Us';
$currentPage = 'about';

require __DIR__ . '/../includes/header.php';
?>

<h1>About Us</h1>
<p><?= SITE_NAME ?> opened in 2020. We serve fresh coffee and Somali tea in a friendly place.</p>

<h2>Our Team (<?= count($team) ?> people)</h2>
<ul class="list">
    <?php foreach ($team as $member): ?>
        <li><strong><?= e($member['name']) ?></strong> — <?= e($member['role']) ?></li>
    <?php endforeach; ?>
</ul>

<?php require __DIR__ . '/../includes/footer.php'; ?>