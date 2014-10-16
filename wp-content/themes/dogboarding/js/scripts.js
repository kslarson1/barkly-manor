// ALL OF THE BELOW CODE IS TO HELP WITH RESPONSIVE CODES
// -- Set Dynamic Heights and CSS -- //
$(document).ready(function(){
    resizeDiv();
});
window.onresize = function(event) {
    resizeDiv();
};
function resizeDiv() {
    vpw = $(window).width(); // Viewport Width
    vph = $(window).height(); // Viewport Height

    // Your Styles
    cirW = $('.circle').width();

    $('.circle').css({'height': cirW + 'px'}); // Setting the Height of a class equal to the viewport height divided by 2

// END OF CUSTOM RESPONSIVE CODE

// BELOW SHOULD HAVE A HERO CHANGE HEIGHT IN RESPONSE TO THE WIDTH
//$('.hero-section').css({'height': vph / 1.5 + 'px'});
	// END OF HERO CHANGE HEIGHT SECTION

}