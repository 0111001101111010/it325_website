<?php
//echo "foo doo<br>";
date_default_timezone_set('EST5EDT');
$my_file = 'file.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:'.$my_file);
$data = file_get_contents($my_file);
//print($data);
//var_dump($_POST);
if(isset($_POST["name"])){
//add the most material
$file_data = "<b>".$_POST["name"] . "</b> said " . $_POST["comment"] . "<br>Email:". " " . $_POST["email"] . "&thinsp;&thinsp;&thinsp;&#09;&#09;" . date("m/d/Y h:i:s a", time()) . "<br>";
$file_data .= file_get_contents($my_file);
file_put_contents($my_file, $file_data);
// $data = '\n New data line 1';
// fwrite($handle, $data);
// $new_data = "\n".'New data line 2';
// fwrite($handle, $new_data);
 }
 header('Location:a8.php');
?>
