<?php

/* Connection to database */
	$conn =mysqli_connect("localhost","root","appsas","blog");

	/* Check connection */
	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	}

?>
