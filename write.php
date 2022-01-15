<?php
// index.phpのファイルから取り込み
$companyname = $_POST['companyname'];
$name = $_POST['name'];
$department = $_POST['department'];
$mail = $_POST['mail'];
$terms = $_POST['terms'];
$privacy = $_POST['privacy'];

// XSS（情報漏洩の手法）の対策コード。必須！
$companyname = htmlspecialchars($companyname, ENT_QUOTES);
$name = htmlspecialchars($name, ENT_QUOTES);
$department = htmlspecialchars($department, ENT_QUOTES);
$mail = htmlspecialchars($mail, ENT_QUOTES);
$terms = htmlspecialchars($terms, ENT_QUOTES);
$privacy = htmlspecialchars($privacy, ENT_QUOTES);

// 以下からデータ取り込みの方法

// ファイルに書き込むデータ
$date = date('Y/m/d H:i:s');
$str = $date . ",". $name . ",". $companyname . ",". $department . ",".$mail . ",".$terms . ",".$privacy ;


// 以下、2つはCSVに書き込む際の文字化け対策
$ShiftJIS = $_POST; 
mb_convert_variables('Shift_JIS', 'UTF-8', $ShiftJIS); 

// ファイルの用意
$file = fopen('./data.csv', 'a');
// $file = fopen('./data.txt', 'a');

// 書き込み
fputcsv($file, $ShiftJIS);
// fwrite($file, $str . "\n");

// ファイルをクローズ
fclose($file);
?>

<!-- 疑問1 csv書き込みにすると日付が登録されなくなってしまう -->

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <style> 
        body {
            background-color: #38b9fa36;
        }
    </style>
</head>

<body>

    <h1>ご登録ありがとうございました</h1>
    <h2>.data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="data.txt">確認する</a></li>
        <li><a href="index.php">戻る</a></li>
    </ul>
</body>

</html>