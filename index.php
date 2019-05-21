<?php 
    include('includes/header.php');
    include('includes/navigation.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<main id="scrollbox">
<!-- main video, wrapper, button, & logo -->
    <img src="logos/mainLogo.png" alt="warbonnetroundup logo" id="videoLogo" />
    <a href="https://www.eventbrite.com/e/idahos-oldest-rodeo-the-war-bonnet-round-up-2019-tickets-52368824564" target="_blank"><button class="ticketBtn"><span>Buy Tickets</span></button></a>

    <div id="mainVideoWrapper">
        <video src="videos/mainVideo.mp4" type="video/mp4" id="mainVideo" preload="auto" playsinline autoplay muted loop></video>
    </div>

    <img src="images/rope.png" alt="rope graphic" class="rope" />

    <section class="mainWrapper sectionBorder" id="introAbout">
        <!-- intro para -->
        <span class="headerText">About</span>
        <hr>
        <div class="wrapperContent">
            <div class="introPara">
                <p>The War Bonnet Round Up is Idaho's Oldest Rodeo. Held every year the first weekend in August, Idaho's Oldest Rodeo is a PRCA sanctioned event and we aim to bring best rodeo contract personnel, talent, and stock to compete in our family-friendly atmosphere. Plan on our 108th Celebration on July 31, to August 3, 2019.</p>

                <p>Each night of the rodeo gates will open at 5:00 pm with pre-rodeo events at 7:00 pm and the main PRCA rodeo to follow at 8:00 pm. Come early to get the best seats, enjoy the food, as well as the vendors at the Bank of Idaho Arena at Sandy Downs.</p>

                <p>The Bank of Idaho Arena at Sandy Downs is located at 1860 E. 65th S. Idaho Falls, ID 83402. From I-15 take Exit 113 and turn East. Go 6 miles and rodeo grounds will be on your right.</p>
            </div>
            <div class="introTicketsImg">
                <a href="https://www.eventbrite.com/e/idahos-oldest-rodeo-the-war-bonnet-round-up-2019-tickets-52368824564" target="_blank">
                    <img src="images/tickets.png" alt="tickets icon" class="ticketsImg" />
                </a>
            </div>
        </div>
        <a href="about.php"><button class="allBtns"><span>Read More</span></button></a>
    </section>

    
    <section class="mainWrapper sectionBorder">
        <span class="headerText">Our Events</span>
        <hr>

        <section class="eventsWrapper">
        <!-- downtown idaho falls kickoff -->
            <section class="events">
                <h1 class="eventsText">July 31 | Downtown Idaho Falls Kickoff</h1>
                <ul class="eventColor">
                    <li class="popupClicked"><a href="#"><img src="images/events/kickoff.jpg" class="eventsImages"></a></li>
                </ul>
                <div class="containerPopup">
                    <div class="flexPopup">
                        <span>July 31 | Downtown Idaho Falls Kickoff </span>
                        <img src="images/icons/close.png" class="closePopups"/>
                    </div>
                    <hr>
                    <img src="images/events/kickoff.jpg" class="imagesPopups" />
                    <p class="paraPopups">This fun evening for the whole family includes horse-drawn trolley rides, face painting, a photo booth, carnival games, bounce houses, a mechanical bull (small fee per ride), and rodeo clowns and local mascots will be in attendance. One of the main attractions will be a downtown arena featuring free-style bullfighting with real Mexican fighting bulls and mini bull riding. At the plaza, you’ll enjoy live country music and a live wild west shoot-out!!</p>
                    <p> This event is FREE for the entire family and will be on B Street in between Capital Ave and Park Ave.</p>
                    <br>
                    <h1 class="headerPopups"> 5:00 P.M.</h1>
                    <ul>
                        <li class="listPopups"> - Event Starts</li>
                    </ul>
                    <hr style="width: 75%;">
                    <h1 class="headerPopups"> 5:30 P.M – 6:10 P.M. </h1>
                    <ul>
                        <li class="listPopups"> - Mini bull riding/fighting</li>
                    </ul>
                    <hr style="width: 75%;">
                    <h1 class="headerPopups"> 6:15 P.M – 6:25 P.M.</h1>
                    <ul>
                        <li class="listPopups"> - Shootout at Civitan Plaza</li>
                    </ul>
                    <hr style="width: 75%;">
                    <h1 class="headerPopups"> 6:45 P.M – 7:25 P.M.</h1>
                    <ul>
                        <li class="listPopups"> - Mini-bull riding/fighting</li>
                    </ul>
                    <br>
                </div>
            </section>
        <!-- Family Night -->
            <section class="events">
                <h1 class="eventsText">Aug 1 | Family Night</h1>
                <ul class="eventColor">
                    <li class="popupClicked1"><a href="#"><img src="images/events/family.jpg" class="eventsImages"></a></li>
                </ul>
                <div class="containerPopup1">
                    <div class="flexPopup">
                        <span>Aug 1 | Family Night</span>
                        <img src="images/icons/close.png" class="closePopups1"/>
                    </div>
                    <hr>
                    <img src="images/events/family.jpg" class="imagesPopups" />
                    <p class="paraPopups">Join us on Thursday Night for Family Night here at Idaho’s Oldest Rodeo! On Thursday, from 5 pm to 8 pm, we will have FREE activities for all ages, such as:</p>
                    <ul class="listItemsPopups">
                        <li>Petting Zoo</li>
                        <li>Milk Jug Toss</li>
                        <li>Bean Bag Toss (Cornhole)</li>
                        <li>Home Depot Arts & Crafts</li>
                        <li>Make Your Own Brand</li>
                        <li>Dance Group Lessons</li>
                        <li>Face Painting</li>
                        <li>Dunk Tank</li>
                        <li>Fishing</li>
                        <li>Panning for Gold</li>
                    </ul>
                    <br>
                    <h1 class="headerPopups"> 5:00 P.M. – Gates Open</h1>
                    <ul>
                        <li class="listPopups"> - Mechanical Bull</li>
                        <li class="listPopups"> - Games</li>
                        <li class="listPopups"> - Food</li>
                        <li class="listPopups"> - Bounce House</li>
                        <li class="listPopups"> - Vendors</li>
                    </ul>
                    <hr style="width: 75%;">
                    <h1 class="headerPopups"> 7:00 P.M. - Youth Rodeo </h1>
                    <ul>
                        <li class="listPopups"> - Mutton Bustin’ Registration at Idaho Falls Rec</li>
                        <li class="listPopups"> - Center Lamb & Calf Scrambles Sign up at Rodeo</li>
                        <li class="listPopups"> - Mini Bull Riding</li>
                    </ul>
                    <hr style="width: 75%;">
                    <h1 class="headerPopups"> 8:00 P.M. - PRCA Rodeo</h1>
                    <ul>
                        <li class="listPopups"> - Opening</li>
                        <li class="listPopups"> - Wild Horse Race</li>
                        <li class="listPopups"> - Steer Wrestling</li>
                        <li class="listPopups"> - Saddle Bronc Riding</li>
                        <li class="listPopups"> - Team Roping</li>
                        <li class="listPopups"> - Clown Act</li>
                        <li class="listPopups"> - Bareback Riding</li>
                        <li class="listPopups"> - Tie Down Roping</li>
                        <li class="listPopups"> - Women’s Barrel Racing</li>
                        <li class="listPopups"> - Speciality Act</li>
                        <li class="listPopups"> - Bull Riding</li>
                        <li class="listPopups"> - Free Style Bull Fighting</li>
                    </ul>
                    <br>
                </div>
            </section>
        <!-- Tough Enough to Wear Pink Night -->
            <section class="events">
                <h1 class="eventsText">Aug 2 | Tough Enough to Wear Pink Night</h1>
                <ul class="eventColor">
                    <li class="popupClicked2"><a href="#"><img src="images/events/pink.jpg" class="eventsImages"></a></li>
                </ul>
                <div class="containerPopup2">
                    <div class="flexPopup">
                        <span>Aug 2 | Tough Enough to Wear Pink Night</span>
                        <img src="images/icons/close.png" class="closePopups2"/>
                    </div>
                    <hr>
                    <img src="images/events/pink.jpg" class="imagesPopups" />
                    <p class="paraPopups">Wear Pink this Friday Night to show your support in the fight against breast cancer!</p>
                    <br>
                    <h1 class="headerPopups"> 5:00 P.M. – Gates Open</h1>
                    <ul>
                        <li class="listPopups"> - Mechanical Bull</li>
                        <li class="listPopups"> - Games</li>
                        <li class="listPopups"> - Food</li>
                        <li class="listPopups"> - Bounce House</li>
                        <li class="listPopups"> - Vendors</li>
                    </ul>
                    <hr style="width: 75%;">
                    <h1 class="headerPopups"> 6:45 P.M. - Youth Rodeo </h1>
                    <ul>
                        <li class="listPopups"> - Mutton Bustin’ Registration at Idaho Falls Rec</li>
                        <li class="listPopups"> - Center Lamb & Calf Scrambles Sign up at Rodeo</li>
                        <li class="listPopups"> - Mini Bull Riding</li>
                    </ul>
                    <hr style="width: 75%;">
                    <h1 class="headerPopups"> 7:45 P.M. - PRCA Rodeo</h1>
                    <ul>
                        <li class="listPopups"> - Opening</li>
                        <li class="listPopups"> - Wild Horse Race</li>
                        <li class="listPopups"> - Steer Wrestling</li>
                        <li class="listPopups"> - Saddle Bronc Riding</li>
                        <li class="listPopups"> - Team Roping</li>
                        <li class="listPopups"> - Clown Act</li>
                        <li class="listPopups"> - Bareback Riding</li>
                        <li class="listPopups"> - Tie Down Roping</li>
                        <li class="listPopups"> - Women’s Barrel Racing</li>
                        <li class="listPopups"> - Speciality Act</li>
                        <li class="listPopups"> - Bull Riding</li>
                        <li class="listPopups"> - Free Style Bull Fighting</li>
                    </ul>
                    <br>
                </div>
            </section>
        <!-- Salute to the Veterans Night -->
            <section class="events">
                <h1 class="eventsText">Aug 3 | Salute to the Veterans Night</h1>
                <ul class="eventColor">
                    <li class="popupClicked3"><a href="#"><img src="images/events/veteran.jpg" class="eventsImages"></a></li>
                </ul>
                <div class="containerPopup3">
                    <div class="flexPopup">
                        <span>Aug 3 | Salute to the Veterans Night</span>
                        <img src="images/icons/close.png" class="closePopups3"/>
                    </div>
                    <hr>
                    <img src="images/events/veteran.jpg" class="imagesPopups" />
                    <p class="paraPopups">The final night of the 2018 War Bonnet Round Up! Make sure you come and celebrate Veterans, while enjoying an excellent final night!</p>
                    <br>
                    <h1 class="headerPopups"> 5:00 P.M. – Gates Open</h1>
                    <ul>
                        <li class="listPopups"> - Mechanical Bull</li>
                        <li class="listPopups"> - Games</li>
                        <li class="listPopups"> - Food</li>
                        <li class="listPopups"> - Bounce House</li>
                        <li class="listPopups"> - Vendors</li>
                    </ul>
                    <hr style="width: 75%;">
                    <h1 class="headerPopups"> 6:45 P.M. - Youth Rodeo </h1>
                    <ul>
                        <li class="listPopups"> - Mutton Bustin’ Registration at Idaho Falls Rec</li>
                        <li class="listPopups"> - Center Lamb & Calf Scrambles Sign up at Rodeo</li>
                        <li class="listPopups"> - Mini Bull Riding</li>
                    </ul>
                    <hr style="width: 75%;">
                    <h1 class="headerPopups"> 7:45 P.M. - PRCA Rodeo</h1>
                    <ul>
                        <li class="listPopups"> - Opening</li>
                        <li class="listPopups"> - Wild Horse Race</li>
                        <li class="listPopups"> - Steer Wrestling</li>
                        <li class="listPopups"> - Saddle Bronc Riding</li>
                        <li class="listPopups"> - Team Roping</li>
                        <li class="listPopups"> - Clown Act</li>
                        <li class="listPopups"> - Bareback Riding</li>
                        <li class="listPopups"> - Tie Down Roping</li>
                        <li class="listPopups"> - Women’s Barrel Racing</li>
                        <li class="listPopups"> - Speciality Act</li>
                        <li class="listPopups"> - Bull Riding</li>
                        <li class="listPopups"> - Free Style Bull Fighting</li>
                    </ul>
                    <br>
                </div>
            </section>
        </section>
        <a href="events.php"><button class="allBtns"><span>See Events</span></button></a>
    </section>
    <img src="images/rope.png" alt="rope graphic" class="rope" />
    <!-- parallax scrolling -->
    <div class="parallaxHome"></div>
    <!-- sponsors -->
    <img src="images/rope.png" alt="rope graphic" class="rope" />
    <section class="mainWrapper sectionBorder">
            <span class="headerText">Our Sponsors</span>
            <hr>
    
        <div class="sponsors slider">
            <div>
                <a href="https://www.toyota.com/" target="_blank"><img src="images/sponsors/sponsor_33.png"></a>
            </div>
            <div>
                <a href="https://www.bankofidaho.com/" target="_blank"><img src="images/sponsors/sponsor_32.png"></a>
            </div>
            <div>
                <a href="https://eirmc.com/" target="_blank"><img src="images/sponsors/sponsor_1.jpg"></a>
            </div>
            <div>
                <a href="http://www2.sbtribes.com/" target="_blank"><img src="images/sponsors/sponsor_2.png"></a>
            </div>
            <div>
                <a href="https://www.shobangaming.com/" target="_blank"><img src="images/sponsors/sponsor_3.jpg"></a>
            </div>
            <div>
                <a href="http://tecdistributing.com/" target="_blank"><img src="images/sponsors/sponsor_4.jpg"></a>
            </div>
            <div>
                <a href="https://www.cableone.net/" target="_blank"><img src="images/sponsors/sponsor_5.jpg"></a>
            </div>
            <div>
                <a href="https://www.localnews8.com/" target="_blank"><img src="images/sponsors/sponsor_6.png"></a>
            </div>
            <div>
                <a href="https://www.marriott.com/hotels/travel/idash-springhill-suites-idaho-falls/?scid=bb1a189a-fec3-4d19-a255-54ba596febe2" target="_blank"><img src="images/sponsors/sponsor_7.jpg"></a>
            </div>
            <div>
                <a href="https://1055thehawk.com/" target="_blank"><img src="images/sponsors/sponsor_8.png"></a>
            </div>
            <div>
                <a href="http://99kupi.com/" target="_blank"><img src="images/sponsors/sponsor_9.png"></a>
            </div>
            <div>
                <a href="http://www.rivercountryfm.com/5-2/" target="_blank"><img src="images/sponsors/sponsor_10.jpg"></a>
            </div>
            <div>
                <a href="http://kzbq.com/" target="_blank"><img src="images/sponsors/sponsor_11.jpg"></a>
            </div>
            <div>
                <a href="https://www.postregister.com/" target="_blank"><img src="images/sponsors/sponsor_12.png"></a>
            </div>
            <div>
                <a href="https://www.zionsbank.com/" target="_blank"><img src="images/sponsors/sponsor_13.png"></a>
            </div>
            <div>
                <a href="https://www.iccu.com/" target="_blank"><img src="images/sponsors/sponsor_14.png"></a>
            </div>
            <div>
                <a href="om/global/" target="_blank"><img src="images/sponsors/sponsor_15.png"></a>
            </div>
            <div>
                <a href="https://www.conradbischoff.com/" target="_blank"><img src="images/sponsors/sponsor_16.png"></a>
            </div>
            <div>
                <a href="https://www.bootbarn.com/" target="_blank"><img src="images/sponsors/sponsor_17.png"></a>
            </div>
            <div>
                <a href="http://northhiwaycafe.com/" target="_blank"><img src="images/sponsors/sponsor_18.png"></a>
            </div>
            <div>
                <a href="https://hkcontractors.com/" target="_blank"><img src="images/sponsors/sponsor_19.png"></a>
            </div>
            <div>
                <a href="https://www.woodburycorp.com/" target="_blank"><img src="images/sponsors/sponsor_20.png"></a>
            </div>
            <div>
                <a href="https://www.klim.com/" target="_blank"><img src="images/sponsors/sponsor_21.png"></a>
            </div>
            <div>
                <a href="https://www.calranch.com/" target="_blank"><img src="images/sponsors/sponsor_22.png"></a>
            </div>
            <div>
                <a href="https://www.arnoldmachinerycme.com/default.htm" target="_blank"><img src="images/sponsors/sponsor_23.png"></a>
            </div>
            <div>
                <a href="https://www.rocksolidlandscaper.com/" target="_blank"><img src="images/sponsors/sponsor_24.png"></a>
            </div>
            <div>
                <a href="https://www.westernstatescat.com/" target="_blank"><img src="images/sponsors/sponsor_25.png"></a>
            </div>
            <div>
                <a href="https://www.warbonnetroundup.org/wp-content/uploads/2018/03/cleo.png" target="_blank"><img src="images/sponsors/sponsor_26.png"></a>
            </div>
            <div>
                <a href="https://www.planetsprucetrees.com/" target="_blank"><img src="images/sponsors/sponsor_27.png"></a>
            </div>
            <div>
                <a href="https://www.titleonecorp.com/" target="_blank"><img src="images/sponsors/sponsor_28.jpg"></a>
            </div>
            <div>
                <a href="https://www.cabelas.com/stores/Idaho/Ammon/066.jsp" target="_blank"><img src="images/sponsors/sponsor_29.png"></a>
            </div>
            <div>
                <a href="https://www.sportsmanswarehouse.com/" target="_blank"><img src="images/sponsors/sponsor_30.png"></a>
            </div>
            <div>
                <a href="https://oldcastleprecast.com/region/rocky-mountain/" target="_blank"><img src="images/sponsors/sponsor_31.jpg"></a>
            </div>
        </div>
        <a href="sponsors.php"><button class="allBtns"><span>See Sponsors</span></button></a>
    </section>
</main>
<?php 
    include('includes/footer.php');
?>