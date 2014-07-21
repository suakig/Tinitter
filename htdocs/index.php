<?php
// セッション開始
session_start();

// ライブラリ読み込み
require __DIR__.'/../vendor/autoload.php';
require '../config.php';

// Slim初期化
$app = new \Slim\Slim([
    'templates.path' => TEMPLATES_DIR_PATH,
    'view' => new \Slim\Views\Twig()
]);

// Slimにルートを登録
\Tinitter\Route::registration($app);

// 実行
$app->run();

