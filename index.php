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
                <img src="/images/logo-med.png">
                <div class="container">
                    <h2 style="padding: 1em 0em 0em; color:#ccc; font-size: 1.5em;">Where not even the skies can limit you.</h2>
                </div>
            </div>
            <div class="more">
                <a href="#1"><div class="button" style="width: 5em;">Learn more</div></a>
            </div>
        </div>
        </div>
    </div>
    <div id="1" class="row container">
        <img src="https://placehold.it/100x100?text=what">
        <h1>What We Offer</h1>
        <div class="col-3 circle">
            <img src="https://placehold.it/100x100?text=what">
            <h2>Family</h2>
            <p>It's important to me that you're happy. Here's something that's fun. As trees get older they lose their chlorophyll. At home you have unlimited time.</p>
        </div>
        <div class="col-3 circle">
            <img src="https://placehold.it/100x100?text=what">
            <h2>Parties</h2>
            <p>There isn't a rule. You just practice and find out which way works best for you. There are no mistakes. You can fix anything that happens. It's beautiful - and we haven't even done anything to it yet. Let's do that again. And just raise cain.</p>
        </div>
        <div class="col-3 circle">
            <img src="https://placehold.it/100x100?text=what">
            <h2>Food</h2>
            <p>You have to allow the paint to break to make it beautiful. Only eight colors that you need. In your world you have total and absolute power. There's not a thing in the world wrong with washing your brush. It's cold, but it's beautiful. Let's make some happy little clouds in our world.</p>
        </div>
        <div class="col-3 circle">
            <img src="https://placehold.it/100x100?text=what">
            <h2>Games</h2>
            <p>Everything is happy if you choose to make it that way. Anyone can paint. The little tiny Tim easels will let you down. Everyone is going to see things differently - and that's the way it should be.</p>
        </div>
    </div>
    
    <div id="admissions" class="row">
        <h1>General Admission</h1>
        <div class="col-6">
            <p>Just go ahead and load your Space Card with ateroids, where you can spend them on games. You may do this using our online system or just complete your transaction at the check-in desk. From these asteroids, you can gain tickets from playing and acheiving high scores!</p>
        </div>
        <div class="col-6">
            <h3><span class="bold">100 Asteroids</span> $17.99</h3>
            <h3><span class="bold">75 Asteroids</span> $14.99</h3>
            <h3><span class="bold">50 Asteroids</span> $9.99</h3>
            <h3><span class="bold">1 Asteroids</span> $0.25</h3>
        </div>
        <a href="/manage">Manage my Space Card</a>
        
    </div>
    
    <div class="row">
        <h1>Party Packages</h1>
    </div>
    
    <div class="row">
        <h1>Games</h1>
    </div>
    
    <div class="row">
        <div class="col-6">
            <h1>E-Club</h1>
        </div>
        <div class="col-6">
            <h1>Reviews</h1>
        </div>
    </div>
    
    
</div>

<?
include "$inc/footer.php";    
?>