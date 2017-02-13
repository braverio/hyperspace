<?php
require "../includes/common.php";

$title = "About";
include "$inc/header.php";
?>

<h1>About Us</h1>
    <div>
        <div style="width: 70%; float: left; margin-left: 3em; margin-right: 1em;">
            <h2>Our Story</h2>
            <p>Growing up, I didn't get to watch Neil Armstrong and Buzz Aldrin take a giant leap for mankind. I didn't get to watch the Apollo 11 Moon Landing, but this hasn't stopped me from pursuing what I love. I've always been fascinated by our stars
                and planets and galaxy, and luckily, my interests have passed on to my children. Without a doubt, my chilren are my world. I've combined my two passions to create HyperSpace so that every child in our community will have a fun and safe
                place to explore the world. So come on by so that we can show you what "out of this world" really means.</p>
            <h2>Who We Are </h2>
            <p>Since our inception in 2016, HyperSpace has continually cultivated a fun environment in which both children and adults can bond over games and food. We aspire to transport our passengers into another realm and to believe that not even the
                sky's the limit!. Check out our commodities below and be sure to make a reservation for any special events or for any large groups.</p>
        </div>
        <div>
            <div style="height: 1em"></div>
            <div style="text-align: center">
                <h3>Our Team</h3>
                <img style="height:8em; border-radius: 75%; border: 2px solid white" src="images/girl.jpg">
                <div style="height:0.2em"></div>
                <h4>Lisa & Henry</h4>
                <div style="height:0.4em"></div>
                <img style="height:8em; border-radius: 75%; border: 2px solid white" src="images/guy.jpg">
            </div>
        </div>
    </div>

    <div style="width: 100%; overflow: hidden; margin-left: 1em; ">
        <div style="width: 50%; float: left;">
            <a href="menu.html">
                <div class="aboutbuttons">Browse our Menu</div>
            </a>
        </div>
        <div>
            <a href="games.html">
                <div class="aboutbuttons">Browse our Games</div>
            </a>
        </div>
    </div>
<?php
include "$inc/footer.php";    
?>
