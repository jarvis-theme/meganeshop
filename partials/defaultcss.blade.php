	<!-- Default css-->
	{{favicon()}}
	{{generate_theme_css('meganeshop/assets/css/reset.css')}} 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	@if($tema->isiCss=='')	
	{{generate_theme_css('meganeshop/assets/css/style.css?v=002a')}} 
	@else 	
	{{generate_theme_css('meganeshop/assets/css/editstyle.css?v=002a')}} 
	@endif	
	{{generate_theme_css('meganeshop/assets/css/flexslider.css')}} 
	{{generate_theme_css('meganeshop/assets/css/owl.carousel.css')}} 
	{{generate_theme_css('meganeshop/assets/css/owl.theme.css')}} 
	{{generate_theme_css('meganeshop/assets/css/jquery.fancybox.css')}} 
	<!-- Other -->