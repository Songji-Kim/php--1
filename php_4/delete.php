<?php
//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//   POSTデータ受信 → DB接続 → SQL実行 → 前ページへ戻る
require_once('funcs.php');

//1. GETでデータ取得
$id = $_GET['id'];

//2. DB接続します
$pdo = db_conn();

//３．データ削除SQL
$stmt = $pdo->prepare('DELETE FROM hajimenoippo_an_table 
                        WHERE id = :id;');

// データベースにデータを送る際の共通処理
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

// 実行
$status = $stmt->execute(); 

//４．データ登録処理後
// header関数"Location"を「select.php」に変更
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}