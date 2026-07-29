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
```bash
show tables
```
+----------------------+
| Tables_in_example_db |
+----------------------+
| access_logs          |
| bbs_entries          |
| hogehoge             |
+----------------------+
```bash
DESCRIBE access_logs;
```
+------------+-------------+------+-----+-------------------+-------------------+
| Field      | Type        | Null | Key | Default           | Extra             |
+------------+-------------+------+-----+-------------------+-------------------+
| id         | int         | NO   | PRI | NULL              | auto_increment    |
| user_agent | text        | YES  |     | NULL              |                   |
| remote_ip  | varchar(45) | NO   |     | NULL              |                   |
| created_at | datetime    | YES  |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED |
+------------+-------------+------+-----+-------------------+-------------------+
```bash
DESCRIBE bbs_entries;
```
+----------------+--------------+------+-----+-------------------+-------------------+
| Field          | Type         | Null | Key | Default           | Extra             |
+----------------+--------------+------+-----+-------------------+-------------------+
| id             | int unsigned | NO   | PRI | NULL              | auto_increment    |
| body           | text         | NO   |     | NULL              |                   |
| created_at     | datetime     | YES  |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED |
| image_filename | text         | YES  |     | NULL              |                   |
+----------------+--------------+------+-----+-------------------+-------------------+

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





