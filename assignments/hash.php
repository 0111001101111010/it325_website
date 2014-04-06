<!DOCTYPE html>
		<head>
				<title>Assignment 8 </title>
				<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
				<script type='text/javascript' src="http://livevalidation.com/javascripts/src/1.3/livevalidation_standalone.compressed.js"></script>
		</head>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<h2>My Guest Book</h2><br>
			<hr>
			<form method="POST" class="form-horizontal" role="form" action="hash.php">
				<input type="text" name="name" class="form-control" id="inputUsername" placeholder="Name"><br>
				<input class="form-control" name="email" id="inputEmail" placeholder="Email"><br>
				<input type="textarea" name="comment" class="form-control" id="inputPassword" placeholder="Comment"><br>
				<hr>
				<button type="submit" class="btn btn-blue">Submit</button>
			</form>
		</div>
			<div class="col-lg-6">
				<h2> Who else has been here?</h2>
					<?php
					$my_file = 'blah.txt';
					$handle = fopen($my_file, 'a') or die('Cannot open file:'.$my_file);
					$data = file_get_contents($my_file);

					print("<p>".$data."</p>");

					?>
			</div>
	</div>
</div>

<?php

date_default_timezone_set('EST5EDT');
$my_file = 'blah.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:'.$my_file);
$data = file_get_contents($my_file);

if(isset($_POST["name"])){
//add the most material
$file_data = "<b>".$_POST["name"] . "</b> said " . $_POST["comment"] . "<br>Email:". " " . $_POST["email"] . "&thinsp;&thinsp;&thinsp;&#09;&#09;" . date("m/d/Y h:i:s a", time()) . "<br>";
$file_data .= file_get_contents($my_file);
file_put_contents($my_file, $file_data);

}
?>

<?php
//check if the form has been submitted
if(isset($_POST['md5me'])) {
	//MD5 encode the submitted content

	       $size = (int)$_POST['size'];
         $md5ed = substr(md5($_POST['md5me']),0,$size);
}
?>

<p>Generated Password <strong><?php echo $md5ed;?></strong></p>

<form action="#" method="post">
    <label for="md5me">MD5 Hashed:Root </label>
    <input name="md5me" id="md5me" type="text" />
<label for="size">Password Size</label>
    <input name="size" id="size" type ="text"/>
    <input type="submit" value="Create MD5 Hash" />
</form>

<script type='text/javascript'>
$("input[name='name']").change(function(){
		var inputUsername = new LiveValidation( "inputUsername", { validMessage: "Greetings!", wait: 500 } );
		inputUsername.add( Validate.Presence, { failureMessage: "Your name has to be at least 5 characters" } );
		inputUsername.add( Validate.Length, { minimum: 5});
});


	var inputEmail = new LiveValidation( "inputEmail", { validMessage: "Valid Email!", wait: 500 } );
	inputEmail.add( Validate.Presence, { failureMessage: "Email Please" } );
	inputEmail.add( Validate.Email, { failureMessage: "Invalid email address!" } );
//  inputEmail.add( Validate.Format, { pattern: /cs.odu.edu/i, failureMessage: "CS Email Only" } );

	var inputPassword = new LiveValidation( "inputPassword", { validMessage: "Appreciate it!", wait: 500 } );
	inputPassword.add( Validate.Presence, { failureMessage: "Comment Required" } );
</script>
