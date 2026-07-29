#画像投稿できる掲示板
---
画像を投稿することができる掲示板です。

## 使い方

### 1.EC2インスタンスに接続
EC2インスタンスを起動し,SSHで接続します。
```bash
ssh ec2-user@パブリックIPアドレス -i キーファイルのパス 
```

### 2.プロジェクトのディレクトリに移動
ターミナルで作業用ディレクトリに入ります。
```bash
cd プロジェクトのディレクトリ名
```

### 3.screenを起動
```bash
screen
```

### 4.build
Dockerfileやcompose.ymlを編集した際にbuildを行います
```bash
vim Dockerfile
```
```bash
vim compose.yml
```
```bash
docker build
```

### 5.Dockerコンテナを起動
プロジェクト内の作業用ディレクトリで以下のコードを実行します。
```bash
docker compose up
```

コンテナの起動状態の確認方法
```bash
docker compose ps
```

### 6.MySQLに接続
MySQLに接続します。
```bash
docker compose exec mysql mysql データベース名
```

### 7.テーブルを作成
CREATE文を使用してテーブルを作成します。
```bash
CREATE TABLE 'テーブル名'(・・・);
```

### 8.プログラム作成
拡張子'.php'のファイルを作成し、プログラムを書きます。
```bash
vim ファイル名.php
```

### 9.Webページを表示
ブラウザを起動し、以下のURLにアクセスします。
```text
http://EC2インスタンスのパブリックIPアドレス/ファイル名
```





