<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

// PDOのコピペの所を関数化する
function db_conn(){
    try {
        $pdo = new PDO('mysql:dbname=hajimenoippo;charset=utf8;host=localhost', 'root', 'root');
        return $pdo;
    } catch (PDOException $e) {
        exit('DBConnectError' . $e->getMessage());
    }
}


?>