<?php
// 「env.php」を読み込む
require_once 'env.php';

// 設定
$db_connection = DB_CONNECTION;
$db_name = DB_DATABASE;
$db_host = DB_HOST;
$db_port = DB_PORT;

// DB information(DB接続情報)
// mysql:dbname=my_shop;host=port=3306;character=utf8;
$dsn = "{$db_connection}:dbname={$db_name};host={$db_host};port={$db_port};charset=utf8;";
$db_user = DB_USERNAME;
$db_password = DB_PASSWORD;

// DB Connect（データベース接続）
try {
    // DB接続
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage();
    exit;
}

// POSTリクエストパラメータを取得（しゅとく）
if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

// SQLを実行すると、PDO Statement Object がかえってくる
// $stmt = $pdo->query($sql);
// PHPのオブジェクトにコンバート
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($users);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Sign in</h1>
        <div>
            <form action="" method="post">
                <div>
                    <label for="">Email</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div>
                    <label for="">Password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <button class="btn btn-primary">Sign in</button>
            </form>

            <h2>Info</h2>
            <h3>Email</h3>
            <p><?= @$email ?></p>
            <h3>Password</h3>
            <p><?= @$password ?></p>
        </div>
    </div>
</body>

</html>