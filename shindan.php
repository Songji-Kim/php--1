<html>

<head>
    <meta charset="utf-8">
    <title>自己診断</title>

    <style> 
    body {
        background-color: #38b9fa36;
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
        margin: 1px;
        padding: auto;
        display: flex
    }
    </style>
    
</head>

<body>
    <h3>自己診断の実施</h3>

    <a href="https://mrradiology.hatenablog.jp/entry/20161024/1477267861">参考URL1</a>


    <form action="shindan_write.php" method="post">
        <p id="q1">Q1.上場に向けた準備を本格的に進める予定ですか？</p><br>
        <input type="radio" name="q1" value="yes">yes<br>
        <input type="radio" name="q1" value="no">no<br>

        <p id="q2">Q2.監査法人による監査又はショートレビューを受けましたか？</p><br>
        <input type="radio" name="q2" value="yes">yes<br>
        <input type="radio" name="q2" value="no">no<br>

        <p id="q3">Q3.取締役会を月1回開催していますか？</p><br>
        <input type="radio" name="q3" value="yes">yes<br>
        <input type="radio" name="q3" value="no">no<br>

        <input type="submit" value="回答終了" >
    </form>

<!-- 今後実装したいこと2：回答が入力されていない場合のエラーを表示したい -->

    <!-- //  if(isset($_POST['q1'])) {
    //         $q1 = $_POST['q1'];
    //         echo 'Q1' . $q1 . '<br>';
    //  } else {
    //     echo '回答が入力されていません<br>';
    //  } -->


<!-- ボツ1 -->
<!-- $q1 = array(1,2);
参考URL：https://www.webdesignleaves.com/pr/php/php_basic_06.php?name=%E3%83%9E%E3%82%A4%E3%82%B1%E3%83%AB&age=33 -->


<!-- ボツ2 -->
<!-- 
        <div class ="form">
            <p class= q>Q1.上場に向けた準備を本格的に進める予定ですか？</p><br>   
            <div class= "a"> 
                <input type="radio" name="q1" value="yes" checked class="radio">yes</input>
                <input type="radio" name="q1" value="no" checked class="radio">no</input>
            </div>
        </div>
        <div class ="form">
            <p class= q>Q2.監査法人の監査は受けていますか？</p><br>   
            <div class= "a"> 
                <input type="radio" name="q2" value="yes" checked class="radio">yes</input>
                <input type="radio" name="q2" value="no" checked class="radio">no</input>
            </div>
        </div>        -->
       

    </body>

</html>
