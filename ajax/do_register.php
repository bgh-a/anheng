<?php
    require_once "./common.php";
    $user_name = $_POST['username'];
    $user_password = $_POST['pwd'];
    $sql = "INSERT INTO users(username,pwd) VALUES('$user_name','$user_password')";
    $result = $pdo->exec($sql);
    echo json_encode([
        "code" => 200,
        "msg" => "注册成功"
    ]);
    exit;
