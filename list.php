<?php
	if(isset($_POST['submit'])){
		getfiles($_POST['url']);
	}
	function dealxml($url)
	{
		$content = simplexml_load_file($url);
		$name = (string)$content->application->name;
		return $name;
	}
	
	function getfiles($path){ 
	foreach(scandir($path) as $afile)
	{
		if($afile=='.'||$afile=='..') continue; 
		if(is_dir($path.'/'.$afile)) 
		{ 
			getfiles($path.'/'.$afile); 
		} else { 
		if(preg_match('/manifest.xml/',$afile)){
		  echo "<meta charset='utf8'>".$path.'--->'.dealxml($path.'/'.$afile).'<br />';
			}else{

			}
		   } 
		} 
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