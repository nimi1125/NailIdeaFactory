# Nail Idea Factory
## 使用技術一覧
<p style="display: inline">
　<!-- フロントエンドの言語一覧 -->
    <img src="https://img.shields.io/badge/-HTML-99d1ce.svg?logo=&style=for-the-badge">
    <img src="https://img.shields.io/badge/-CSS-1572B6.svg?logo=&style=for-the-badge">
    <img src="https://img.shields.io/badge/-Javascript-fff5a1.svg?logo=javascript&style=for-the-badge">
  <!-- フロントエンドのフレームワーク一覧 -->
<!--   <img src="https://img.shields.io/badge/-Next.js-000000.svg?logo=next.js&style=for-the-badge"> -->
  <!-- バックエンドの言語一覧 -->
  <img src="https://img.shields.io/badge/-Php-cccfff.svg?logo=php&style=for-the-badge">
  <!-- バックエンドのフレームワーク一覧 -->
  <img src="https://img.shields.io/badge/-Laravel-f3a68c.svg?logo=laravel&style=for-the-badge">
  <!-- ミドルウェア一覧 -->
  <img src="https://img.shields.io/badge/-MySQL-4479A1.svg?logo=mysql&style=for-the-badge&logoColor=white">
  <!-- インフラ一覧 -->
  <img src="https://img.shields.io/badge/-Docker-1488C6.svg?logo=docker&style=for-the-badge">
</p>

## 概要
### アプリを作ったきっかけ
さまざまなネイルのデザインに挑戦したいので、日々、InstagramやXなど各SNSの投稿でデザインの参考になりそうなものを保存したり、画像検索で見つけた参考画像を保管したりしています。ただ、それではデザインを残しておく場所が複数に分かれてしまい、画像を探す手間がかかります。 
さらに、ネイリストの方に自分が思っているデザインを的確に伝えるためにも、ひとつにどんなデザインかをまとめておきたいと感じていました。
そこで、それらをひとまとめにして簡単に管理できるメモアプリがあれば便利だと考え、このアプリの開発に至りました。

### アプリ機能説明
・デザイン画像・参考URL・使用したいパーツなどを一元管理します。
 InstagramやX、画像検索で保存したネイルデザインをアプリ内でひとまとめに管理できます。

・カテゴリ分け
カテゴリで、デザインを簡単に分類できます。（例：フレンチネイル、ニュアンスネイル）

・他の人が登録したデザインも確認することができます。

### 今後の実装予定
・画像などの複数登録調整

・デザインの公開範囲の変更
ネイリストの方への共有などが必要な時は、公開に設定、自分だけが確認したかったら非公開に設定など、用途によって公開範囲を変更できるようにします。

・完成したネイルの投稿機能
ネイルのデザインメモだけではなく、完成したものを共有できるような投稿機能を追加します。

・お気に入り機能の追加

・検索機能の追加

### アプリ表示側イメージ
![スクリーンショット 2024-11-18 23 59 47](https://github.com/user-attachments/assets/334bb3fd-886d-4780-aeb2-129706933b95)
![localhost_dashboard (1)](https://github.com/user-attachments/assets/3562838b-76f3-4fd4-ba28-2100bcfab9ca)
![localhost_idea (1)](https://github.com/user-attachments/assets/1e9fd47d-bc87-4841-b098-9620d0294035)

### アプリURL
※デプロイ中につき、後ほど記載
#### URL　：
#### テストアカウント
~~~
    ID:test@test.com
    PASS:12345test
~~~

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

※エイリアスを変更
sailコマンドがsail~で実行できるようになる 例：sail artisan migrate
~~~
alias sail="vendor/bin/sail"
~~~
