<div id="newsletter" class="col-xs-12 col-sm-12 col-lg-6">
    <h4 class="title">Newsletter</h4>
    <div class="block-content">
        <p>Jadilah orang pertama yang mendapatkan info produk terbaru, dan promo dari kami. <br>Daftarkan email anda dan dapatkan segera promo menarik.</p>
        <form class="newsletter-form" action="{{@$mailing->action}}" method="post" target="_blank" novalidate>
            <input type="email" placeholder="Masukkan email anda" name="EMAIL" class="input-medium required email" id="newsletter mce-EMAIL" {{ @$mailing->action==''?'disabled="disabled"':'' }}/>
            <div class="fr">
                <button type="submit" {{ @$mailing->action==''?'disabled="disabled"':'' }}>SUBSCRIBE</button>
            </div>
            <div class="clr"></div>
        </form>
        <div class="list-banks">
            @if($sosial->fb)
                <a target="_blank" href="{{url($sosial->fb)}}" title="Facebook"><i class="social fa fa-facebook"></i></a>
            @endif
            @if($sosial->tw)
                <a target="_blank" href="{{url($sosial->tw)}}" title="Twitter"><i class="social fa fa-twitter"></i></a>
            @endif
            @if($sosial->gp)
                <a target="_blank" href="{{url($sosial->gp)}}" title="Google+"><i class="social fa fa-google-plus"></i></a>
            @endif
            @if($sosial->pt)
                <a target="_blank" href="{{url($sosial->pt)}}" title="Pinterest"><i class="social fa fa-pinterest"></i></a>
            @endif
            @if($sosial->tl)
                <a target="_blank" href="{{url($sosial->tl)}}" title="Tumblr"><i class="social fa fa-tumblr"></i></a>
            @endif
            @if($sosial->ig)
                <a target="_blank" href="{{url($sosial->ig)}}" title="Instagram"><i class="social fa fa-instagram"></i></a>
            @endif  
            @if($sosial->picmix)
                <a target="_blank" href="{{url($sosial->picmix)}}" title="Picmix">
                    <img class="picmix" src="//d3kamn3rg2loz7.cloudfront.net/blogs/event/icon-picmix.png">
                </a>
            @endif
        </div>
        <div class="list-banks">
            @foreach(list_banks() as $banks)    
                @if($banks->status == 1)
                {{HTML::image(bank_logo($banks),'bank', array('class'=>'banks'))}} 
                @endif  
            @endforeach 
            @foreach(list_payments() as $pay)
                @if($pay->nama == 'paypal' && $pay->aktif == 1)
                <img src="{{url('img/bank/paypal.png')}}" alt="paypal" title="Paypal" />
                @endif
                @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                <img src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" title="iPaymu" class="banks" />
                @endif
                @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                <img src="{{url('img/bitcoin.png')}}" alt="bitcoin" title="Bitcoin" />
                @endif
            @endforeach
            @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
            <img src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" title="Doku myShortcart" class="banks" />
            @endif 
            @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
            <img src="{{url('img/bank/midtrans.png')}}" alt="Midtrans" title="Midtrans" class="midtrans">
            @endif
        </div>
    </div>
</div>