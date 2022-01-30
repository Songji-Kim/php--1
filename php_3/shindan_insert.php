<?php
    require_once('funcs.php');

    //1. POSTデータ取得
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];

    //2. DB接続します
    $pdo = db_conn();

    //３．データ登録SQL作成

    // 1. SQL文を用意
    $stmt = $pdo->prepare("INSERT INTO 
                        shindan_an_table(
                            id, 
                            q1,
                            q2,
                            q3,
                            date
                            )
                            VALUES
                            (
                            NULL, 
                            :q1,
                            :q2,
                            :q3,
                              sysdate()
                              )"
                              );


    //  2. バインド変数を用意
    $stmt->bindValue(':q1', $q1, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':q2', $q2, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':q3', $q3, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

    //  3. 実行
    $status = $stmt->execute();

    //４．データ登録処理後
    if ($status === false) {
        sql_error($stmt);
    } else {
        redirect('orei.php');
    }
    ?>
