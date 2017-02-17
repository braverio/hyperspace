<?php
require "../includes/common.php";

$title = "Menu";
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
        <h1>Our Food Items</h1>
        <div class="tabs">
            <ul class="row">
                <li>
                    <div class="col-4"><a class="button" href="#mains">Mains</a></div>
                </li>
                <li>
                    <div class="col-4"><a class="button" href="#sides">Sides</a></div>
                </li>
                <li>
                    <div class="col-4"><a class="button" href="#snacks">Snack Bar</a></div>
                </li>
            </ul>
            <div id="snacks" class="foood row">
                <div class="foodhead">
                    <h2>Snack Bar</h2>
                    <h3>Come to our snack bar, located next to the prizes and ticket payout area, to experience what it really feels like to live in space!</h3>
                </div>
                <div class="parallax parallax-7">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Pop Rocks</h1>
                            <h2>$1.00</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-8">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Earth Cookie</h1>
                            <h2>$1.50</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-9">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Fruit Rocket</h1>
                            <h2>$2.00</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-10">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Star Cookie</h1>
                            <h2>$1.25</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-11">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Planet Lollipop</h1>
                            <h2>$0.50</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-12">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Galaxy Muffin</h1>
                            <h2>$1.00</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-13">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Alien Jell-O</h1>
                            <h2>$1.50</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-14">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Astronaut Cookie</h1>
                            <h2>$2.00</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-15">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Caramel Galaxy Apple</h1>
                            <h2>$2.00</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-16">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Moon Rock</h1>
                            <h2>$0.25</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-17">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Space Ice Cream</h1>
                            <h2>$1.75</h2>
                        </div>
                    </div>
                </div>
                <div class="parallax parallax-18">
                    <div class="black">
                        <div class="vertical-center">
                            <h1>Moon Pie</h1>
                            <h2>$1.00</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mains" class="foood row">
                <div class="foodhead">
                    <h2>Mains</h2>
                    <h3>Each main comes with a refillable drink. Feel free to dine in our individual pods or in the dining room.</h3>
                </div>
                <div style="position: relative">
                    <div class="parallax parallax-19">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>Rocket Dog</h1>
                                <h2>$1.99</h2>
                            </div>
                        </div>
                    </div>
                    <div class="parallax parallax-20">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>Pizza (Slice/Whole)</h1>
                                <h2>$2.49 / $5.99 - $19.99</h2>
                            </div>
                        </div>
                    </div>
                    <div class="parallax parallax-21">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>Chicken Strips/Wings</h1>
                                <h2>$6.99 - $11.99</h2>
                            </div>
                        </div>
                    </div>
                    <div class="parallax parallax-22">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>Space Burgers/Sliders</h1>
                                <h2>$3.99 - $5.49</h2>
                            </div>
                        </div>
                    </div>
                    <div class="parallax parallax-23">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>Sandwich</h1>
                                <h2>$2.99</h2>
                            </div>
                        </div>
                    </div>
                    <div class="parallax parallax-24">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>Pasta (S/M/L)</h1>
                                <h2>$5.99 - $12.99</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sides" class="foood row">
                <div class="foodhead">
                    <h2>Sides</h2>
                    <h3>You can't ever go wrong with sides. Take your pick, and check out the snack bar as well!</h3>
                </div>
                <div style="position: relative">
                    <div class="parallax parallax-25">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>French Fries (S/M/L)</h1>
                                <h2>$1.00 - $1.89</h2>
                            </div>
                        </div>
                    </div>
                    <div class="parallax parallax-26">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>Onion Rings (S/M/L)</h1>
                                <h2>$1.00 - $1.89</h2>
                            </div>
                        </div>
                    </div>
                    <div class="parallax parallax-27">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>Crescent Rolls</h1>
                                <h2>$2.49</h2>
                            </div>
                        </div>
                    </div>
                    <div class="parallax parallax-28">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>Salad (S/M/L)</h1>
                                <h2>$2.99 - $5.99</h2>
                            </div>
                        </div>
                    </div>
                    <div class="parallax parallax-29">
                        <div class="black">
                            <div class="vertical-center">
                                <h1>Soup (6 oz)</h1>
                                <h2>$2.99</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "$inc/footer.php";    
?>
