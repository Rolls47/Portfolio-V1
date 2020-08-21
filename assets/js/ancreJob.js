import $ from 'jquery';

$(function() {
    $( "#toJob" ).click(function() {
        scrollTo( $("#job") );
    });
    function scrollTo( target ) {
        if( target.length ) {
            $("html, body").stop().animate( { scrollTop: target.offset().top }, 1500);
        }
    }
    // exemple
});
