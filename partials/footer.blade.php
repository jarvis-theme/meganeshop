            <footer>
                <div class="top-footer">
                    <div class="container">
                        <div class="row">
                            {{ Theme::partial('subscribe') }}   
                            @foreach(all_menu() as $key=>$group)
                            <div id="links-foot" class="col-xs-12 col-sm-4 col-lg-2">
                                <h4 class="title">{{$group->nama}}</h4>
                                <div class="block-content">
                                    <ul>
                                        @foreach($group->link as $key=>$link)
                                            @if($group->id == $link->tautanId)
                                            <li>
                                                <a href="{{menu_url($link)}}">{{$link->nama}}</a>
                                            </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p>&copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a class="nodecor" target="_blank" href="http://jarvis-store.com"> Jarvis Store</a></p>
                    </div>
                </div>
            </footer>
            {{pluginPowerup()}}