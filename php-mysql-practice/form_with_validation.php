<?php
    require_once("included_function.php");
	require_once("validations_functions.php");

    $errors = array();
    $message = "";
	if (isset($_POST['submit'])) {
		// form was submitted
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);

        // Validations
            // if (!has_presence($username)) {
            //     $errors["username"] = "Username can't be blank";
            // }
        
        // Check "has_presence()" by doing a loop
        $fields_required = array("username", "password");
        foreach($fields_required as $field) {
            $value = trim($_POST[$field]);
            if (!has_presence($value)) {
                $errors[$field] = ucfirst($field) . " can't be blank";
            }
        }

        $fields_with_max_lengths = array("username" => 30, "password" => 8);
        validate_max_lengths($fields_with_max_lengths);

        if (empty($errors)){
           // try to login
            if ($username == "kate" && $password == "password") {
			    // successful login
			    redirect_to("basic.html");
		    } else {
			    $message = "Username/password do not match.";
		    }         
        }


	} else {
		$username = "";
		$message = "Please log in.";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>

		<?php echo $message; ?><br />
		<?php echo form_errors($errors); ?>

		<form action="form_with_validation.php" method="post">
		  Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br />
		  Password: <input type="password" name="password" value="" /><br />
			<br />
		  <input type="submit" name="submit" value="Submit" />
		</form>

	</body>
</html>
