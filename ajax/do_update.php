<?php
    require_once "./common.php";
    $user_name = $_GET['id'];
    $sql = "UPDATE users SET username='{$_GET['user_name']}' WHERE id = {$id}";
    $result = $pdo->exec($sql);
    if($result){
        echo json_encode([
            "code" => 200,
            "mes"   => "更新成功",
            "data"  =>$result
        ]);
        exit;
    }