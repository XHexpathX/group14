<?php
# The php file used to log the user out (close the session), and
# start a new one for the next user.
require_once('./includes/header.php');

unset($_SESSION);
session_destroy();
session_start();

$output = "You have successfully logged out, and will be redirected to the login page in 5 seconds.";


header("refresh:5;url=login.php");
ob_flush();
#$_SESSION['message'] = 'Logout successful.';
?>

<h2>Logout</h2>
<p><br/><?php echo $output; ?><br/></p>

<?php
include('./includes/footer.php');
?>
