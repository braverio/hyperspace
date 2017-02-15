<!DOCTYPE html>
<html>

<head>
    <title>Hyperspace &raquo; <?php echo $title?></title>
    <link rel="stylesheet" href="/styles/responsive.css">
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="icon" href="/images/favicon.svg">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="/scripts/scroll.js"></script>
    <meta name="viewport" content="width=device-width, intial-scale = 1.0">
</head>

<body>
    <div id="navbar-wrap">
    <nav id="navbar" class="hide-on-mobile">
        <ul>
            <li>
                <a href="/"><img src="/images/favicon.svg"></a>
            </li>
            <li>
                <a href="/about">About</a>
                <ul>
                    <li> <a href="/about">About Us</a> </li>
                    <li> <a href="/contact">Contact</a> </li>
                </ul>
            </li>
            <li>
                <a href="/games">What to Expect</a>
                <ul>
                    <li> <a href="/games">Games</a></li>
                    <li> <a href="/menu">Menu</a></li>
                </ul>
            </li>
            <li>
                <a href="/reserve">Reserve</a>
            </li>
        </ul>
    </nav>
        
    <nav class="hide-on-desktop">
        <script>
            function toggle(){
                $("#hamburger").slideToggle();
            }
        </script>
        <img src="/images/hamburger.svg" id="toggleMenu" onclick="toggle()">
        <ul id="hamburger" class="hidden"> 
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/gmaes">Games</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/reserve">Reservations</a></li>
	   </ul>
    </nav>
    </div>
    
    <?php
    session_start();
    if(isset($_SESSION['flash'])){?>
    
    <div class="row container">
        <h2>
            <?php
                echo $_SESSION['flash'];
            ?>
        </h2>
    </div>
    
    <?php
        $_SESSION['flash'] = "";
        }
    ?>