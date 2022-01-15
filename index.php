<html>

<head>
    <meta charset="utf-8">
    <title>フォーム</title>
    <style> 
    body {
        background-color: #38b9fa36;
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
    <h3>利用者情報の登録</h3>
    <form action="write.php" method="post">
        <div class ="form">
            <div class= "flex">
                会社名: <input type="text" required="required" name="companyname" size="40">
                <p class ="hissu">*必須</p><br>
            </div>
            <div class= "flex">
                お名前: <input type="text" required="required" name="name" size="40"><br>
                <p class ="hissu">*必須</p><br>
            </div>  
            <div class= "flex">
                部署名: <input type="text" name="department" size="40"><br>
            </div>  
            <div class= "flex">
                メール: <input type="text" required="required" name="mail" size="40"><br>
                <p class ="hissu">*必須</p><br>
            </div>  
        </div>
        <a href="https://i-3.co.jp/terms-of-use/">利用規約</a>への同意:<input type="checkbox" name="terms" class = "form" required><br>
        <a href="https://i-3.co.jp/privacy-policy/">プライバシーポリシーへの同意</a>への同意:<input type="checkbox" name="privacy"class = "form" required><br>
        <input type="submit" value="登録して次へ" class = "form" onclick="buttonClick()" >
     </form>


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script>
     function buttonClick(){
             alert('登録内容に誤りはありませんか？')
    }

    // 今後実装したいこと１：”登録して次へ”で”自己診断”に行くようにしたい
    // if(!alert){
    //     this.isClicked = true;
    //     <a href="shindan.php"></a>

     </script>


    </body>

</html>
