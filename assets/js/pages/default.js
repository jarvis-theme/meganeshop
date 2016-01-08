define(['jquery','bootstrap','modernizr'], function($)
{
    return new function(){
        var self = this;
        self.run = function(){
            // BACK TO TOP
            $('.back-top').click(function(e) { 
                $('body, html').animate({scrollTop:$('header').offset().top}, 1000); 
                event.preventDefault(); 
            });

            $('footer h4.title').click(function() {
                $(this).toggleClass('active');
                $(this).next().slideToggle(250);
            });
        };
    }
});