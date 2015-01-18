<?php
require("top.php");
?>

<form method="post" action="../php/register_script.php">
		<label for="register_username">Användarnamn</label>
		<input type="text" name="register_username" id="register_username">
		<div id="ruta1">

		</div>

		<br />
		<label for="register_password">Lösenord</label>
		<input type="password" name="register_password" id="register_password">
		<div id="ruta2">

		</div>
		<br />
		<label for="register_epost">Epost address</label>
		<input type="text" id="register_epost" name="register_epost">
		<div id="ruta3">

		</div>

		<button type="submit" id="register_button" disabled>Registrera</button>
	</form>


<?php
require("bottom.php");
?>
<script type="text/javascript">
	  var bPassword = false;
		var bEmail = false;

	$(document).ready(function(){

		$('#register_username').keyup(function(){
			var usernameToCheck = $('#register_username').val();


			$.ajax({
			type: "POST",
			url: "ajax_script.php",
			data: {Input: usernameToCheck },
			cache: false,
			})
			.done(function(result){
				if(result == true )
					$('#ruta1'.css("background-color", "yellow"));
					else
						$('#ruta1'.css("background-color", "green"));
					});
		});


		$('#register_password').keyup(function(){
				rel = /^(?=.*[0-9]|[!"#$%&'()*+,\-.;<=>?@^_`|~])(?=.*[a-z])([a-z0-9_-]+)$/
				var input = $('#register_password').val();
				ok = rel.exec(input);
				if(!ok)
				{
					$('#ruta2').css("background-color", "red");
					bPassword = false;
				}
				else
				{
					$('#ruta2').css("background-color", "green");
					bPassword = true;
				}
				readyToPost();
		});

		$('#ruta').click(function(){

		});

		$('#register_epost').keyup(function(){

			 var rel_email = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
			 var input = $('#register_epost').val();
			 ok = rel_email.exec(input);
				if(!ok)
				{
					$('#ruta3').css("background-color", "red");
					bEmail = false;
				}
				else
				{
					$('#ruta3').css("background-color", "green");
					bEmail = true;
				}
				readyToPost();


		 });
	});

	function readyToPost() {
		if(bPassword && bEmail)
		{
			$("#register_button").removeAttr('disabled');

		}
		else
		{
			$("#register_button").attr('disabled','disabled');


		}

	}
/*
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
*/

</script>
