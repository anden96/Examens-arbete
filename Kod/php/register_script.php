<?php

require("init.php");	


$password = filter_input(INPUT_POST, 'register_password', FILTER_SANITIZE_URL);
$username = filter_input(INPUT_POST, 'register_username', FILTER_SANITIZE_URL);
$email = filter_input(INPUT_POST, 'register_epost', FILTER_SANITIZE_URL);

$password_store = password_hash($password, PASSWORD_BCRYPT);
print $password.'<br />'.$password_store.'<br />'.$username.'<br />'.$email;

$check = $dbh->prepare("SELECT * FROM users where username = ?");
$check->execute(array($username));
$array1 = $check->fetch(PDO::FETCH_ASSOC);


#Regular expressions
if(preg_match("/^(?=.*[0-9]|[!\"#$%&'()*+,\-.;<=>?@^_`|~])(?=.*[a-z])([a-z0-9_-]+)$/", $password) && preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email))
{
	$stmt = $dbh->prepare('INSERT INTO users(username, email, password) VALUES (?,?, ?)');
	$stmt->execute(array($username, $email, $password_store));
	$_SESSION['register_complete'] == true;
}
else
{
	$_SESSION['register_complete'] == false;
}
header("Location:../html/index.php");
 
 
?>