<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Logical: else and elseif </title>
	</head>
	<body>
	
	<?php	
		$a = 4;
		$b = 3;
		
		if ($a > $b) {
			echo "a is larger than b";
		} elseif ($a < $b) {
			echo "a is smaller than b";
		} else {
			echo "a is equal to b";
		}
	?>
	
	</body>
</html>
