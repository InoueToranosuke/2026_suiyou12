# 画像投稿できる掲示板

画像を投稿することができる掲示板です。

## 使い方

### 1. EC2インスタンスに接続

EC2インスタンスを起動し、SSHで接続します。

### 2. GitHubからプロジェクトを取得

```bash
git clone git@github.com:InoueToranosuke/2026_suiyou12.git
```

### 3. プロジェクトのディレクトリに移動

```bash
cd プロジェクトのディレクトリ名
```

### 4. Dockerイメージをビルド

```bash
docker compose build
```

### 5. Dockerコンテナを起動

バックグラウンドでコンテナを起動します。

```bash
docker compose up 
```

コンテナの起動状態を確認します。

```bash
docker compose ps
```

### 6. MySQLに接続

```bash
docker compose exec mysql mysql データベース名
```

### 7. テーブルを作成

```sql
CREATE TABLE テーブル名 (
    カラム名 データ型
);
```

### 8. Webページを表示

ブラウザで以下のURLにアクセスします。

```text
http://EC2インスタンスのパブリックIPアドレス/ファイル名.php
```
