<?php
require_once __DIR__ . '/vendor/autoload.php';

use Pecee\SimpleRouter\SimpleRouter;

require_once __DIR__ . '/routes.php';

$loader = new \Twig\Loader\FilesystemLoader('view');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

SimpleRouter::setDefaultNamespace('\Demo\Controllers');

// Start the routing
SimpleRouter::start();

// echo $twig->render('base.html.twig');
// echo $twig->render('chat/index.html.twig');


SimpleRouter::get('/test', function() {
    return 'Hello world';
});