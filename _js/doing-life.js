jQuery(document).ready(function() {
    var slider = tns({
        container: '.slider',
        items: 1,
        slideBy: 'page',
        autoplay: true,
        controls: false,
        nav: false,
        autoplayButton: false,
        autoplayButtonOutput: false,
    });
    jQuery(".fit-vids").fitVids();

    jQuery('a[href*="#"]:not([href="#"])').click(function(e) {
	   	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                jQuery('html, body').animate({
                    scrollTop: target.offset().top
    	        }, 1000);
                e.preventDefault();
            }
	    }
    });
});
