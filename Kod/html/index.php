<?php

//require_once("../php/start.php");
//require_once("../php/startend.php");
require("../php/init.php");

/*

*/

$page_ok=filter_input(INPUT_GET,'page',FILTER_SANITIZE_URL);

if (isset($page_ok)){

	if ($page_ok == "start"){

		require_once("../php/start.php");
	}
	
	
	
	
	elseif ($page_ok == "register"){

		require_once("../php/register.php");

	}
	
	elseif ($page_ok == "logout"){
	session_destroy();
	header("Location: index.php?page=start");
	
	}else{header("Location: index.php?page=start");}



}

else {

header("Location: ?page=start");

}

?>