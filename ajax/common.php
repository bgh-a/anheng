<?php
    $mysql_conf = array(
        'host'    => 'localhost', 
        'db'      => 'anheng', 
        'db_user' => 'root', 
        'db_pwd'  => 'kang', 
        );
    $pdo = new PDO("mysql:host=" . $mysql_conf['host'] . ";dbname=" . $mysql_conf['db'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);//创建一个pdo对象
    $pdo->exec("set names 'utf8'");