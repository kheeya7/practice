<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Loops: while</title>
	</head>
	<body>
	
	<?php
		$count = 0;
		while ($count <= 10) {
			echo $count . ", ";
			$count++; 
		}
	echo "<br />";
	echo "Count: {$count}";
	?>
	<br />
	<?php
		$count = 0;
		while ($count <= 10) {
			if ($count ==5) {
				echo "FIVE, ";
			} else {
				echo $count . ", ";
			}
			$count++;
		}
	echo "<br />";
	echo "Count: {$count}";
	?>
	</body>
</html>
