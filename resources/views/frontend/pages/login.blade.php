@extends('frontend.layout.layout')
@section('title') Giriş Yap @endsection
@section('content')
    <section class="signin-page account">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="block text-center">
              {{--<a class="logo" href="{{route('homepage')}}">
                <img src="{{asset('UserSide').'/images/logo.png'}}" alt="">
              </a>--}}
              <h2 class="text-center">Hoşgeldiniz</h2>
              <form class="text-left clearfix" action="{{route('homepage')}}">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-posta">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Şifre">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-main text-center">Giriş yap</button>
                </div>
              </form>
              <p class="mt-20">Hesabınız yok mu?<a href="{{route('kayit_ol')}}"> Yeni hesap oluşturun.</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
