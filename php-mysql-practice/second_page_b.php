<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Second Page</title>
	</head>
	<body>
		
		<pre>
			<?php
				// print_r($_GET);
			?>
		</pre>
		
		<?php
			$id = $_GET['id'];
			echo $id;
		?>
	</body>
</html>
