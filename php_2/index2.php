<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>

    <style>

    
    div {
        padding: 10px;
        font-size: 16px;
    }

    .header{
        font-size: 30px;
        background-color: red;
        color: white;
        font-weight: bold;
    }

    .hissu{
        color: red;
        font-size: 5px;
    }
    
    .flex{
        display: flex;
        margin: 10px;
    }
    
    .form{
        margin: 10px;
    }
    </style>

</head>

<body>

    <!-- Head[Start] -->
    <header>
                <div class="header">
                    <a href="select2.php">利用者情報の登録</a>
                </div>
                <header>

    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert2.php">
                <div class ="form">
                    <div class= "flex">
                        会社名: <input type="text" name="companyname" required="required"  size="40">
                        <p class ="hissu">*必須</p><br>
                    </div>
                    <div class= "flex">
                        お名前: <input type="text" name="name" required="required"  size="40">
                        <p class ="hissu">*必須</p><br>
                    </div>  
                    <div class= "flex">
                        部署名: <input type="text" name="department" size="40">
                    </div>  
                    <div class= "flex">
                        メール: <input type="text" name="mail" required="required" size="40">
                        <p class ="hissu">*必須</p><br>
                    </div>  
                
                    <a href="https://i-3.co.jp/terms-of-use/">利用規約</a>への同意:<input type="checkbox" name="terms" class = "form" required><br>
                    <a href="https://i-3.co.jp/privacy-policy/">プライバシーポリシーへの同意</a>への同意:<input type="checkbox" name="privacy"class = "form" required><br>
                    <input type="submit" value="登録して次へ" class = "form" onclick="buttonClick()" >
                </div>
        </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    function buttonClick(){
            alert('登録内容に誤りはありませんか？')
    }
    </script>



</body>

</html>
