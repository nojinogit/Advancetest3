# Advancetest3

お問い合わせ＆管理アプリ
https://user-images.githubusercontent.com/127584258/233978341-257599a3-9e78-4207-9f08-3295248b376f.jpg

#作成の目的
お問い合わせ内容受付と管理画面からの検索・確認をするため

#機能一覧
・お問い合わせ入力機能
・お問い合わせ内容検索機能
・お問い合わせ内容削除機能

#使用技術
nginx:1.21.1
php:
mysql:mysql:8.0.26
phpmyadmin:
laravel:8.x
livewire
jquery:3.4.1
AjaxZip3

##備考
index1:livewire を使い入力中にエラーを表示できる様にしましたが、確認ボタンを押した際にエラーが発生すると入力内容が消える/また confirmation から修正するで戻った際に input を変更すると他の input の内容が失われてしまう現象を解決できませんでした。

index2:livewire を使わず入力中にエラーを出す機能を実装しなかった index になります。こちらでは値を保持できました。
