$(document).ready(function() {
    // Toggle Dark Mode
    $('#dark-mode-toggle').click(function() {
        $('body').toggleClass('dark-mode');
        $('.navbar').toggleClass('dark-mode');
    });

    // Navbar toggle for mobile
    $('.nav-toggle').click(function() {
        $('.nav-links').toggleClass('active');
    });

    // Smooth scroll for navigation links
    $('.nav-links a').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000);
    });
});


