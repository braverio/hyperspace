<?php
require "../includes/common.php";

$title = "Reserve";
include "$inc/header.php";
?>

<link rel="stylesheet" href="/scripts/jquery-ui/jquery-ui.min.css">
<script src="/scripts/reserve.js"></script>
<script src="/scripts/jquery-ui/jquery-ui.min.js"></script>

<div class="container row">
    <div class="col-6">
        <div>
            <h1>Reserve Now!</h1>
            <h2>Planning a Party?</h2>
            <p>Please fill out the form on this page in order to book your party. Reservations must be placed 2 days in advance in order to allow our team time to set up.</p>
            <p>For more information, please call 1.497.377.7223</p>
        </div>
        <div>
            <h2>Daily Time Slots Available</h2>
            <p class="center-text">12pm to 4pm<br>5pm to 8pm</p>
        </div>
        <div>
            <h2>Party Rooms Available</h2>
            <p class="center-text">Moon Room: 25 max<br>Sun Room: 55 max<br>Galaxy Room: 100 max<br></p>
        </div>
        <div>
            <h2>Party Packages (price/person)</h2>
            <p class="center-text">Pluto: $17.99<br>Earth: $21.99<br>Jupiter: $25.99<br></p>
        </div>
    </div>
    <div class="col-6 form-container">
        <form method="post" action="process.php">
            <h2>Name</h2><input type="text" name="name" required placeholder="Name of adult in charge"><br><br>
            <h2>Email</h2><input type="email" name="email" required placeholder="Email to send confirmation"><br><br>
            <h2>Phone</h2><input type="tel" name="phone" placeholder="Optional"><br><br>
            <h2>Room</h2>
            <select id="room" name="room" required>
                <option value="1" data-max=25>Moon Room</option>
                <option value="2" data-max=55>Sun Room</option>
                <option value="3" data-max=100>Galaxy Room</option>
            </select>
            <h2>Number of Atronauts</h2><input id="number" type="number" name="guests" min="6" max="100" required placeholder="6 person minimum to reserve a party"><br><br>
            <h2 id="date">Date</h2><input type="text" name="day" id="datepicker" required placeholder="Choose a date to see available times"><br><br>
            <h2>Times</h2>
            <select id="time" name="time" disabled required>
                <option value="1">12PM to 4PM</option>
                <option value="2">5PM to 8PM</option>
            </select>
            <h2>Package</h2>
            <select id="package" name="package" required>
                <option value="1" data-price="17.99">Pluto</option>
                <option value="2" data-price="21.99">Earth</option>
                <option value="3" data-price="25.99">Jupiter</option>
            </select>
        <p>Upon submission, you will be emailed a message which you will have to click through in order to confirm your reservation. If you do not receive it within a few minutes, be sure to check your spam folder.</p>
        <input type="submit" value="Reserve Now!" class="button">
        </form>
    </div>
</div>

<?php
include "$inc/footer.php";
?>