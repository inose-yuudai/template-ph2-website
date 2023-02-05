<?php
/* ドライバ呼び出しを使用して MySQL データベースに接続する */
$dsn = 'mysql:dbname=posse;host=db';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password);

$sql = 'SELECT*FROM choices ORDER BY id';
// foreach ($dbh->query($sql) as $row) {
//     print $row['id'] . "\t";
//     print $row['question_id'] . "\t";
//     print $row['name'] . "\n";
//     print $row['valid'] . "\n";

// }
$questions = $dbh->query("SELECT * FROM questions")->fetchAll(PDO::FETCH_ASSOC);
$choices = $dbh->query("SELECT * FROM choices")->fetchAll(PDO::FETCH_ASSOC);
//

foreach ($choices as $key => $choice) {
  $index = array_search($choice["question_id"], array_column($questions, 'id'));
  $questions[$index]["choices"][] = $choice;
//   print $choice['id'] . "\t";
//   print $choice['question_id'] . "\t";
//   print $choice['name'] . "\n";
//   print $choice['valid'] . "\n";
}
var_dump ($questions);
?>