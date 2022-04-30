<?php
	sleep(2);
	// connecting to the database
	$connection = mysqli_connect('localhost', 'root', '', 'ajax');

	// checking if 
	if (isset($_POST['full_name']) || isset($_POST['email'])) {		
		// sanitizing the input
		$full_name = mysqli_real_escape_string($connection, $_POST['full_name']);
		$email 	   = mysqli_real_escape_string($connection, $_POST['email']);

		// basic validation
		if ( trim($full_name) == '' || trim($email) == '' ) {
			echo "error";
			exit;
		}

		// preparing query to add the records
		$query     = "INSERT INTO mailing_list (full_name, email) VALUES ('{$full_name}', '{$email}')";

		$result    = mysqli_query($connection, $query);

		// checking if record added successfully
		if ( mysqli_affected_rows($connection) > 0 ) {
			echo "record-added";
			exit;
		} else {
			echo "error";
			exit;
		}
	}

?>