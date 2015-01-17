<?php


function top() {
header("Content-type: text/html; charset=utf8");
echo "<Doctype html>\n";
echo "<html>\n";
echo "<head>\n";
echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>\n";
echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"../css/templated-mongoose/default.css\">";

// Avgör vad titeln ska ha för värde
echo "<title>".getTitle()."</title>\n";
echo "</head>\n";
echo "<body>\n";
echo "<div id=\"header-wrapper\">\n";
echo "<div id=\"header\" class=\"container\">";
echo "<div id=\"menu\">\n";

// Skriver ut länkar
echo "<ul>";
echo "<li><a href=\"?page=start\" class=\"style1\">Hem</a></li>\n";
echo "</ul>";
echo "</div>";
echo "</div>\n";
echo "</div>\n";
echo "<div id=\"content\">\n";


		
}

		
		
		
		
		
function bottom() {

echo "</div>\n";
echo "</body>\n";
echo "</html>\n";

}
function getTitle()
{
$page_ok = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);
$title = "";

if(isset($page_ok)){
	if($page_ok == "start"){
			$title = "Start";
	}
}
else{
	$title ="Start";

}


return $title;
}

?>