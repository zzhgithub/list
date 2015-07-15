<?php
if(isset($_POST['submit'])){
	$url = $_POST['url'];
	$content = simplexml_load_file($url);
	$name = (string)$content->name;
	var_dump($name);
}
?>
<!doctype html>
<html>
<head lang="en">
<meta charset="utf8">
</head>
<body>
	<form method="post">
		<input type="text" name="url" value="" ><br>
		<input type="submit" name="submit" value="submmit" >
	</form>
</body>
	
</html>