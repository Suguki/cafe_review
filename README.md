# cafe_review
おすすめのカフェの投稿や評価、レビューができるアプリ。

# 環境構築方法

## 始める前に……

### (知識編) Laravelのインストール方法(一回したら、する必要がない)

[https://readouble.com/laravel/6.x/ja/installation.html](https://readouble.com/laravel/6.x/ja/installation.html)

上記のリンクにはcomposerが自分のMacPCにインストールされていることが前提となっているが、自分のPCにcomposerをインストールすると、他の人とバージョンを合わせる必要がある。（とても面倒くさい）

なので、dockerコンテナとしてcomposerを起動できるようにしています。

### composerでLaravelのインストール（最初期）

`src`が空っぽのとき

```bash
composer create-project --prefer-dist laravel/laravel src
```

`src`の中にLaravelがインストールされる。

## git pull した後

```bash
# root directoryで行って下さい。
cp docker-compose.yml.example docker-compose.yml

cp .env.example .env
```

```bash
# root directoryで行って下さい。

cp src/.env.example src/.env
```

composer

```bash
# なにかしたのファイルがあるとき（composer.jsonがあるとき）
docker-compose run --rm composer install
```

node (npm)
```bash
# なにかしたのファイルがあるとき（package.jsonがあるとき）
docker-compose run --rm node npm install
```

## Composerの使い方

### Dockerの立ち上げ方

dockerをビルドする（一番最初「だけ」やる作業）

```bash
docker-compose build
```

### composerの起動方法

```bash
docker-compose run --rm composer {起動したいコマンドオプション}
```

## WEBサーバー / PHPサーバー / MySQL の起動方法

```bash
docker-compose up # 全部起動 大抵これ
docker-compose up mysql # mysqlだけを起動
docker-compose up mysql php # mysqlとPHPだけを起動
docker-compose up mysql php nginx # 全部起動
```

## Dockerを使ってPHPを起動する方法
```bash
docker-compose exec php {実行したいPHPコマンド}

# 例

docker-compose exec php php -v
```

## Dockerを使ってnode(npm)を起動する方法
```bash
docker-compose run --rm node {実行したいPHPコマンド}

# 例

docker-compose run --rm node npm --version
```

## javacript(Vue)をコンパイルする方法
```bash
# 一回だけコンパイル
docker-compose run --rm node npm run dev

# プログラムコードが更新されるたびにコンパイル（監視モード）
docker-compose run --rm node npm run watch
```
## Laravelのマイグレーション機能を使ってMySQLを操作

### マイグレーション
```bash
docker-compose exec php php artisan migrate
```
