<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Arrays Ex.2</title>
	<h1>PHP Arrays Ex.2</h1>
</head>
<body>
<?php

	$largeCities = array('New York City','Mexico City','Tokyo','Mumbai','Lagos','Shanghai','Seoul','Cairo','Buenos Aires','London');
	
	for ($i=0; $i < count($largeCities); $i++) { 
		print ($largeCities[$i]);
		echo ", ";
	}
	echo "<br><br><br>";


	sort($largeCities, SORT_STRING);
	for ($i=0; $i < count($largeCities) ; $i++) { 
		?>
		<ul>
			<li><?= $largeCities[$i] ?></li>
		</ul>
		<?php
	}
	echo "<br><br>";

	$largeCities[]='Los Angeles';
	$largeCities[]='Calcutta';
	$largeCities[]='Osaka';
	$largeCities[]='Beijing';
	sort($largeCities, SORT_STRING);
		for ($i=0; $i < count($largeCities) ; $i++) { 
		?>

		<ul>
			<li><?= $largeCities[$i] ?></li>
		</ul>
		<?php
		}
?>
</body>
</html>