	<!-- Default css-->
	{{favicon()}}
	{{generate_theme_css('meganeshop/assets/css/reset.css')}}
	{{generate_theme_css('meganeshop/assets/css/bootstrap.css')}}
	{{generate_theme_css('meganeshop/assets/css/font-awesome.min.css')}}
	@if($tema->isiCss=='')	
	{{generate_theme_css('meganeshop/assets/css/style.css')}}
	@else 	
	{{generate_theme_css('meganeshop/assets/css/editstyle.css')}}
	@endif	
	{{generate_theme_css('meganeshop/assets/css/flexslider.css')}}
	{{generate_theme_css('meganeshop/assets/css/owl.carousel.css')}}
	{{generate_theme_css('meganeshop/assets/css/owl.theme.css')}}
	{{generate_theme_css('meganeshop/assets/css/jquery.fancybox.css')}}
	<!-- Other -->