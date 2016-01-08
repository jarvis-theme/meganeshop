define(['jquery','owl_carousel','flexslider'], function($, owlCarousel)
{
    return new function(){
        var self = this;
        self.run = function(){
            // BRAND SLIDER
            $('#brand-slide').owlCarousel({
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

            // BIG SLIDER
            $('#p-slide .flexslider').flexslider({
                animation: "slide",
                directionNav: true,
                controlNav: true,
                prevText: "",
                nextText: ""
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
        };
    }
});