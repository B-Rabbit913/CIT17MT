<?php 
$dir = 'Movies';
$files = scandir($dir);

//pre_r($files);
	
	function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

$files = array_diff($files, array('..', '.'));

//pre_r($files);

$files = array_values($files);

//pre_r($files);

$movies = array();

for ($i=0; $i < count($files); $i++)  {

	preg_match("!(.*?)\((.*?)\)!", $files[$i],$results);
	$movie_name = str_replace('_', ' ', $results[1]);
	$movie_name = ucwords($movie_name);

	$movies[$movie_name]['image'] = $files[$i];
	$movies[$movie_name]['year'] = $results[2];
}

echo "<table id = 'movies' cellpadding = 50>";
echo "<tr class = 'odd'>";



foreach ($movies as $movie_name => $info) {
	$content = "<td><span class = 'name'>$movie_name</span><br  />"
	. "<img src = 'movies/$info[image]'><br />"
	. "<span class = 'year'>( $info[year] )</span></td>";
	echo $content;
}

echo "</tr></table>";
 ?>
 
 <style>
 	#movies {
 		background-color: #000;
 		color: #fff;
 		font: 11pt Courier New;
 	}
 	tr.header {
 		background-color: #111f4e;
 		color: #fff;
 		font: bold 11pt Courier New;

 	}
 	tr.odd {
 		background-color: #07669e;
 	}
 	tr.even {
 		background-color: #07669e;
 	}
 	img{
 		padding: 10px;
 	}
 	td{
 		text-align: center;
 	}
 	span.year {
 		color: #ccc;
 		font-size: 18px;
 	}
 	span.name {
 		font-size: 18px;
 		font-weight: bold;
 	}
 	body{
 		margin: 0;
 	}

 </style>