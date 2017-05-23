<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Validations</title>
	</head>
	<body>
        <?php
        
        // * presence
        $value = "x";
        if (!isset($value) || empty($value)) {
            echo "Validation failed.<br />";
        } 

        // * string length
        // minimum length
        $value = "qwer";
        $min = 3;
        if (strlen($value) < $min) {
            echo "Validation failed.<br />";
        }
        $max = 6;
        if (strlen($value) > $max) {
            echo "Validation failed.<br />";
        }

        // * type
        $value = "1";
        if (!is_string($value)) {
            echo "Validation failed.<br />";
        }

        // * inclusion in a set
        $value = "1";
        $set = array ("1", "2", "3", "4");
        if (!in_array($value, $set)) {
            echo "Validation failed.<br />";
        }       

        // * uniqueness
        // uses a database to check uniqueness


        // * format
        // use a regex on a string
        // preg_match($regex, $subject)
        if (preg_match("/PHP/", "PHP is fun.")) {
            echo "A match was found.<br />";
        } else {
            echo "A match was not found.<br />";
        }
        
        $value = "kheeya7.hotmail.com";
        if (!preg_match("/@/", $value)) {
            echo "Validation failed.<br />";
        }

        if (strpos($value, "@") === false) {
            echo "Validation failed. <br />";
        }

        ?>
	</body>
</html>
