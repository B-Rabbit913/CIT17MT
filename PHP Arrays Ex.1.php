<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Arrays Ex.1</title>
	<h1>PHP Arrays Ex.1</h1>
</head>
<body>
<?php

$weatherCondition = array('rain','sunshine','clouds','hail','sleet','snow','wind');
echo "We've seen all kinds of weather this month. At the <br> beginning of the month, we had ".$weatherCondition[5]." and ".$weatherCondition[6]. ".<br> Then came ".$weatherCondition[1]. " with a few ".$weatherCondition[2]." and some <br>".$weatherCondition[0]." at least we didn't get any ".$weatherCondition[3]." and ".$weatherCondition[4].".";


?>
</body>
</html>