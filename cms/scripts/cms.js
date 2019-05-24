$(document).ready(function() {
    let userOption = $('.user'),
        editOption = $('.edit');

    // side menu, on hover, display
    userOption.hover(function(){
        // console.log('in ');
        $('.user-menu').fadeIn(100);
    }, function(){
        // console.log('out');
        $('.user-menu').fadeOut(100);
    });
    editOption.hover(function(){
        // console.log('in ');
        $('.edit-menu').fadeIn(100);
    }, function(){
        // console.log('out');
        $('.edit-menu').fadeOut(100);
    });
    // timestamp for main page
    let timeHolder = $('.time'),
        time;

    time = new Date();
    timeHolder.text(time);
    setInterval(function(){
        time = new Date();
        timeHolder.text(time);
    }, 1000);
});