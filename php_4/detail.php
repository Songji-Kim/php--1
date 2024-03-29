<?php

/**
 * １．PHP
 * [ここでやりたいこと]
 * まず、クエリパラメータの確認 = GETで取得している内容を確認する
 * イメージは、select.phpで取得しているデータを一つだけ取得できるようにする。
 * →select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * ※SQLとデータ取得の箇所を修正します。
 */


$id = $_GET['id'];

// DBに接続
require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM hajimenoippo_an_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

// 実行
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    // ここを修正
    sql_error($stmt);
} else {
    //データが取得できたら。
    $view = $stmt->fetch();
}
// var_dump($view);
?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ更新</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>登録内容の更新</legend>
                <label>会社名：<input type="text" name="companyname" value=<?= $view['companyname'] ?>></label><br>
                <label>名前：<input type="text" name="name" value=<?= $view['name'] ?>></label><br>
                <label>部署：<input type="text" name="department" value=<?= $view['department'] ?>></label><br>
                <label>Email：<input type="text" name="mail" value=<?= $view['mail'] ?>></label><br>
                <label>利用規約：<input type="text" name="terms" value=<?= $view['terms'] ?>></label><br>
                <label>プライバシーポリシー<input type="text" name="privacy" value=<?= $view['privacy'] ?>></label><br>
                                
                <input type="hidden" name="id" value=<?= $view['id'] ?>></label><br>

                <input type="submit" value="更新">
            </fieldset>
        </div>
    </form>
</body>

</html>