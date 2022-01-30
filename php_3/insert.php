<?php

require_once('funcs.php');

//1. POSTデータ取得
$companyname = $_POST['companyname'];
$name        = $_POST['name'];
$department  = $_POST['department'];
$mail        = $_POST['mail'];
$u_pw        = $_POST['u_pw'];
$terms       = $_POST['terms'];
$privacy     = $_POST['privacy'];

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成

$stmt = $pdo->prepare("INSERT INTO 
                    hajimenoippo_an_table(
                        id, 
                        companyname, 
                        name, 
                        department, 
                        mail, 
                        u_pw,
                        terms, 
                        privacy, 
                        date
                        )
                    VALUES(NULL, 
                    :companyname, 
                    :name, 
                    :department, 
                    :mail, 
                    :u_pw,
                    :terms, 
                    :privacy, 
                    sysdate()
                    )"
                    );

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':companyname', $companyname, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':department', $department, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':u_pw', $u_pw, PDO::PARAM_STR);
$stmt->bindValue(':terms', $terms, PDO::PARAM_INT);
$stmt->bindValue(':privacy', $privacy, PDO::PARAM_INT);

// 実行
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('shindan.php');
}
?>