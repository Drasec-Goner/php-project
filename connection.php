<?php

	$conn = mysqli_connect('cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com','j6ug5pjglhww1k9c','edabzuwp2xphxj81','n71yrgnfjla5oyrd');

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);

    $smtp_password = getenv('SMTP_PASSWORD');
 ?>
