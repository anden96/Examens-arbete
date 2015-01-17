<!Doctype html>
<?php 
require("../php/init.php");
?>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- DISCLAIMER!
********************************
* Template inte gjord utav mig *
********************************
-->
<link type="text/css" rel="stylesheet" href="../css/templated-mongoose/default.css">
<link type="text/css" rel="styelsheet" href="../css/style.css">

<title><?php echo getTitle(); ?></title>


</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="menu">
            <form action="" method="post">
                <input type="text" id="search" name="search">

            </form>
			<?php if(!isset($_SESSION['login'])) :?>
				<form action="../php/login.do.php" method="post">
					<label for="login_username">Login</label>
					<input type="text" id="login_username" name="login_username">
					<input type="password" id="login_password" name="login_password">
					<button type="submit">Logga in</button>
				</form>
				<a href="../html/index.php?page=register">Inte registrerad?</a>
			<?php else: 
				print "<a href=\"../html/index.php?page=logout\">Logga ut</a>";
			?> 
			
			<?php endif;?>
				
				


            <ul>
                <li class="current_page_item"><a href="?page=start" class="style1">Hem</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="content">












<?php
function getTitle()
{
$page_ok = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);
$title = "";

if(isset($page_ok)){
	$title=$page_ok;
}
else{
	$title ="Start";

}


return $title;
}

?>
