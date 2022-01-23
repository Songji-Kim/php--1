<?php
require_once('funcs2.php');


//1. POSTデータ取得
$companyname = $_POST['companyname'];
$name = $_POST['name'];
$department = $_POST['department'];
$mail = $_POST['mail'];
$terms = $_POST['terms'];
$privacy = $_POST['privacy'];

//2. DB接続します
$pdo = db_conn();


// try {
//     //ID:'root', Password: 'root'
//     $pdo = new PDO('mysql:dbname=hajimenoippo;charset=utf8;host=localhost', 'root', 'root');
// } catch (PDOException $e) {
//     exit('DBConnectError:' . $e->getMessage());
// }

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO hajimenoippo_an_table(id, companyname, name, department, mail, terms, privacy, date)
                        VALUES(NULL, :companyname, :name, :department, :mail, :terms, :privacy, sysdate())");

//  2. バインド変数を用意
$stmt->bindValue(':companyname', $companyname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':department', $department, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':terms', $terms, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':privacy', $privacy, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

//  3. 実行
$status = $stmt->execute();
//４．データ登録処理後
if ($status == false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("ErrorMessage:" . $error[2]);
} else {
    //５．index.phpへリダイレクト
    header('Location: shindan.php');
}

?>
