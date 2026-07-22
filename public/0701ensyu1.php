<?php
$dbh = new PDO('mysql:host=mysql;dbname=example_db', 'root', '');

if (isset($_POST['body'])) {
  // POSTで送られてくるフォームパラメータ body がある場合

  // insertする
  $insert_sth = $dbh->prepare("INSERT INTO hogehoge (text) VALUES (:body)");
  $insert_sth->execute([
      ':body' => $_POST['body'],
  ]);

  // 処理が終わったらリダイレクトする
  // リダイレクトしないと，リロード時にまた同じ内容でPOSTすることになる
  header("HTTP/1.1 302 Found");
  header("Location: ./0701ensyu1.php");
  return;
}

$select_sth = $dbh->prepare('SELECT * FROM hogehoge ORDER BY created_at DESC limit 10');
$select_sth->execute();
?>

<head>
  <title>画像投稿できる掲示板</title>
</head>
<!-- フォームのPOST先はこのファイル自身にする -->
<form method="POST" action="./0701ensyu1.php">
  <textarea name="body"></textarea>
  <button type="submit">送信</button>
</form>

<hr>

<h2>投稿一覧</h2>


<?php foreach($select_sth as $text): ?>
  <dev style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 5px solid #ccc;">
    <p>日時：<?= htmlspecialchars($text['created_at']) ?></p>
    <p>本文：<?= nl2br(htmlspecialchars($text['text'])) ?></p>
   </dev>
<?php endforeach; ?>
