<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Validations Errors</title>
	</head>
	<body>
        <?php

        $errors = array();
        
        // * presence
        // * How to use empty() right
        // $value = trim("   ");
        // if (!isset($value) || empty($value) && !is_numeric($value)) {
        //     echo "Validation failed.<br />";
        // }
        $value = trim(""); 
        if (!isset($value) || $value ==="") {
            $errors['value'] = "Value cannot be blank.";
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
        $value = "kheeya7@hotmail.com";
        if (!preg_match("/@/", $value)) {
            echo "Validation failed.<br />";
        }

        if (strpos($value, "@") === false) {
            echo "Validation failed. <br />";
        }

        ?>

        <?php
            // if (!empty($errors)) {
            //    include("form.php");
            // } else {
            //     include("success.php");
            // }

            // if (!empty($errors)) {
            //     echo "<div class=\"error\">";
            //     echo "Please fix the following errors:";
            //     echo "<ul>";
            //     foreach ($errors as $key => $error) {
            //         echo "<li>{$error}</li>";
            //     }
            //     echo "</ul>";
            //     echo "</div>";
            // }

            // Make the if statement(line 73-82) as a function 
            function form_errors($errors=array()){
                $output = "";
                if (!empty($errors)) {
                    $output .= "<div class=\"error\">";
                    $output .= "Please fix the following errors:";
                    $output .= "<ul>";
                    foreach ($errors as $key => $error) {
                        $output .= "<li>{$error}</li>";
                    }
                    $output .= "</ul>";
                    $output .= "</div>";
                } 
                return $output;
            }
        ?>
        <?php echo form_errors($errors);?>


	</body>
</html>
