<?php 
    include('includes/header.php');
    include('includes/navigation.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<main>
    <!-- picture -->
    <div class="pagePics">
        <span class="pageHeaders">Contact</span>
    </div>
    <img src="rope1.png" alt="rope graphic" class="rope" />
    <!-- drop Downs -->
    <section class="mainWrapper sectionBorder">
        <div class="contactFlex">
            <div id="contactMessage">
                <h1 id="contact-us">Let us know something!</h1>
                <form action="mail.php" method='post' class="cf">
                <div class="half left cf">
                    <input type="text" id="fname" name="fname" placeholder="First Name" required>
                    <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="half right cf">
                    <textarea name="message" type="text" id="message" placeholder="Message" required></textarea>
                </div>
                <input type="submit" value="Submit" id="input-submit" name='send'>
                </form>
            </div>
            <div id="flexContactInfo">
                <div class="contactPara">
                    <h1>Sandy Downs</h1>
                    <p>6855 S 15th E, Idaho Falls, ID</p>
                    <p>Phone: (208) 612-8480</p>
                    <p>Fax:	(208) 612-8179</p>
                </div>
                <div class="contactPara">
                    <h1>Office</h1>
                    <p>520 Memorial Drive, Idaho Falls, ID</p>
                    <p>Phone: (208) 612-8480</p>
                    <p>Fax:	(208) 612-8179</p>
                </div>
            </div>
        </div>
            <iframe class="contactMap" src="https://maps.google.com/maps?hl=en&amp;q=6855%20S%2015th%20E%2C%20Idaho%20Falls%2C%20ID%2083401+()&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></div><div style='overflow:hidden;'><div id='gmap_canvas' style='height:100%;width:100%;'></div></div><small>Powered by <a href="https://www.embedgooglemap.co.uk">Embed Google Map</a></small></div></iframe>
    </section>
</main>
<?php 
    include('includes/footer.php');
?>