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
        <h1>Contact us</h1><br>
        <p>For any questions, comments, or concerns, please use the contact form below. If, however you would like tomake  a reservation at our restaurant, use the <a href="/reserve/">reservations form</a> instead.</p>
        <p>Phone calls at 1.HYP.ERS.PACE or 1.497.377.7223 during our operating hours are also welcome.</p>
        
        <p>You may also send a letter to or come visit us at 13 Apollo Rd, Cypress, CA 90630</p>
        
        <h2>Hours of Operation</h2>
        <p class="center-text">Monday to Thursday: 11AM to 10PM<br>Friday to Sunday: 9AM to 11PM</p>
    </div>
    <div class="col-6">
    <div class="form-container">
        <form action="process.php" method="POST">
			<input type="hidden" name="token" value="<?php print $_SESSION['token']; ?>" />
            <h2>Name</h2><input type="text" name="from"><br><br>
            <h2>Email</h2><input type="text" name="email"><br><br>
            <h2>Subject</h2><input type="text" name="subject"><br><br>
            <h2>Message</h2><textarea name="message" rows="11"></textarea><br><br>
            <input type="submit" value="Submit" class="button">
        </form>
        </div>
    </div>
</div>

<?php
include "$inc/footer.php";    
?>