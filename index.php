<?php
require "includes/common.php";

$title = "Home";
include "$inc/header.php";
?>

<script src="/scripts/onLoad.js"></script>

<div id="content-wrap">
    <div class="fullpage parallax-landing parallax-0">
        <div class="center-vertical">
        <div class="hidden" id="logo">
            <div id="logo-wrap">
                <img src="/images/hyperspace.svg">
                <div class="container">
                    <h2 style="padding: 1em 0em 0em; color:#ccc; font-size: 1.5em;">Where not even the skies can limit you.</h2>
                </div>            
            </div>
            <div class="container">
                <a href="#1"><div class="button" style="width: 10em;">Learn more</div></a>
            </div>
        </div>
        </div>
    </div>
    <div id="1" class="row container">
        <img style="height:5em;" src="images/alien.png">
        <h1>What We Offer</h1>
        <p>At this family entertainment center, we strive to make you happy.</p>
        <div class="col-3 circle">
            <img src="images/family.jpeg">
            <h2>Family</h2>
            <p>Bringing family and friends together is our number one priority here at HyperSpace. We've created an atmosphere that will make you never want to leave.</p>
        </div>
        <div class="col-3 circle">
            <img src="images/party.jpeg">
            <h2>Parties</h2>
            <p>We offer exclusive party and birthday packages so that you can enjoy unlimitless fun without all the hassle. Visit the reserve page to find out more!</p>
        </div>
        <div class="col-3 circle">
            <img src="images/foods.jpeg">
            <h2>Food</h2>
            <p>HyperSpace offers top-quality dining. Not feeling like eating a whole meal? Check out our futuristic snack bar. You'll never leave our place with an empty stomach!</p>
        </div>
        <div class="col-3 circle">
            <img src="images/game.jpg">
            <h2>Games</h2>
            <p>Swing on by to load your asteroids to play our top-rated games! Check out the attractions below!</p>
        </div>
    </div>
    
    <div id="admissions" class="row">
        <h1>General Admission</h1>
        <div class="col-7">
            <p>Just go ahead and load your Space Card with asteroids, where you can spend them on games. You may do this using our online system or just complete your transaction at the check-in desk. From these asteroids, you can gain tickets from playing and acheiving high scores!</p>
        </div>
        <div class="col-5">
            <h3><span class="bold">100 Asteroids</span> $17.99</h3>
            <h3><span class="bold">75 Asteroids</span> $14.99</h3>
            <h3><span class="bold">50 Asteroids</span> $9.99</h3>
            <h3><span class="bold">1 Asteroids</span> $0.25</h3>
        </div>
        
    </div>
    
    <div class="row">
        <h1>Party Packages</h1>
        <div class="col-4">
            <h2>Pluto Package</h2>
            <p>Inlcudes one serving of a main and side per astronaut, unlimited drinks, and 30 asteroids</p>
            <p>Starting from $12.99*</p>
        </div>
        <div class="col-4">
            <h2>Earth Package</h2>
            <p>Inlcudes 2 servings of a main and one side per astronaut, unlimited drinks, goodie bag, and 50 asteroids</p>
            <p>Starting from $16.99*</p>
        </div>
        <div class="col-4">
            <h2>Jupiter Package</h2>
            <p>All-you-can-eat mains and sides, unlimited drinks, goodie bag, and 100 asteroids</p>
            <p>Starting from $19.99*</p>
        </div>
    </div>
    <div class="row btn-wrap">
        <a href="/packages"><div class="col-6"><div class="button">Learn More</div></div></a>
        <a href="/reserve"><div class="col-6"><div class="button">Reserve Now</div></div></a>
    </div>
    
    <div id="main-games" class="row">
        <h1>Games</h1>
        <div class="parallax parallax-1">Toss Into Space</div>
        <div class="parallax parallax-2">Basketball</div>
        <div class="parallax parallax-3">Skeeball</div>
        <div class="parallax parallax-4">Air Hockey</div>
        <div class="parallax parallax-5">Spaceship Racing</div>
        <div class="parallax parallax-6">Asteroid Belt Maze</div>
    </div>
    <div class="row">
        <a href="/games"><div class="col-12 button">See More Games</div></a>
    </div>
    
    
    
</div>

<?php
include "$inc/footer.php";    
?>
