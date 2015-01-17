<?php
require('init.php');


$username = filter_input(INPUT_POST, "login_username");
$password = filter_input(INPUT_POST, "login_password");

$stmt = $dbh->prepare('SELECT * FROM users WHERE användarnamn = ?');
$stmt->execute(array($username));

$array = $stmt->fetch(PDO::FETCH_ASSOC);

if(empty($array))
{
    exit("Användaren finns inte. Pucko");
}

if(password_verify($password, $array['lösenord'])) {

	setcookie('username', $username, time()+(3600*60*24));
	header("Location:../php/start.php");
	
    $_SESSION['login'] = true;
	print_r($_SESSION);
    
}
else {
 
}
//header("Location: start.php");
?>			