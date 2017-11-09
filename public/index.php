<?php
require '../vendor/autoload.php';

$app = new Slim\App();
// ルーティングの読み込み
$app->get('/', function() {
    require '../resources/views/top.php';
});


$app->run();