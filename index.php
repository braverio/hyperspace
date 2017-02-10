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
                <a href="#1"><div class="button">Learn more</div></a>
            </div>
        </div>
        </div>
    </div>
    <div id="1" class="row">
        <img src="https://placeholt.it/100x100?text=what">
        <h1>What We Offer</h1>
        <div class="col-3 circle">
            <img src="https://placeholt.it/100x100?text=what">
        </div>
        <div class="col-3 circle">
            <img src="https://placeholt.it/100x100?text=what">
        </div>
        <div class="col-3 circle">
            <img src="https://placeholt.it/100x100?text=what">
        </div>
        <div class="col-3 circle">
            <img src="https://placeholt.it/100x100?text=what">
        </div>
    </div>
</div>

<?
include "$inc/footer.php";    
?>