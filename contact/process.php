<?php
$from = $_POST["from"];
$email = $_POST["email"];
if (isset($_POST["subject"]))
    $subject = $_POST["subject"];

$message = $_POST["message"];
$message = "Message from $from ($email):\n\n" . $message;
$location = "Location: http://hyperspace.club/contact/index.php";

// Session checks
if (empty($_SESSION['token']) || empty($_POST['token'])) {
    $_SESSION['flash'] = "An error occured";
	exit();
}
if ($_SESSION['token'] != $_POST['token']) {
	$_SESSION['flash'] = "An authentication error occured";
} else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$_SESSION['token'] = ""; // Invalidate token.
    mail ("bnguyen170+bready@gmail.com", $subject, $message);
    $_SESSION['flash'] = "Sent!";
} 
else{
    $_SESSION['flash'] = "Please enter a valid email address";
}

header(location);
?>