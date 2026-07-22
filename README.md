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

### 4.Dockerコンテナを起動
プロジェクト内の作業用ディレクトリで以下のコードを実行します。
```bash
docker compose up
```

コンテナの起動状態の確認方法
```bash
docker compose ps
```

### 5.MySQLに接続
MySQLに接続します。
```bash
docker compose exec mysql mysql データベース名
```

### 6.テーブルを作成
CREATE文を使用してテーブルを作成します。
```bash
CREATE TABLE 'テーブル名'(・・・);
```

### 7.Webページを表示
ブラウザを起動し、以下のURLにアクセスします。
```text
http://EC2インスタンスのパブリックIPアドレス/ファイル名
```





