<?php
require_once __DIR__ . '/../includes/init.php';

$message = 'Hello Galkayo Café, I would like to place an order.';

header('Location: https://wa.me/' . SITE_WHATSAPP . '?text=' . urlencode($message));
exit;