<?php
require_once('funcs.php');

// ログインはsession を使う
//1. POSTデータ取得

session_start();
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成
$sql = 'SELECT * FROM 
                    hajimenoippo_an_table 
                    WHERE 
                    mail=:lid
                    AND 
                    u_pw=:lpw';

$stmt = $pdo ->prepare($sql);
// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);

// 実行
// $status = $stmt->execute();
$res = $stmt->execute();

//４．データ登録処理後
if ($res == false) {
    $error = $stmt ->errorInfo();
exit("QueryError:".$error[2]);
}

// 5.抽出データ数を取得
// $count = $stmt->fetchColumn()；
// 1レコードだけ取得する方法
$val = $stmt->fetch();  

// 6.該当レコードがあればSESSIONに値を代入

if ( $val["id"] != ""){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["companyname"] = $val['companyname'];
    $_SESSION["name"] = $val["name"];
//ログイン処理OKの場合、select.phpへ遷移
header("Location: index.php");
}else{
    //ログイン処理NGの場合login.phpへ遷移
    header("Location: login.php");
}
// 処理終了
exit();

?>