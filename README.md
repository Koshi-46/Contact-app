# アプリケーション名
### お問い合わせ管理システム

<img width="1440" alt="manageImage" src="https://user-images.githubusercontent.com/55370161/204285104-74b2e099-206a-45ac-bc49-57ec63c94035.png">


## 説明
お問合せを送信・管理ができるアプリ
ユーザーはお問合せフォームから問い合わせ内容を送信できる。
また、管理画面からお問合せの内容を検索機能を用いて絞り込める。

## 環境構築方法
1. Laravelが使用できる環境構築
2. 「git clone」などを用いてご自身の環境にコピー
3. composer update
4. .envをご自身の環境に編集
5. php artisan key:generate
6. php artisan migrate:fresh
7. php artisan db:seed
8. php artisan serve

##　使い方
### 問い合わせ機能
1. /contactにアクセス
2. 必要情報を入力し送信するとお問い合わせができます

### 検索機能
1. /manageにアクセス
2. 問い合わせされた情報が一覧で表示されます

## 機能一覧
- お問合せフォームの送信
- お問合せの検索・削除

## 使用技術
### フロントエンド
- HTML  
- CSS 
- Tailwind.css
- Javascript
### バックエンド
- PHP 8.1.9  
- Laravel　10.30.1
- MySQL 8.0.30 
- composer 2.3.10
