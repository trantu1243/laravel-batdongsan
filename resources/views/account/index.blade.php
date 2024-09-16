@extends('layouts.index')

@section('title', 'Batdongsan')

@section('content')


<div class="conteiner">
    <div class="row login-page" style="height: 100vh; width: 100%; overflow: hidden; margin-right: 0; margin-left: 0;">
        <div class="col-lg-5 login-form">
            <div class="">
                <div class="col-12 title">Cài đặt tài khoản</div>
            </div>

            <div class="form">
                <form method="post" action="/sellernet/thong-tin-ca-nhan">
                    <input type="hidden" name="_token" value="0mTnDMqOd3qiYpZnVndGJ01fPgjgapaJAEwN7ATF" />
                    <div class="form-group mat-16">
                        <label for="password">Họ tên:</label>
                        <input value="Tu Tran" type="text" name="name" />
                    </div>
                    <div class="form-group mat-16">
                        <label for="password">Email:</label>
                        <input value="trantu1242003@gmail.com" type="text" disabled name="email" />
                    </div>

                    <div class="form-group mat-16">
                        <label for="password">Nhập mật khẩu:</label>
                        <input value="" type="password" name="current-password" />
                    </div>

                    <div class="form-group mat-16">
                        <label for="password">Mật khẩu mới:</label>
                        <input type="password" name="new-password" />
                    </div>

                    <div class="form-group mat-16">
                        <label for="password">Nhập lại mật khẩu mới:</label>
                        <input type="password" name="new-password_confirmation" />
                    </div>

                    <button type="submit" class="btn btn-submit">Lưu lại</button>
                </form>
            </div>
        </div>
        <div class="col-lg-7 login-bg">
            <div class="login-img">
                <div><img src="/assets/img/Frame 320.png" /></div>
                <div>
                    <label>Ngập tràn khuyến mại khi đăng tin trên <span>Batdongsan!</span></label>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection