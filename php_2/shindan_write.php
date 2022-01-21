<!-- 今後実装したいこと1と同じ流れで、会社内容登録→自己診断する→「会社内容と自己診断結果が合わさってcsv登録されるようにしたい -->

<?php
// index.phpのファイルから取り込み
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];

// XSS（情報漏洩の手法）の対策コード。必須！
$q1 = htmlspecialchars($q1, ENT_QUOTES);
$q2 = htmlspecialchars($q2, ENT_QUOTES);
$q3 = htmlspecialchars($q3, ENT_QUOTES);

// 以下からデータ取り込みの方法

// ファイルに書き込むデータ
$date = date('Y/m/d H:i:s');
$str = $date . ",".$q1 . ",". $q2 . ",". $q3 ."," ;

// ファイルの用意
$shindan_file = fopen('./shindan.csv', 'a');
// $file = fopen('./data.txt', 'a');

// 書き込み
fwrite($shindan_file, $str );
// fwrite($file, $str . "\n");

// ファイルをクローズ
fclose($shindan_file);
?>

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
    <h1>回答お疲れさまでした</h1>
    <h2>診断結果を見る</h2>
    <li><a href="shindan.php">診断に戻る</a></li>
</body>

</html>