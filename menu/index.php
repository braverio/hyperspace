<?php
require "../includes/common.php";

$title = "Menu"
include "$inc/header.php";
?>

<script src="/scripts/jquery-ui/jquery-ui.min.js"></script>
<script>
$(function(){
  $(".tabs").tabs();
});
</script>

<div class="navbaroffset"></div>
<div clas="content-wrap container">
    <div class="tabs">
        <ul>
            <li class="button"><a href="#snacks">Snack Bar</a></li>
            <li class="button"><a href="#mains">Mains</a></li>
            <li class="button"><a href="#sides">Sides</a></li>
        </ul>
        <div id="snacks">
            <h1>The Snack Bar</h1>
            <div class="container">
                <div style="clear: both;">
                    <div class="col-3 pics" id="poprocks">
                        <h2>Pop Rocks</h2>
                        <h3>$1.00</h3>
                    </div>
                    <div class="col-3 pics" id="earthcookie">
                        <h2>Earth Cookie</h2>
                        <h3>$1.50</h3>
                    </div>
                    <div class="col-3 pics" id="fruitrocket">
                        <h2>Fruit Rocket</h2>
                        <h3>$2.00</h3>
                    </div>
                </div>
                <div style="clear:both">
                    <div class="col-3 pics" id="starcookie">
                        <h2>Star Cookie</h2>
                        <h3>$1.25</h3>
                    </div>
                    <div class="col-3 pics" id="planetlollipop">
                        <h2>Planet Lollipop</h2>
                        <h3>$0.50</h3>
                    </div>
                    <div class="col-3 pics" id="galaxymuffin">
                        <h2>Galaxy Muffin</h2>
                        <h3>$1.00</h3>
                    </div>
                </div>
                <div style="clear:both">
                    <div class="col-3 pics" id="jello">
                        <h2>Alien Jell-O</h2>
                        <h3>$1.50</h3>
                    </div>
                    <div class="col-3 pics" id="astronaut">
                        <h2>Astronaut Cookie</h2>
                        <h3>$2.00</h3>
                    </div>
                    <div class="col-3 pics" id="caramelapple">
                        <h2>Caramel Galaxy Apple</h2>
                        <h3>$2.00</h3>
                    </div>
                </div>
                <div style="clear:both">
                    <div class="col-3 pics" id="moonrock">
                        <h2>Moon Rock</h2>
                        <h3>$0.25</h3>
                    </div>
                    <div class="col-3 pics" id="ics">
                        <h2>Space Ice Cream Sandwich</h2>
                        <h3>$2.00</h3>
                    </div>
                    <div class="col-3 pics" id="moonpie">
                        <h2>Moon Pie</h2>
                        <h3>$1.00</h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="mains">
            <div class="whole">
                <h2 class="foodbar">Mains</h2>
                <div>
                    <div class="col-1"></div>
                    <div class="col-3">
                        <img src="images/rocketdog.jpg" class="limgwa">
                        <h3>Rocket Dog</h3>
                        <h4>$1.99</h4>
                    </div>
                    <div class="col-4">
                        <img src="images/pizza.jpg" class="limgwa">
                        <h3>Pizza (Slice/Whole)</h3>
                        <h4>$2.49/$5.99-$19.99</h4>
                    </div>
                    <div class="col-3">
                        <img src="images/chicken.jpg" class="limgwa">
                        <h3>Chicken Strips/Wings</h3>
                        <h4>$6.99-$11.99</h4>
                    </div>
                </div>
                <div style="clear:both">
                    <div class="col-1"></div>
                    <div class="col-3">
                        <img src="images/burger.jpeg" class="imgwa">
                        <h3>Space Burger/Sliders</h3>
                        <h4 class="lastrow">$3.99-$5.49</h4>
                    </div>
                    <div class="col-4">
                        <img src="images/sandwich.jpg" class="imgwa">
                        <h3>Sandwiches</h3>
                        <h4 class="lastrow">$2.99</h4>
                    </div>
                    <div class="col-3">
                        <img src="images/pasta.jpeg" class="imgwa">
                        <h3>Pasta (S/M/L)</h3>
                        <h4 class="lastrow">$5.99-$12.99</h4>
                    </div>
                </div>
            </div>
        </div>
        <div id="sides">
            <div class="whole">
                <h2 class="foodbar">Sides</h2>
                <div style="clear:both">
                    <div class="col-1"></div>
                    <div class="col-3">
                        <img src="images/fries.jpeg" class="limgwa">
                        <h3>French Fries (S/M/L)</h3>
                        <h4>$1.00-$1.89</h4>
                    </div>
                    <div class="col-4">
                        <img src="images/onionring'.jpg" class="limgwa">
                        <h3>Onion Rings (S/M/L)</h3>
                        <h4>$1.00-$1.89</h4>
                    </div>
                    <div class="col-3">
                        <img src="images/crescentroll.jpg" class="limgwa">
                        <h3>Crescent Rolls</h3>
                        <h4>$2.49</h4>
                    </div>
                </div>
                <div style="clear:both">
                    <div class="col-1"></div>
                    <div class="col-3">
                        <img src="images/salad.jpeg" class="imgwa">
                        <h3>Salad (S/M/L)</h3>
                        <h4 class="lastrow">$2.99-$5.99</h4>
                    </div>
                    <div class="col-4">
                        <img src="images/soup.jpeg" class="imgwa">
                        <h3>Soup (6 oz.)</h3>
                        <h4 class="lastrow">$2.99</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "$inc/footer.php";    
?>
