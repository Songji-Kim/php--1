# php--1　# php_2が課題の提出になります。

データの流れは
index2.php　→　insert2.php　→　shindan.php　→　shindan_insert.php
という流れになります。

【実現したいこと】
・会社の情報を登録する
・自己診断を行う
・（今後）自己診断の結果に基づいて会社が解決すべきタスクが設定される、という所まで行っていきたいと思っています。

（参考：以前作ったものと同じ内容を自力で作りたいです）
https://hajimenoippo.force.com/s/beginner?language=ja

【できていないこと】
１．チェックボックスやラジオボタンのtableへの登録の仕方がわからない。
２．mySQLの[hajimenoippo]の中で「hajimenoippo.an.table」と「shindan.an.table」を結合する方法がわからない。
（背景）会社情報と自己診断のDBは分けたい。自己診断で離脱する人もいると思うので、まずは会社情報だけでも登録してもらいたい。
３．「shindan_insert.php」から「shindan.an.table」への反映がうまく行っていない（仮説：dbのなかに2つテーブルがある場合には何かコーディングが必要なのか？）
