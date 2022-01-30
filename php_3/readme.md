PHP3回目の授業＋ログイン等の機能をラーニングシステムを見ながら実施してみました。
とは言え、デザイン等は一切無視で機能だけ装着している状態です。
まだデータ間の流れがユーザー目線にもなっていないな…と思っております。

【今までとほぼ同じ】
index.php
insert.php
select.php
funcs.php

【授業課題】
update.php
delete.php

【ログインなど】
login.php
login_act.php
logout.php
session.php
session_regenerate_id.php

【断念中】
admin.php

【困っている点】
・なぜかinsert.php,select.phpを途中から作業するとエラーになります。
（ログアウトして、ログインしなおしてから、データ登録するながれだとsqlが正しく機能するのですが、途中から操作するとエラーになります）
・恐らくsession_regenerateを行っている影響だと推測していますが、直し方は解明できていません。

