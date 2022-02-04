<?php

// 1.入力チェック（受信確認処理追加）
// 商品名 受信チェック:item->comopanyname
if(!isset($_POST["companyname"]) || $$_POST["companyname"]==""){
    exit("ParameError ! Companyname!");
}

// 金額 受信チェック:value->name
if(!isset($_POST["name"]) || $$_POST["name"]==""){
    exit("ParameError ! name!");
}

// 紹介文 受信チェック:mail
if(!isset($_POST["mail"]) || $$_POST["mail"]==""){
    exit("ParameError ! mail!");
}

$companyname = $_POST["companyname"];
$name        = $_POST["name"];
$mail        = $_POST["mail"];



?>