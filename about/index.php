<?php
require "../includes/common.php";

$title = "About";
include "$inc/header.php";
?>
<div style="height:1em"></div>
<h1 style="font-size: 7em">About Us</h1>
    <div id="about-wrap" class="container row">
        <div class="col-9">
            <h2>Our Story</h2>
            <p class="left-text">Growing up, I didn't get to watch Neil Armstrong and Buzz Aldrin take a giant leap for mankind. I didn't get to watch the Apollo 11 Moon Landing, but this hasn't stopped me from pursuing what I love. I've always been fascinated by our stars and planets and galaxy, and luckily, my interests have passed on to my children. Without a doubt, my chilren are my world. I've combined my two passions to create HyperSpace so that every child in our community will have a fun and safe place to explore the world. So come on by so that we can show you what "out of this world" really means.</p>
            <h2>Who We Are</h2>
            <p class="right-text">Since our inception in 2016, HyperSpace has continually cultivated a fun environment in which both children and adults can bond over games and food. We aspire to transport our passengers into another realm and to believe that not even the sky's the limit! Check out our commodities below and be sure to make a reservation for any special events or for any large groups.</p>
            <h2>What We Do</h2>
            <p class="left-text">Our goal is to make your family's day the best it can be! Giving back to the community is something we've always wanted to do. By providing fun games, delicious foods, and great parties, we can take the meaning of enjoyment to new heights!</p>
        </div>
        <div class="col-3">
            <h2>Our Team</h2>
            <div id="staff">
                <div class="circle">
                    <img src="/images/girl.jpg">
                </div>
                <h3>Lisa Goodwin, Founder</h3>
                <div class="circle">
                    <img src="/images/guy.jpg">
                </div>
                <h3>Henry Marksalv, Manager</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <a href="/menu">
                <div class="button">Browse our Menu</div>
            </a>
        </div>
        <div class="col-6">
            <a href="/games">
                <div class="button">Browse our Games</div>
            </a>
        </div>
    </div>
<?php
include "$inc/footer.php";    
?>
