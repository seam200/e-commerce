<?php
require_once("includes/config.php");
if (!empty($_POST["email"])) {
	$email = $_POST["email"];

	$result = mysqli_query($con, "SELECT  email FROM  users WHERE  email='$email'");
	$count = mysqli_num_rows($result);
	if ($count > 0) {
		echo "<span style='color:red'> Sorry. Ekhon Bazar.com Your Email already exists Please Log in .</span>";
		echo "<script>$('#submit').prop('disabled',true);</script>";
	} else {

		echo "<span style='color:green'> Congratulations. Ekhon Bazar.com Email available for New Registration .</span>";
		echo "<script>$('#submit').prop('disabled',false);</script>";
	}
}
