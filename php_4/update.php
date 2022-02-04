<?php
//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//   POSTデータ受信 → DB接続 → SQL実行 → 前ページへ戻る
require_once('funcs.php');


//1. POSTデータ取得
//$id = POST["id"]を追加
$companyname = $_POST['companyname'];
$name        = $_POST['name'];
$department  = $_POST['department'];
$mail        = $_POST['mail'];
$terms       = $_POST['terms'];
$privacy     = $_POST['privacy'];
$id          = $_POST['id'];

//2. DB接続します
$pdo = db_conn();


//３．データ登録SQL作成
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
$stmt = $pdo->prepare('UPDATE
                        hajimenoippo_an_table
                       SET
                        companyname=:companyname,
                        name=:name, 
                        department=:department,
                        mail=:mail,
                        terms=:terms,
                        privacy=:privacy,
                        date = sysdate()
                       WHERE
                        id= :id;
                        ');



// 更新処理の実行
// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':companyname', $companyname, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':department', $department, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':terms', $terms, PDO::PARAM_INT);
$stmt->bindValue(':privacy', $privacy, PDO::PARAM_INT);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

//実行
$status = $stmt->execute(); 

//４．データ登録処理後
// header関数"Location"を「select.php」に変更
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}