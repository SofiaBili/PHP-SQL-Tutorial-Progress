<?php
	$conn = mysqli_connect('localhost', 'sofia','1234','sofia_pizza');
	if(!$conn){
		echo 'error:'. mysqli_connect_error();
	}
?>
