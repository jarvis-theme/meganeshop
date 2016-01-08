<div id="breadcrumb">
    <div class="container">
        <div class="col-xs-12 col-sm-12">Member Area</div>
    </div>
</div><br>
<div class="container">
	<div class="inner-column row">
        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
    		<p>Silahkan Login untuk kemudahan melakukan checkout. Cepat dan Mudah dalam bertransaksi. Mudah untuk mengetahui Order History dan Status.</p>
			<br>
			<h2>Log in</h2>
			<br>
            <form class="form-horizontal" action="{{url('member/login')}}" method="post">
				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2">Email</label>
			    	<div class="col-sm-4">
			    		<input type="email" class="form-control" name="email" placeholder="Email" required>
			    	</div>
				</div>
				<div class="form-group">
			    	<label for="inputPassword3" class="col-sm-2">Password</label>
					<div class="col-sm-4">
			    		<input type="password" class="form-control" name="password" placeholder="Password" required>
			   		</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<small>
							<a href="{{url('member/forget-password')}}">Lupa Password?</a>
						</small>
					</div>
				</div>
				<div class="form-group">
					<div class="pull-left col-sm-2">
						<button type="submit" class="btn btn-success">Log in</button>
						<!-- <input type="submit" value="Login" class="button"> -->
					</div>
					<div class="pull-right col-sm-4">
						<small>Belum punya akun ?</small>
						<a href="{{('member/create')}}" class="btn btn-default">Daftar Baru</a>
					</div>
				</div>
			</form>
			<br>
	    </div>
	    <div class="col-lg-3 col-xs-12 col-sm-4 pull-left">
            <div id="advertising" class="block">
            	@foreach(vertical_banner() as $banner)
            	<div class="img-block">
            		<a href="{{url($banner->url)}}">
            			{{HTML::image(banner_image_url($banner->gambar),'Info Promo',array('class'=>'img-responsive'))}}
        			</a>
                </div>
            	@endforeach
            </div>
            <br>
        </div>
    </div>
</div>