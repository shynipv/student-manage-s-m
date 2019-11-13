<?php
	$db = mysqli_connect("localhost","root","root","sms");
if (mysqli_connect_errno()) {
	echo "Database Query Failed: ".mysqli_connect_error();
	exit();
}
?>
