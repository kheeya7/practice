<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Validations</title>
	</head>
	<body>
        <?php
        
        // * presence
        // * How to use empty() right
        // $value = trim("   ");
        // if (!isset($value) || empty($value) && !is_numeric($value)) {
        //     echo "Validation failed.<br />";
        // }
        $value = trim(""); 
        if (!isset($value) || $value ==="") {
            echo "Validation failed.<br />";
        }

        ?>
	</body>
</html>
