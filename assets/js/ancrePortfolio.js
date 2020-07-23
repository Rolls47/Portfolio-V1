import $ from 'jquery';

$(function() {
    $( "#toPortfolio" ).click(function() {
        scrollTo( $("#portfolio") );
    });
    function scrollTo( target ) {
        if( target.length ) {
            $("html, body").stop().animate( { scrollTop: target.offset().top }, 1500);
        }
    }
    // exemple
});

