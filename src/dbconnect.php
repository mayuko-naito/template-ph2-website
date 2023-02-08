<?php

$dsn = 'mysql:dbname=posse;host=db;charset=utf8';
$user = 'root';
$password ='root';

$dbh = new PDO($dsn,$user,$password); 


$choices_table = 'SELECT * FROM choices';
$stmt = $dbh->query($choices_table);
$output = $stmt->fetchALL(PDO::FETCH_ASSOC);
// var_dump($output);
foreach ($dbh->query($choices_table) as $row) {
  print $row['id'];
  print $row['question_id'];
  print $row['name'];
  print $row['valid'];
}

$questions_table = 'SELECT * FROM questions';
$stmt = $dbh->query($questions_table);
$output = $stmt->fetchALL(PDO::FETCH_ASSOC);
// var_dump($output);
foreach ($dbh->query($questions_table) as $row) {
  print $row['id'];
  print $row['content'];
  print $row['image'];
  print $row['supplement'];
}

$questions = $dbh->query("SELECT * FROM questions")->fetchAll(PDO::FETCH_ASSOC);
$choices = $dbh->query("SELECT * FROM choices")->fetchAll(PDO::FETCH_ASSOC);

foreach ($choices as $key => $choice) {
  $index = array_search($choice["question_id"], array_column($questions, 'id'));
  $questions[$index]["choices"][] = $choice;
}

?>
