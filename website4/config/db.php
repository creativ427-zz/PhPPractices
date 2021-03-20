<?php
	$conn = mysqli_connect("localhost", "root","123456", "phplibrary");

	if(mysqli_connect_errno()){
		echo"mysql failed".mysqli_connect_errno();
	}
	


?>
