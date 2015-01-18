<?php
require("init.php");
$input = filter_input(INPUT_POST, "Input", FILTER_SANITIZE_URL);
$stmt = $dbh->prepare('SELECT * FROM users WHERE användarnamn = ? ');
$result = $stmt->execute(array($input));
if($result == null)
  print false;

else
  print true;
?>
