<footer>
    <div class="container row">
        <div class="col-4">
            <h2>See us on Social Media</h2>
            <a href="https://facebook.com/hyperspaceblastoff" target="_blank"><img src="/images/facebook.svg" class="sm"></a>
            <a href="https://twitter.com/hyperspace_club" target="_blank"><img src="/images/twitter.svg" class="sm"></a>
            <a href="https://www.instagram.com/hyperspace_club/" target="_blank"><img src="/images/instagram.svg" class="sm"></a>
        </div>
        <div class="col-4">
            <h2>Hours of Operation</h2>
            <p>Mon to Thurs: 11am to 10pm</p>
            <p>Fri to Sun: 9am to 11pm</p>
            <p id="isOpen"></p>
            <script>
                var date = new Date();
                var hour = date.getHours();
                var isWeekend = ((date.getDay == 0) || (date.getDay >= 5 && date.getDay <=6));
                var isOpen = false;
                if (!isWeekend){
                    if (hour >= 11  && hour < 22)
                        isOpen = true;
                    else
                        isOpen = false;
                }
                else{
                    if (hour >= 9 && hour <= 23)
                        isOpen = true;
                    else
                        isOpen = false;
                }
                if (isOpen){
                    document.getElementById("isOpen").innerHTML = "We are currently open! Come in!";
                }
                else
                    document.getElementById("isOpen").innerHTML = "We are currently closed for the day!";
            </script>
        </div>
        <div class="col-4">
            <h2>Contact us</h2>
            <p><a href="/contact/">Contact form</a></p>
            <p>1.HYP.ERS.PACE</p>
            <p>1.497.377.7223</p>
            <p>13 Apollo Rd</p>
            <p>Cypress, CA 90630</p>
        </div>
        <div class="container row">
            <p>All products depicted on this website are ficticious and are for the FBLA 2017 Website Design Competition only.</p>
            <p>All media on this page are licensed under Creative Commons or are created and modified by the authors of this page.</p>
        </div>
    </div>
</footer>