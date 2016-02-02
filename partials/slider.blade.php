<section id="p-slide">
    <div class="container">
        <div id="da-slider" class="flexslider">
            <ul class="slides">
                @foreach(slideshow() as $slide)
                <li>
                    @if(!empty($slide->url))
                    <a href="{{filter_link_url($slide->url)}}" target="_blank">
                    @else
                    <a href="#">
                    @endif
                        {{HTML::image(slide_image_url($slide->gambar), 'slideshow banner', array('class'=>'img-responsive'))}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>