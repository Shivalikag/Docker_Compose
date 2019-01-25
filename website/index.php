<html>
<head>
<title>IoT</title>
</head>
<body>
<h1>CDAC IoT </h1>
<h2>****List of  modules****</h2>
<p1>Dated - Dec, 26, 2018</p1>
<ul>
<?php
	$JSON=file_get_contents('http://modules/');
	$obj=json_decode($JSON);
	$Modules=$obj->modules;
	foreach($Modules as  $modules)
	{
		echo "<li>$Modules</li>";
	}
?>
</ul>
</body>
</html>


