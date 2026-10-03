<?php
function e($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function price($amount)
{
    return '$' . number_format($amount, 2);
}

function greeting()
{
    $hour = date('H');

    if ($hour < 12) {
        return 'Good morning';
    } elseif ($hour < 17) {
        return 'Good afternoon';
    }
    return 'Good evening';
}

function featuredItems($items)
{
    $featured = [];
    foreach ($items as $item) {
        if ($item['featured']) {
            $featured[] = $item;
        }
    }
    return $featured;
}

function redirect($path, $code = 302)
{
    header('Location: ' . BASE_URL . $path, true, $code);
    exit;
}