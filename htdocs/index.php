<?php
// セッション開始
session_start();

// ライブラリ読み込み
require __DIR__.'/../vendor/autoload.php';

// Slim初期化
$app = new \Slim\Slim([]);

// Slimにルートを登録
$app->get('/',function(){
    echo "Hellow,world!";
});

// 実行
$app->run();

