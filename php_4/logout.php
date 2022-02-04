<?php
// ログインは全て同じファイルを使う
// 必ずsession_start()は最初に適用

session_start();

// セッション初期化
$_SESSION = array();

// Cookieに保存されていたセッションIDの保存期間を過去にして破棄
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time()-42000, '/');
}

// サーバー側でのセッションIDの破棄
session_destroy();

// 処理後、login.phpへリダイレクト
header("Location: login.php");
exit();

?>