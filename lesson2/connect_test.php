<?php 
// 「env.php」を読み込む
require_once 'env.php';

// 設定
$db_connection = DB_CONNECTION;
$db_name = DB_DATABASE;
$db_host = DB_HOST;
$db_port = DB_PORT;

// DB Connect（データベース接続）
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MySQL Test</h1>
    <dl>
        <dt>Connection</dt>
        <dd><?= $db_connection ?></dd>
        <dt>Host</dt>
        <dd><?= $db_host ?></dd>
        <dt>Port</dt>
        <dd><?= $db_port ?></dd>
    </dl>
</body>
</html>