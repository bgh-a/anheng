<?php
    require_once "./common.php";
    $user_name = $_GET['id'];
    $sql = "DELETE FROM user WHERE id = {$id}";
    $result = $pdo->exec($sql);
    if($result){
        echo json_encode([
            "code" => 200,
            "mes"   => "用户列表",
            "data"  =>$result
        ]);
        exit;
    }

    // TODO:删除失败
