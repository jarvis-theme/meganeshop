<section id="breadcrumb">
    <div class="container">
        {{breadcrumbProduk(null, '; <span>/</span> ', ';', true, @$category, @$collection)}}
    </div>
</section>
<div class="container" id="main-layout">
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
            </div>
            @endif
            @if(recentBlog()->count() > 0)
            <div id="latest-news" class="block">
            	<div class="title"><h2>Artikel Terbaru</h2></div>
            	<ul class="block-content">
                    @foreach(recentBlog(null,2) as $blogs)
                    <li>
                        <h5 class="title-news">{{$blogs->judul}}</h5>
                        <p>{{short_description($blogs->isi, 150)}}<a class="read-more" href="{{blog_url($blogs)}}">Selengkapnya</a></p>
                        <span class="date-post">{{date("F d, Y", strtotime($blogs->created_at))}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
            @if( count(list_product(null, @$category)) > 0)
            <div class="product-list">
                <div class="row">
                    <ul class="grid">
                        {{-- */ $i=1 /* --}}
                        @foreach(list_product(null, @$category) as $myproduk)
                        <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="prod-container">
                                 <div class="image-container">
                                    <a href="{{product_url($myproduk)}}">
                                        {{HTML::image(product_image_url($myproduk->gambar1,'medium'), $myproduk->nama, array('class'=>'img-responsive'))}}
                                    </a>
                                    @if(is_outstok($myproduk))
                                    <div class="icon-info icon-sold">Kosong</div>
                                    @elseif(is_terlaris($myproduk))
                                    <div class="icon-info icon-sale">Hot</div>
                                    @elseif(is_produkbaru($myproduk))
                                    <div class="icon-info icon-new">Baru</div>
                                    @endif
                                </div>
                                <h5 class="product-name">{{shortName($myproduk->nama,20)}}</h5>
                                <span class="price">{{price($myproduk->hargaJual)}}</span>
                                <a href="{{product_url($myproduk)}}" class="buy-btn">Lihat</a>
                            </div>
                        </li>
                        @if($i % 2 == 0)
                        <div class="clr visible-xs visible-sm visible-md"></div>
                        @endif
                        @if($i % 4 == 0)
                        <div class="clr visible-lg"></div>
                        @endif
                        {{-- */ $i++ /* --}}
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
            <div class="pagination">
                {{list_product(null, @$category, @$collection)->links()}}
            </div>
            @else
            <article class="noresult">Produk tidak ditemukan.</article>
            @endif
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