<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>print document</title>
	<style>
	img{
		margin: 10px;
	}
	</style>
</head>
<body onload="window.print();">
<?php
	for($x=1; $x<=10; $x++){
	echo "<img src='" .$_GET['file'] ."'>";
}
?>
</body>
</html>

