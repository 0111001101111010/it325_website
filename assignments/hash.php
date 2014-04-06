




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
