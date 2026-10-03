<nav>
    <?php foreach ($navLinks as $key => $link): ?>
        <a href="<?= BASE_URL . $link['url'] ?>" class="<?= $currentPage == $key ? 'active' : '' ?>">
            <?= $link['label'] ?>
        </a>
    <?php endforeach; ?>
</nav>