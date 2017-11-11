<?php
require '../vendor/autoload.php';

$app = new Slim\App();
// ルーティングの読み込み
$app->map(['GET', 'POST'], '/', function() {
    require '../resources/views/top.php';
});
$app->map(['GET', 'POST'], '/upload', function() {
    require '../resources/views/upload.php';
});

$app->run();