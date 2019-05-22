$(document).ready(function () {
    // fade in page on load
    $("body").fadeIn(1000);
    // Store event date in variable, makes it changable
    let eventDate = "July 31, 2019";
    $(".eventDate").html(eventDate);
    // Set the date we're counting down to
    let countDownDate = new Date("Jul 31, 2019").getTime();

    // Update the count down every 1 second
    let x = setInterval(function () {
        // Get todays date and time
        let now = new Date().getTime();

        // Find the distance between now and the count down date
        let distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // if seconds, mins, hrs are less than 10 add zero in front | ex: 9 - return 09
        if (seconds < 10) {
            seconds = "0" + seconds;
        }
        if (hours < 10) {
            hours = "0" + hours;
        }
        if (minutes < 10) {
            minutes = "0" + minutes;
        }

        // Display the result in the element with id="countDown"
        document.getElementById("countDown").innerHTML =
            days +
            "<span class='timerMeasurements'>Days </span>" +
            hours +
            "<span class='timerMeasurements'>Hours </span>" +
            minutes +
            "<span class='timerMeasurements'>Minutes </span>" +
            seconds +
            "<span class='timerMeasurements'>Seconds </span>";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countDown").innerHTML = "Rodeo Has Started!";
        }
    }, 1000);

    // menuBar slide down on load & fade in ticket button
    let menuBar = $(".menuBar");
    let ticketBtn = $('.ticketBtnMenu');

    window.setInterval(function () {
        if ($(window).width() > 951) {
            menuBar.slideDown(1000);
            ticketBtn.animate({ opacity: 1 }, 500);
        } else {
            menuBar.css("display", "none");
            ticketBtn.animate({ opacity: 0 }, 500);
        }
    }, 1000);

    // main menu mobile
    Array.from(document.getElementsByTagName("path")).map(path => {
        console.log(path.getTotalLength());
        const debugPath = path.cloneNode();
        debugPath.classList.add("line--debug");
        if (path.parentNode)
            path.parentNode.insertBefore(debugPath.cloneNode(), path);
    });

    // on click, drop dcown mobile menu
    $("svg").click(function () {
        $(".dropDownMobile").slideToggle(1000);
    });

    // slider on homepage for sponsors
    function createSlick() {
        $(".sponsors")
            .not(".slick-initialized")
            .slick({
                dots: false,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                speed: 300,
                responsive: [{
                    breakpoint: 968,
                    settings: {
                        dots: false,
                        slidesToShow: 2
                    }
                }]
            });
    }

    createSlick();

    //Now it will not throw error, even if called multiple times.
    $(window).on("resize", createSlick);

    // hover over event images
    $(".eventColor a").bind("mouseenter", function () {
        $(this)
            .parent("li")
            .css({
                position: "relative"
            });
        var img = $(this).children("img");
        $("<div />")
            .text(" ")
            .css({
                height: img.height(),
                width: img.width(),
                "border-radius": "10px",
                "background-color": "#DE1D3D",
                position: "absolute",
                top: 0,
                left: 0,
                opacity: 0.0
            })
            .bind("mouseleave", function () {
                $(this).fadeOut("fast", function () {
                    $(this).remove();
                });
            })
            .insertAfter(this)
            .animate({
                opacity: 0.5
            },
                "fast"
            );
    });

    // fade in header text
    (function () {
        $(".pageHeaders")
            .delay(1000)
            .fadeIn(1000);
        setTimeout(function () {
            $(".pageHeaders").css("border-width", "10px");
        }, 2000);
    })();
    // on ticket graphic being clicked, redirect to ticket page
    let ticketGraphic = $('.ticketsImgInfo');
    let eventbrite = "https://www.eventbrite.com/e/idahos-oldest-rodeo-the-war-bonnet-round-up-2019-tickets-52368824564";

    ticketGraphic.on('click', function () {
        window.open(eventbrite, '_blank');
    });
    // on logo being clicked, redirect to index.php
    let logo = $(".logoClicked");
    logo.css("cursor", "pointer");

    $(".logoClicked").on("click", function () {
        window.location.href = "index.php";
    });
    // on logo being clicked, redirect to index.php for mobile
    let logoMobile = $("#menuLogoMobile");
    logoMobile.css("cursor", "pointer");

    logoMobile.on("click", function () {
        window.location.href = "index.php";
    });

    // DRY (Don't Repeat Yourself) coding right here
    // drop down buttons
    $(".mainWrapperDropBtn").on("click", function () {
        $(this)
            .find(".dropDownContent")
            .slideToggle(1000);
        $(this)
            .find(".openBtn")
            .attr("src", "./images/icons/close.png");

        if (
            $(this)
                .find(".openBtn")
                .hasClass("opened")
        ) {
            $(this)
                .find(".openBtn")
                .attr("src", "./images/icons/open.png");
            $(this)
                .find(".openBtn")
                .removeClass("opened");
        } else if (
            !$(this)
                .find(".openBtn")
                .hasClass("opened")
        ) {
            $(this)
                .find(".openBtn")
                .addClass("opened");
        }
    });

    // change image of header on page on url
    if (window.location.href.indexOf("visitors.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/plan.jpg)");
    }
    if (window.location.href.indexOf("events.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/events.jpg)");
    }
    if (window.location.href.indexOf("contact.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/contact.jpg)");
    }
    if (window.location.href.indexOf("acts.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/acts.jpg)");
    }
    if (window.location.href.indexOf("royalty.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/royalty.jpg)");
    }
    if (window.location.href.indexOf("contestants.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/contestants.jpg)");
    }
    if (window.location.href.indexOf("vendors.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/vendors.jpg)");
    }
    if (window.location.href.indexOf("sponsors.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/sponsors.jpg)");
    }
    if (window.location.href.indexOf("results.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/results.jpg)");
    }
    if (window.location.href.indexOf("faq.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/faq.jpg)");
    }
    if (window.location.href.indexOf("volunteers.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/volunteers.jpg)");
    }
    if (window.location.href.indexOf("bullfighters.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/bullfighters.jpg)");
    }
    if (window.location.href.indexOf("race.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/horse.jpg)");
    }
    if (window.location.href.indexOf("tickets.php") > -1) {
        $(".pagePics").css("background-image", "url(./images/tickets.jpg)");
    }

    // scroll to top btn
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".scrollToTop").fadeIn();
        } else {
            $(".scrollToTop").fadeOut();
        }
    });

    //Click event to scroll to top
    $(".scrollToTop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        },
            800
        );
        return false;
    });

    // drop down menu
    $(".aboutDropDown").hover(
        function () {
            $(this)
                .find(".aboutDropItems")
                .stop()
                .slideDown("medium");
        },
        function () {
            $(this)
                .find(".aboutDropItems")
                .stop()
                .slideUp("medium");
        }
    );

    // overlay ! still in testing
    function on() {
        $("#overlay").css("display", "block");
        console.log("Overlay added...");
    }

    function off() {
        $("#overlay").css("display", "none");
        console.log("Overlay removed...");
    }

    // popup for events
    // open overlay
    $(".popupClicked").on("click", function () {
        $(".containerPopup").fadeIn();
        on();
    });
    // close overlay
    $(".closePopups").on("click", function () {
        $(".containerPopup").fadeOut();
        off();
    });
    // open overlay
    $(".popupClicked1").on("click", function () {
        $(".containerPopup1").fadeIn();
        on();
    });
    // close overlay
    $(".closePopups1").on("click", function () {
        $(".containerPopup1").fadeOut();
        off();
    });
    // open overlay
    $(".popupClicked2").on("click", function () {
        $(".containerPopup2").fadeIn();
        on();
    });
    // close overlay
    $(".closePopups2").on("click", function () {
        $(".containerPopup2").fadeOut();
        off();
    });
    // open overlay
    $(".popupClicked3").on("click", function () {
        $(".containerPopup3").fadeIn();
        on();
    });
    // close overlay
    $(".closePopups3").on("click", function () {
        $(".containerPopup3").fadeOut();
        off();
    });
    // close overlay on click out
    $("#overlay").on("click", function () {
        $(
            ".containerPopup, .containerPopup1, .containerPopup3, .containerPopup3"
        ).fadeOut();
        off();
    });
});