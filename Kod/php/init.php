<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
header("Content-type: text/html; charset=utf8");
$dbh = new PDO('mysql:host=localhost;dbname=wiki', 'root', '');
$dbh->query('SET NAMES utf8');



?>