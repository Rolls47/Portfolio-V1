import $ from 'jquery';

$(function() {
    $( "#toSkill" ).click(function() {
        scrollTo( $("#skill") );
    });
    function scrollTo( target ) {
        if( target.length ) {
            $("html, body").stop().animate( { scrollTop: target.offset().top }, 1500);
        }
    }
    // exemple
});

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
