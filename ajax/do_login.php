<?php
    require_once "./common.php";
    $user_name = $_POST['username'];
    $user_password = $_POST['pwd'];
    $sql = "SELECT count(id) FROM users WHERE username='{$user_name}' AND pwd='{$user_password}'";
    $stmt = $pdo->query($sql);
    if ($stmt!=false) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode([
            "code" => 200,
            "msg" => "登陆成功"
        ]);
    } else{
        echo json_encode([
            "code" => 500,
            "msg" => "用户名和密码不匹配"
        ]);
    }
    exit;

