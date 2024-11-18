# Nail Idea Factory
## 使用技術一覧
<p style="display: inline">
  <!-- フロントエンドのフレームワーク一覧 -->
  <img src="https://img.shields.io/badge/-Next.js-000000.svg?logo=next.js&style=for-the-badge">
  <!-- バックエンドのフレームワーク一覧 -->
  <img src="https://img.shields.io/badge/-Laravel-f3a68c.svg?logo=laravel&style=for-the-badge">
  <!-- バックエンドの言語一覧 -->
  <img src="https://img.shields.io/badge/-Php-cccfff.svg?logo=php&style=for-the-badge">
  <!-- ミドルウェア一覧 -->
  <img src="https://img.shields.io/badge/-MySQL-4479A1.svg?logo=mysql&style=for-the-badge&logoColor=white">
  <!-- インフラ一覧 -->
  <img src="https://img.shields.io/badge/-Docker-1488C6.svg?logo=docker&style=for-the-badge">
</p>

## 概要
### アプリを作ったきっかけ
さまざまなネイルのデザインに挑戦したいので、日々、InstagramやXなど各SNSの投稿でデザインの参考になりそうなものは、投稿を保存しておいたり、画像検索などで見つけた参考画像などを保存しておいたりしています。
ただ、それではデザインを残しておく場所が複数あり、画像を探す手間があります。それらをひとまとめにして簡単に管理できるメモアプリがあれば便利だと感じ、このアプリの開発に至りました。

### アプリ表示側イメージ
![スクリーンショット 2024-11-18 23 59 47](https://github.com/user-attachments/assets/334bb3fd-886d-4780-aeb2-129706933b95)
![localhost_dashboard](https://github.com/user-attachments/assets/c5c032fa-ee58-4ea9-99e7-63a2e39d5407)
![スクリーンショット 2024-11-19 0 00 17](https://github.com/user-attachments/assets/fc875aa0-95de-49da-9fda-85ecc55984b5)

### アプリURL
#### URL　：
#### テストアカウント
~~~
    ID:test@test.com
    PASS:12345test
~~~

## ディレクトリ構成

## 開発環境の構築方法

### 構築環境

docker
laravel 11（sail利用）

1. git clone
~~~
git clone ~~~
~~~
2. 環境変数ファイルの作成

clone したディレクトリへ移動
~~~
cd ~~~
cp .env.example .env
~~~
3. パッケージインストール
~~~
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
~~~
4. Dockerコンテナ起動
~~~
./vendor/bin/sail up -d
~~~
5. APP_KEYの生成
~~~
./vendor/bin/sail artisan key:generate
~~~

6. フロントパッケージインストール
~~~
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
~~~

7. マイグレーション
~~~
./vendor/bin/sail artisan migrate
~~~

8.シーダー実行
~~~
./vendor/bin/sail　artisan db:seed
~~~

