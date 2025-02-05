<?php
require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('view');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

// echo $twig->render('base.html.twig');
echo $twig->render('chat/index.html.twig');
