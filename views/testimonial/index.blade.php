        <div class="container">
        	<div class="inner-column row">
                <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
                    @if(count(list_category()) > 0)
                    <div class="widget accordion-widget category-accordions">
                        <h1 class="border">Kategori</h1>
                        <div class="accordion">
                            @foreach(list_category() as $side_menu)
                            @if($side_menu->parent == '0')
                            <div class="accordion-group side-accor">
                                <div class="accordion-heading">
                                    @if(count($side_menu->anak) >= 1)
                                    <a href="{{category_url($side_menu)}}"><span class="accordion-toggle collapsed" data-toggle="collapse" href="#{{short_description(preg_replace('/[^a-zA-Z0-9-]/', '', $side_menu->nama),23)}}"></span>
                                    @else
                                    <a class="collapsed" href="{{category_url($side_menu)}}">
                                    @endif  
                                        {{$side_menu->nama}}
                                    </a>
                                </div>
                                @if($side_menu->anak->count() != 0)
                                <div id="{{short_description(preg_replace('/[^a-zA-Z0-9-]/', '', $side_menu->nama),23)}}" class="accordion-body collapse submenu">
                                    <div class="accordion-inner">
                                        @foreach($side_menu->anak as $submenu)
                                        @if($submenu->parent == $side_menu->id)
                                            <div class="accordion-heading">
                                                @if(count($submenu->anak) > 0 )
                                                <a href="{{category_url($submenu)}}"><span href="#{{short_description(preg_replace('/[^a-zA-Z0-9-]/', '', $submenu->nama),23)}}" class="accordion-toggle collapsed submenu" data-toggle="collapse"></span>
                                                @else
                                                <a href="{{category_url($submenu)}}" class="collapsed">
                                                @endif
                                                    {{$submenu->nama}}
                                                </a>
                                            </div>
                                            @if($submenu->anak->count() != 0)
                                            <div id="{{short_description(preg_replace('/[^a-zA-Z0-9-]/', '', $submenu->nama),23)}}" class="accordion-body collapse">
                                                <ul>
                                                    @foreach($submenu->anak as $submenu2)
                                                    @if($submenu2->parent == $submenu->id)
                                                    <li><a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a></li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @if(best_seller()->count() > 0)
                    <div id="best-seller" class="block">
                    	<div class="title"><h2>Produk Terlaris</h2></div>
                    	<ul class="block-content">
                            @foreach(best_seller() as $best)
                            <li>
                            	<a href="{{product_url($best)}}">
                                	<div class="img-block">
                                        {{HTML::image(product_image_url($best->gambar1,'thumb'), $best->nama,array('width'=>'81'))}}
                                    </div>
                                    <p class="product-name">{{short_description($best->nama,35)}}</p>
                                    <p class="price">{{price($best->hargaJual)}}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="btn-more">
                        	<a href="{{url('produk')}}">Lihat Semua</a>
                        </div>
                    </div>
                    @endif
                    @if(vertical_banner()->count() > 0)
                    <div id="advertising" class="block">
                        @foreach(vertical_banner() as $banner)    
                        <div class="img-block">
                            <a href="{{url($banner->url)}}">
                                {{HTML::image(banner_image_url($banner->gambar), 'Info Promo', array('width'=>'1168',  "class"=>"img-responsive"))}}
                            </a>
                        </div>
                        @endforeach 
                    </div>
                    @endif
                </div>
                <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
                    <div class="contact-us">
                        <h2 class="title">Testimonial</h2>
                        <div class="contact-desc">
                            @foreach(list_testimonial() as $key=>$value)
                            <article class="col-lg-12 src-result">
                                <h4><strong><i class="fa fa-user"></i> {{$value->nama}}</strong></h4>
                                <blockquote>{{short_description($value->isi,400)}}</blockquote>
                                <br><hr>
                            </article>
                            @endforeach
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            {{list_testimonial()->links()}}
                        </div>
                        <form class="col-lg-12 col-xs-12 contact-form" action="{{url('testimoni')}}" method="post">
                            <h3>Kirim Testimonial</h3>
                            <p class="form-group">
                                <input class="form-control" placeholder="Nama" name="nama" type="text" required>
                            </p>
                            <p class="form-group">
                                <textarea class="form-control" placeholder="Pesan" name="testimonial" required></textarea>
                            </p>
                            <button class="btn btn-success" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                @foreach(horizontal_banner() as $banner)    
                <a href="{{url($banner->url)}}">
                    {{HTML::image(banner_image_url($banner->gambar), 'Info Promo', array('width'=>'1168', "class"=>"img-responsive"))}}
                </a>
                @endforeach 
            </div>
            <br>
        </div>