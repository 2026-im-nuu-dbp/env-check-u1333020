<?php
// index.php

// 設定時區
date_default_timezone_set('Asia/Taipei');

// 隨機訊息陣列
$messages = [
    'Hello, world!',
    '今天是個好日子。',
    '隨機數字：' . rand(1, 100),
    'PHP 程式碼範例',
];

// 從陣列中挑一個訊息
$randomMessage = $messages[array_rand($messages)];
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>簡單 PHP 範例</title>
</head>
<body>
    <h1>目前時間：<?= date('Y-m-d H:i:s') ?></h1>
    <p>隨機訊息：<?= htmlspecialchars($randomMessage) ?></p>
    
</body>
</html>