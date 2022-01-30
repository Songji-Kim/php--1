<!DOCTYPE html>
<html lang="ja">

<html>

<head>
    <meta charset="utf-8">
    <title>自己診断</title>

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
    .q{
        margin: 10px;
        text-align: left;
        place-items: top;
    }
   .radio{
        margin: 10px;
        text-align: left;
        place-items: top;
        padding: auto;
   }
    .a{
        margin: 3px;
    }
    .form{
        margin: 10px;
        padding: auto;
    }
    </style>
    
</head>

<body>

    <header>
        <div class="header">
            <a href="shindan_select.php">自己診断の実施</a>
        </div>
    <header>

    <form method="post" action="shindan_insert.php">
        <div class ="form">
            
            <div class= "">
                <p>上場に向けた準備を本格的に進める予定ですか？</p>  
                <input type="radio" name="q1[]" value="yes">yes
                <input type="radio" name="q1[]" value="no">no
            </div>

            <div class= "">
                <p id="q2">Q2.監査法人による監査又はショートレビューを受けましたか？</p>
                <input type="radio" name="q2[]" value="yes">yes
                <input type="radio" name="q2[]" value="no">no
            </div>

            <div class= "">            
            <p id="q3">Q3.取締役会を月1回開催していますか？</p>
            <input type="radio" name="q3[]" value="yes">yes
            <input type="radio" name="q3[]" value="no">no
            </div>            
        </div>
    </form>


    <input type="submit" value="回答終了" class="form" onclick="buttonClick()" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    function buttonClick(){
            alert('回答を終了しますか？')
    }
    </script>

</body>

</html>
