<div id="breadcrumb">
    <div class="container">
        <div class="col-xs-12 col-sm-12">Lupa Password</div>
    </div>
</div>
<br>
<div class="container">
    <div class="inner-column row">
        <div id="center_column" class="col-lg-6 col-xs-12 col-sm-5">
            <h2>Lupa Password</h2><hr><br>
            <form class="form-horizontal" action="{{url('member/forgetpassword')}}" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan email anda" name="recoveryEmail" required>
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit">Reset Password</button>
                    </span>
                </div>
            </form>
            <br><br>
        </div>
        <div id="center_column" class="col-lg-5 col-md-offset-1">
            <h2>Pelanggan Baru</h2><hr><br>
            <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
            <div class="input-group">
                <span class="input-group-btn">
                    <a href="{{url('member/create')}}" class="btn btn-info">Daftar</a>
                </span>
            </div>
        </div>
    </div>
</div>