<?php
require_once __DIR__ . '/../includes/init.php';

http_response_code(404);

$pageTitle   = 'Page Not Found';
$currentPage = '';

require __DIR__ . '/../includes/header.php';
?>

<section class="hero">
    <h1>404 — Page Not Found</h1>
    <p>Sorry, this page does not exist.</p>
    <a href="<?= BASE_URL ?>/" class="btn">Back to Home</a>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>