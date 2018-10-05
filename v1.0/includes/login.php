<?php

if (isset($cookie)) {

}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$userID = "";
  $password = "";
  $userType = "";
  $emailAddress = "";
  $enrolDate = "";
  $lastAccess = "";
  $error = "";
  $output = "";
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$userID = trim($_POST["user_id"]);
	$password = ("md5", trim($_POST["password"]));
	$error = "";
	$output = "";
}

?>

<h2><?php echo $output; ?></h2>
<h3><?php echo $error; ?></h3>
	<form action="<?php echo $_SERVER["REQUEST_URI"];  ?>" method="post">
		<div class="myDivLeft">
		<p>Enter the START temperature in Celsius: </p>
		<p>Enter the STOP temperature in Celsius: </p>
		<p>Enter the temperature INCREMENT value: </p>
		</div>
		<div class="myDivRight">
			<p><input type="text" name="start_temperature"
				value="<?php echo $start; ?>" size="10" /></p>
			<p><input type="text" name="stop_temperature"
				value="<?php echo $stop; ?>" size="10" /></p>
			<p><input type="text" name="increment_value"
				value="<?php echo $increment; ?>" size="10" /></p>
		</div>
		<div class="myDivCenter">
			<p><input type="submit" value="Convert" /></p>
		</div>
	</form>
