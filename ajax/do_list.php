<?php
    require_once "./common.php";
    // $user_name = $_POST['user_name'];
    // $user_password = $_POST['user_password'];
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    $result = [];
    if ($stmt!=false) {

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    var_dump($result);

    // return json_encode([
    //     "code" => 200,
    //     "msg"   => "用户列表",
    //     "data"  => $result
    // ]);
    return json_encode($result);