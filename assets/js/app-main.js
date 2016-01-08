var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    waitSeconds : 60,
    urlArgs: "v=001",
	shim: {
		'jq_ui' : {
			deps : ['jquery'],
		},
		'bootstrap' : {
			deps : ['jquery'],
		},
		'flexslider' : {
			deps : ['jquery'],
		},
		'fancybox' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
	},

	paths: {
		// LIBRARY
		jquery 			: dirTema+'/assets/js/lib/jquery.min',
		bootstrap		: dirTema+'/assets/js/lib/bootstrap.min',
		fancybox		: dirTema+'/assets/js/lib/jquery.fancybox.pack',
		flexslider		: dirTema+'/assets/js/lib/jquery.flexslider-min',
		modernizr		: dirTema+'/assets/js/lib/modernizr.custom.28468',
		owl_carousel	: dirTema+'/assets/js/lib/owl.carousel.min',

		// MAIN LIBRARY
		router          : 'js/router',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		cart          	: 'js/shop_cart',

		// CONTROLLER
		home            : dirTema+'/assets/js/pages/home',
		main            : dirTema+'/assets/js/pages/default',
		produk          : dirTema+'/assets/js/pages/produk',
	}
});
require([
	'router',
	'main',
	'cart'
], function(router,main,cart)
{
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
	cart.run();
});