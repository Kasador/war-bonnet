<!-- main menu desktop -->
<header class="mainMenu">
    <!-- menu items and bar -->
    <div class="menuBar">
        <!-- menu items wrapper -->
        <div class="menuWrapper">
        <!-- main logo -->
            <img src="logos/mainLogo2_v2.png" alt="Idaho's oldest rodeo" id="menuLogo" class="logoClicked" />
            <!-- main menu -->
            <ul class="menuFlex">
                <li class="aboutDropDown"><a href="about.php" class="dropDownLinks">About &#8675;</a>
                <!-- sub menu -->
                    <ul class="aboutDropItems">
                        <a href="about.php"><li>About Us</li></a>
                        <a href="acts.php"><li>Personnel & Specialty Acts</li></a>
                        <a href="royalty.php"><li>Rodeo Royalty</li></a>
                        <a href="contestants.php"><li>List of Contestants</li></a>
                        <a href="vendors.php"><li>Vendors</li></a>
                        <a href="sponsors.php"><li>Sponsors</li></a>
                        <a href="results.php"><li>Rodeo Results</li></a>
                    </ul>
                </li>
                <li class="aboutDropDown"><a href="events.php" class="dropDownLinks">Events & Schedule &#8675;</a>
                <!-- sub menu -->
                    <ul class="aboutDropItems">
                        <a href="events.php"><li>Events & Schedule</li></a>
                        <a href="bullfighters.php"><li>Bullfighters Only</li></a>
                        <a href="race.php"><li>World's Richest Wild Horse Race</li></a>
                    </ul>
                </li>
                <li class="aboutDropDown"><a href="visitors.php" class="dropDownLinks">Visitor Information &#8675;</a>
                <!-- sub menu -->
                    <ul class="aboutDropItems">
                        <a href="visitors.php"><li>Plan Your Trip</li></a>
                        <a href="tickets.php"><li>Ticket Information</li></a>
                        <a href="faq.php"><li>FAQ</li></a>
                        <a href="volunteers.php"><li>Volunteer</li></a>
                    </ul>
                </li>
                <a href="contact.php"><li>Contact</li></a>
            </ul>
        </div>
    </div>
    <!-- timer menu and button -->
    <div id="timerMenu">
        <!-- timer/count down to event wrapper -->
        <div class="timerWrapper">
            <span class="timer eventDate"></span>
            <span class="timer spacer"> | </span>
            <span id="countDown" class="timer">Countdown Timer to Event</span>
            <div class="containerBtnMenu">
                <a href="https://www.eventbrite.com/e/idahos-oldest-rodeo-the-war-bonnet-round-up-2019-tickets-52368824564" target="_blank"><button class="ticketBtnMenu"><span>Buy Tickets</span></button></a>
            </div>
        </div>
        <!-- mobile menu ham --> 
        <div class="mainMenuMobile">
            <div class="menu cross menu--1">
                <label>
                    <input type="checkbox">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="30" />
                        <path class="line--1" d="M0 40h62c13 0 6 28-4 18L35 35" />
                        <path class="line--2" d="M0 50h70" />
                        <path class="line--3" d="M0 60h62c13 0 6-28-4-18L35 65" />
                    </svg>
                </label>
            </div>
        </div>
    </div>
    <!-- drop down menu --> 
        <div class="dropDownMobile">
            <img src="logos/mainLogo1.jpg" alt="Idaho's oldest rodeo" id="menuLogoMobile" />
            <hr style="width: 70%;">
            <ul class="menuFlexMobile">
                <a href="about.php"><li>About</li></a>
                <a href="events.php"><li>Events & Schedule</li></a>
                <a href="visitors.php"><li>Plan Your Trip</li></a>
                <a href="contact.php"><li>Contact</li></a>
                <div class="containerBtnMobile">
                <a href="https://www.eventbrite.com/e/idahos-oldest-rodeo-the-war-bonnet-round-up-2019-tickets-52368824564" target="_blank"><button class="ticketBtnMobile"><span>Buy Tickets </span></button></a>
                </div>
            </ul>
        </div>
</header>
