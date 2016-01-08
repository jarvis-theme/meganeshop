$(document).ready(function() {
	
	// BACK TO TOP
	$('.back-top').click(function(e) { 
		$('body, html').animate({scrollTop:$('header').offset().top}, 1000); 
		event.preventDefault(); 
	});
	
	
	//TAB HOME
	$('.menu-new li').first().addClass("current");
	$('.new-content').first().css("display", "block");
	$(".menu-new a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".new-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
	
	// BRAND SLIDER
	jQuery('#brand-slide').owlCarousel({
		itemsCustom : [
			[350, 1],
			[350, 2],
			[600, 3],
			[700, 4],
			[1000, 6],
			[1200, 6],
			[1400, 6]
		],
		navigation : true,
		pagination: false,
		navigationText: false
	});
	
	$('footer h4.title').click(function() {
		$(this).toggleClass('active');
		$(this).next().slideToggle(250);
	});

	// BIG SLIDER
	$('#p-slide .flexslider').flexslider({
		animation: "slide",
		directionNav: true,
		controlNav: true,
		prevText: "",
		nextText: ""
	});

    //THUMB LIST
    $('#thumb-list').owlCarousel({
        itemsCustom : [
            [350, 2],
            [350, 3],
            [600, 4],
            [700, 4],
            [1000, 4],
            [1200, 3],
            [1400, 3]
        ],
        navigation : true,
        pagination: false,
        navigationText: false
    });

	// FANCYBOX
	$('.fancybox').fancybox({
		padding: 10,
		openEffect : 'elastic',
		openSpeed  : 150,
		closeEffect : 'elastic',
		closeSpeed  : 150
	});
	
});