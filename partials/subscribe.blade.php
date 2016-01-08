<div id="newsletter" class="col-xs-12 col-sm-12 col-lg-6">
	<h4 class="title">Newsletter</h4>
    <div class="block-content">
        <p>Jadilah orang pertama yang mendapatkan info produk terbaru, dan promo dari kami. <br>Daftarkan email anda dan dapatkan segera promo menarik.</p>
        <form class="newsletter-form" action="{{@$mailing->action}}" method="post" target="_blank" novalidate>
            <input type="text" value="" {{ @$mailing->action==''?'disabled="disabled"':'' }} placeholder="Masukkan email anda" name="EMAIL" class="input-medium required email" id="newsletter mce-EMAIL"/>
            <div class="fr">
                <button type="submit" {{ @$mailing->action==''?'disabled="disabled"':'' }}>SUBSCRIBE</button>
            </div>
            <div class="clr"></div>
        </form>
        <div class="list-banks">
            @foreach(list_banks() as $banks)    
                {{HTML::image(bank_logo($banks),'bank', array('class'=>'banks'))}}
            @endforeach 
            @foreach(list_payments() as $pay)
                @if($pay->nama == 'paypal' && $pay->aktif == 1)
                <img src="{{url('img/bank/paypal.png')}}" alt="paypal" title="Payment" />
                @endif
                @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                <img src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" title="Payment" class="banks" />
                @endif
                @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                <img src="{{url('img/bitcoin.png')}}" alt="bitcoin" title="Payment" />
                @endif
            @endforeach
            @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
            <img src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" title="Payment" class="banks" />
            @endif 
        </div>
    </div>
</div>