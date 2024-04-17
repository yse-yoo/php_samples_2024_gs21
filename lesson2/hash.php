<?php
if (isset($_POST)) {
    // var_dump($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>

        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button>Send</button>
        </div>
    </form>

    <h2>Result</h2>
    <h3>Email</h3>
    <p><?= @$email ?></p>
    <h3>Password</h3>
    <p><?= @$password ?></p>
    <h3>Hash Password</h3>
    <p><?= @$hash_password ?></p>
</body>

</html>