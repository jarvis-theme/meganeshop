<header>
    <div id="top-head">
        <div class="container">
            <div class="top-tel fl">
                <i class="fa fa-phone"></i> <a>Call : {{@$kontak->telepon ? $kontak->telepon.'&nbsp;&nbsp;' : '-&nbsp;&nbsp;'}}</a>
            </div>
            <div class="top-links fr">
                <ul>
                @if( !is_login() )
                    <li><a href="{{url('member')}}"><i class="fa fa-user"></i> Log in</a></li>
                @else
                    <li><a href="{{url('member')}}"><i class="fa fa-user"></i> {{shortName(user()->nama, 50)}}</a></li>
                    <li>{{HTML::link('logout', 'Logout')}}</li>
                @endif
                    <li class="shopping-cart" id="shoppingcartplace">
                        <a href="{{url('checkout')}}">{{shopping_cart()}}</a>
                    </li>
                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="logo" class="col-xs-12 col-sm-12 col-lg-4">
                <a href="{{url('home')}}">
                    {{HTML::image(logo_image_url(), Theme::place('title'))}} 
                </a>
            </div>
            <nav id="menu" class="navbar navbar-default col-xs-12 col-sm-12 col-lg-8" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand mobile-only" href="#">MENU</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        @foreach(category_menu() as $key=>$menu)
                            @if($menu->parent=='0')
                            <li class="dropdown">
                                @if(count($menu->anak) < 1)
                                <a href="{{category_url($menu)}}">
                                    {{$menu->nama}}
                                </a>
                                @else
                                <a href="{{category_url($menu)}}" class="dropdown-toggle" data-toggle="dropdown">
                                    {{$menu->nama}} <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach($menu->anak as $key => $submenu)
                                    <li><a href="{{category_url($submenu)}}">{{$submenu->nama}}</a></li>
                                        @if(count($submenu->anak->count()) > 0)
                                        <ul>
                                            @foreach($submenu->anak as $submenu2)
                                                @if($submenu2->parent == $submenu->id)
                                                <li class="submenu2">
                                                    <a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        @endif
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endif
                        @endforeach 
                    </ul>
                </div>
            </nav>
            <form class="navbar col-lg-6 col-xs-12" id="frm-search" action="{{URL::to('search')}}" method="post">
                <div class="input-group" id="searchs">
                    <input id="src-text" class="form-control" name="search" placeholder="Cari produk" type="text" required>
                    <span class="input-group-btn">
                        <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <div class="clr"></div>
        </div>
    </div>
</header>