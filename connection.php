<?php

	$conn = mysqli_connect('localhost','root','','musical_world');

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);

    $smtp_password = $_ENV['SMTP_PASSWORD'];
 ?>