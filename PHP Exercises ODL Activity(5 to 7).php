<HTML>
<head>
  <Title>PHP Exercises ODL Activity</title>
</head>
<body>
<?php

echo "exer 5";
echo "<br>";
$around = "around"; 
echo 'What goes ' . $around . ' comes ' . $around . '.';
echo "<br>";
echo "exer 6\n";
echo "<br>";
for ($i = 1; $i <= 12; $i++){
	echo "$i * $i = ", $i*$i,"<br>";
}


echo "exer 7\n";
echo "<table border =\"0\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 7; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 7; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td>\n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";



?>
</body>
</html>
