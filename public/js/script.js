$(document).ready(function() {
    var video = $('#video')[0]; // Get the video element using jQuery
    
    // Scroll position check function
    function checkScrollPosition() {
        var scrollPosition = $(window).scrollTop();
        if (scrollPosition >= 1000) { // Adjust as needed
            video.play();
            // Remove scroll event listener after playing the video once
            $(window).off('scroll', checkScrollPosition);
        }
    }

    // Bind scroll event listener to checkScrollPosition function
    $(window).on('scroll', checkScrollPosition);
});
