<?php

// ログイン認証用 ←必要に応じて削除しながらテスト
session_start();
// require_once('funcs.php');と同じだけど念のため別々で
include("funcs.php");
loginCheck();


//  * DB接続のための関数をfuncs.phpに用意
//  * require_onceでfuncs.phpを取得
// require_once('funcs.php');

//  * 関数化された状態でdbにアクセスする。
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM hajimenoippo_an_table');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    sql_error($stmt);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';
            $view .= h($result['date']) . '：' . h($result['companyname']) . '：' . h($result['name']);
        // $view .= '</p>';

        // $view .= '<p>';
            $view .= '<a href="detail.php?id=' . $result['id'] . '">';
            $view .= '[ 更新 ]';
            $view .= '</a>';

            $view .= '<a href="delete.php?id=' . $result['id'] . '">';
            $view .= '[ 削除 ]';
            $view .= '</a>';
        $view .= '</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>フリーアンケート表示</title>
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
                <div class="">
                    <a class="" href="index.php">データ登録</a>
                    <a class="" href="logout.php" >ログアウト</a>

                </div>
            </div>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="">
            <a href="detail.php"></a>
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->

</body>

</html>
