<?php
require_once('./includes/header.php');

#if (isset($_SESSION['message'])) {
#  echo $_SESSION['message'];
#  unset($_SESSION['message']);
#}

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
	$password = md5(trim($_POST["password"]));
	$credentials = array($userID, $password);
	$userType = "";
  $emailAddress = "";
  $enrolDate = "";
  $error = "";
	$output = "";

	$cookieName = 'LOGIN_COOKIE';
	$cookieValue = $userID;
	setcookie($cookieName, $cookieValue, time() + COOKIE_LIFESPAN, "/");

	if (!isset($_COOKIE[$cookieName])) {
		$output = "Cookie named " . $cookieName . " is not set!";
	}
	else {
		$output = "Cookie " . $cookieName . " is set. Value is " . $_COOKIE[$cookieName];
	}

	if (!isset($userID) || ($userID === "") && (!isset($password) || ($password === ""))) {
    $output = "Please enter a username and a password!";
  }
  else if (!isset($userID) || ($userID === "")) {
    $output = "Please enter a username!";
  }
  else if (!isset($password) || ($password === "")) {
    $output = "Please enter a password!";
  }
  else {
    $conn = db_connect();
    $sql = "SELECT user_id, password, user_type, email_address, enrol_date, last_access
            FROM users
            WHERE user_id='$userID' AND password='$password'";
    $result = pg_query($conn, $sql);
		#$result = pg_execute($conn, $sql, array($userID, $password));
    $records = pg_num_rows($result);

    if($records === 1) {
      $userID = pg_fetch_result($result, "user_id");
      $password = pg_fetch_result($result, "password");
			$userType = pg_fetch_result($result, "user_type");
      $emailAddress = pg_fetch_result($result, "email_address");
			$enrolDate = pg_fetch_result($result, "enrol_date");
      $lastAccess = pg_fetch_result($result, "last_access");

			#User record retrieved from the result set and placed onto the session
			$_SESSION["userID"] = $userID;
			$_SESSION["password"] = $password;
			$_SESSION["userType"] = $userType;
			$_SESSION["emailAddress"] = $emailAddress;
			$_SESSION["enrolDate"] = $enrolDate;
			$_SESSION["lastAccess"] = $lastAccess;

      $sql = "UPDATE users SET last_access = '" . date("Y-m-d",time()) . "' WHERE user_id = '" . $userID . "'";
      pg_query($conn, $sql);

			if ($userType === "s") {
				header("Location: admin.php");
				ob_flush();
			}
			else if ($userType === "c") {
				header("Location: welcome.php");
				ob_flush();
			}
			else if ($userType === 'p') {
				$output = "Welcome! Your application is currently under review, and you are listed in our system as 'pending'.";
			}
			else if ($userType === 'd') {
				$output = "Your account has been suspended. Please contact support for further information.";
			}
		}
		else {
      $output = "Error! User " . $userID . " and the associated password do not exist.";
      $password = "";
    }
	}
}

?>

<h2>Login</h2>
<p><br/><?php echo $output; ?><br/></p>
<form name="Input" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<div>
	  <p>Login ID:</p>
	  <p>Password: </p>
  </div>
  <div>
    <p><input type="text" name="user_id" value="<?php echo $userID; ?>" size="15" /></p>
    <p><input type="password" name="password" value="" size="15" /></p>
  </div>
  <div>
    <p><input type="submit" value = " Log In "/></p>
    <p><input type="reset" value = " Reset "/></p>
  </div>
</form>

<p>This page is designed to accept user input as a username and
  password and compare it with an SQL database. The goal is to check to see if
  the user has been registered, and to sign them on if so.</p>

<?php include('./includes/footer.php'); ?>
