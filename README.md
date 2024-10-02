# Atte （勤怠管理システム）
ログインしたユーザが勤怠開始・終了/休憩開始・終了をボタンを押すことで記録され、日付ごとに勤怠時間と休憩時間を管理できる。
![284FDE48-443D-45B7-BD84-86BE97EE40AF_1_201_a](https://github.com/user-attachments/assets/b6f55fb9-630f-49c5-86e9-355ab7db884d)

## 作成した目的
勤怠をわかりやすく管理できるようにするため

## アプリケーションのURL
・開発環境：http://localhost/  
・phpMyAdmin：http://localhost:8080/

## 機能一覧
・ユーザ登録/ログイン機能：新規ユーザがアカウントを作成し、それにログインできる  
・出退勤管理：出退勤時にボタンを押して勤怠の管理ができる  
・休憩時間管理：休憩の開始と終了もボタンを押して記録し休憩時間が管理できる

## 使用技術　　（実行環境）
Laravel 8.83.27  
PHP 8.3.4  
MySQL 8.0.26

## テーブル設計
<img width="634" alt="F98E7DE1-D54E-4DF0-A0C1-ED849CE048BB" src="https://github.com/user-attachments/assets/84651d81-50e1-4b4c-8de6-e6f7a6e51e0c">

## ER図
![image](https://github.com/user-attachments/assets/047467ed-84a2-49d8-b4de-49860408e07a)

## 環境構築
### Dockerビルド

1. `git clone git@github.com/jnjwmk/attendance1.git`
2. DockerDesktopアプリを立ち上げる
3. `docker-compose up -d --build`

### Laravel環境構築

1. `docker-compose exec php bash`
2. `composer install`
3. 「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成
4. .envに以下の環境変数を追加
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=attendance_db
DB_USERNAME=attendance_user
DB_PASSWORD=attendance_pass
```
5. アプリケーションキーの作成
```
php artisan key:generate
```
6. マイグレーションの実行
```
php artisan migrate
```
7. シーディングの実行
```
php artisan db:seed
```




