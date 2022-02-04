<?php

session_start();

// 現在のセッションIDを取得
$old_sessinoid = session_id();

// 新しいセッションIDを発行
session_regenerate_id();

// 現在のセッションIDを取得
$new_sessinoid = session_id();


// 現在のセッションIDを取得
echo "古いセッション : $old_sessinoid<br />";
echo "新しいセッション : $new_sessinoid<br />";




?>