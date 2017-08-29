<section id="breadcrumb">
    <div class="container">
        <p>Blog</p>
    </div>
</section>
<div class="container" id="main-layout">
    <div class="inner-column row">
        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
            @if(count(recentBlog()) > 0)
            <div id="latest-news" class="block">
            	<div class="title"><h2>Artikel Terbaru</h2></div>
            	<ul class="block-content">
            		@foreach(recentBlog(null,5) as $artikel)
                    <li>
                        <h5 class="title-news" id="news"><a href="{{blog_url($artikel)}}">{{short_description($artikel->judul, 28)}}</a></h5>
                        <span class="date-post"><i class="fa fa-calendar"></i> {{date("d F Y", strtotime($artikel->created_at))}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(list_blog_category()->count() > 0)
            <div id="latest-news" class="block">
            	<div class="title"><h2>Kategori</h2></div>
            	<ul class="block-content">
            		@foreach(list_blog_category() as $kat)
            		<span class="underline"><a href="{{blog_category_url($kat)}}">{{$kat->nama}}</a></span>&nbsp;&nbsp;
                    @endforeach	
                </ul>
            </div>
            @endif
            @if(vertical_banner()->count() > 0)
            <div id="banner" class="block">
                @foreach(vertical_banner() as $banner)
            	<div class="img-block">
            		<a href="{{url($banner->url)}}">
            			{{HTML::image(banner_image_url($banner->gambar),'Info Promo',array('class'=>'img-responsive'))}}
        			</a>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
            <div class="product-list">
                <div class="top-list">
                    <h2 class="title"></h2>
                    <div class="clr"></div>
                </div>
                @if(count(list_blog(null,@$blog_category)) > 0)
                <div class="row">
                    @foreach(list_blog(null,@$blog_category) as $blog)
                    <article class="col-lg-12 src-result">
                        <h2 class="title"><a href="{{blog_url($blog)}}">{{$blog->judul}}</a></h2>
			            <p>
			            	<small><i class="fa fa-calendar"></i> {{waktuTgl($blog->updated_at)}}</small>
		            	</p>
			            <p>
			            	{{shortDescription($blog->isi,300)}}<br>
			            	<a href="{{blog_url($blog)}}" class="readmore">Baca Selengkapnya →</a>
		            	</p>
                        <hr>
                    </article>
                    @endforeach
                </div>
                <div class="pagination">
					{{list_blog(null,@$blog_category)->links()}}
                </div>
                @else
                <article class="noresult">Blog tidak ditemukan.</article>
                @endif
            </div>
        </div>
    </div>
</div>