import $ from 'jquery';

$(function() {
    $( "#toFormation" ).click(function() {
        scrollTo( $("#formation") );
    });
    function scrollTo( target ) {
        if( target.length ) {
            $("html, body").stop().animate( { scrollTop: target.offset().top }, 1500);
        }
    }
    // exemple
});
