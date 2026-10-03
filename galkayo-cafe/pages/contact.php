<?php
require_once __DIR__ . '/../includes/init.php';

$pageTitle   = 'Contact Us';
$currentPage = 'contact';
$today       = date('l');

require __DIR__ . '/../includes/header.php';
?>

<h1>Contact Us</h1>

<section>
    <p><strong>Address:</strong> <?= SITE_ADDRESS ?></p>
    <p><strong>Phone:</strong> <?= SITE_PHONE ?></p>
    <p><strong>Email:</strong> <?= SITE_EMAIL ?></p>
    <a href="<?= BASE_URL ?>/order" class="btn">Order on WhatsApp</a>
</section>

<section>
    <h2>Opening Hours</h2>
    <table>
        <thead>
            <tr><th>Day</th><th>Hours</th></tr>
        </thead>
        <tbody>
            <?php foreach ($openingHours as $day => $hours): ?>
                <tr class="<?= $day == $today ? 'today' : '' ?>">
                    <td><?= $day ?><?= $day == $today ? ' (Today)' : '' ?></td>
                    <td><?= $hours ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>