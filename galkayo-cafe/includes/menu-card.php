<div class="card">
    <span class="tag"><?= e($item['category']) ?></span>
    <h3><?= e($item['name']) ?></h3>
    <p><?= e($item['description']) ?></p>
    <p class="price"><?= price($item['price']) ?></p>
</div>