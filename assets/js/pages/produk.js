define(['jquery','owl_carousel','flexslider','fancybox'], function($,owlCarousel)
{
    return new function(){
        var self = this;
        self.run = function(){
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
        };
    }
});