<?php
require "../includes/common.php";

$title = "Contact";
include "$inc/header.php";

if (empty($_SESSION['token'])) {
	$_SESSION['token'] = md5(mt_rand(1,1000000));
}
?>

<div class="container row">
        <div class="col-6">
            <h1>Contact Us</h1><br>
            <p>For any questions, comments, or concerns, please use the contact form below. If, however, you would like to make a reservation for a special event or occasion, use the <a href="/reserve/">reservations form</a> instead.</p>
            <br>
            <p>Phone calls at 1.HYP.ERS.PACE or 1.497.377.7223 during our operating hours are welcome.</p>
            <br>
            <p>You may also send an inquiry to or visit us at 13 Apollo Rd, Cypress, CA 90630.</p>
            <br><br>
            <h2>Hours of Operation</h2>
            <p class="center-text">Monday to Thursday<br>11AM to 10PM<br><br>Friday to Sunday<br>9AM to 11PM</p>
            <br><br>
            <img src="/images/alien-min.png" style="height: 12em; margin-right: 1em;">
            <img src="/images/alien-red-min.png" style="height: 12em; margin-right: 1em;">
            <img src="/images/alien-min.png" style="height: 12em; margin-right: 1em;">
        </div>
        <div class="col-6">
            <div class="form-container">
                <form action="process.php" method="POST">
                    <input type="hidden" name="token" value="<?php print $_SESSION['token']; ?>" />
                    <h2>Name</h2><input type="text" name="from"><br><br>
                    <h2>Email</h2><input type="text" name="email"><br><br>
                    <h2>Subject</h2><input type="text" name="subject"><br><br>
                    <h2>Message</h2><textarea name="message" rows="10"></textarea><br><br>
                    <input type="submit" value="Submit" class="button">
                </form>
            </div>
        </div>
    </div>

<?php
include "$inc/footer.php";    
?>