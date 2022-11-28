# アプリケーション名
### お問い合わせ管理システム

<img width="1440" alt="manageImage" src="https://user-images.githubusercontent.com/55370161/204285104-74b2e099-206a-45ac-bc49-57ec63c94035.png">


## 説明
お問合せを送信・管理ができるアプリ
ユーザーはお問合せフォームから問い合わせ内容を送信できる。
また、管理画面からお問合せの内容を検索機能を用いて絞り込める。

## 環境構築方法
1. 「git clone」などを用いてご自身の環境にコピー
2. composer update
3. .envをご自身の環境に編集
4. php artisan key:generate
5. php artisan migrate:fresh
6. php artisan db:seed
7. php artisan serve
8. /contactにアクセス

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
- Laravel　8.83.26  
- MySQL 8.0.30 
- composer 2.3.10
