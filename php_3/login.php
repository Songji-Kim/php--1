<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
   
   <style>
    div {padding: 10px;font-size: 16px;}
    .header{font-size: 30px;background-color: red;color: white;font-weight: bold;}
    .form{margin: 1px;}
    </style>

</head>
<body>
    
        <div class="header">
            <a href="#">ログイン</a>
        </div>

    <form method="POST" action="login_act.php">
                <div class ="form">
                       <label>ID:<input type="text" name="lid" size="30"></label><br>
                       <label>PW:<input type="text" name="lpw" size="30"></label><br>
                </div>
                <input type="submit" value="ログイン">
</body>
</html>