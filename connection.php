<?php

	$conn = mysqli_connect('localhost','root','','musical_world');

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);

    $smtp_password = getenv('SMTP_PASSWORD');
 ?>