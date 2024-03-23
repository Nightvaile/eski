@extends('frontend.layout.layout')
@section('title') Kayıt Ol @endsection
@section('content')
<section class="signin-page account">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="block text-center">
            {{--<a class="logo" href="{{route('homepage')}}">
              <img src="{{asset('UserSide').'/images/logo.png'}}" alt="">
            </a>--}}
            <h2 class="text-center">Yeni Hesap Oluşturun</h2>
            <form class="text-left clearfix" action="{{route('homepage')}}">
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Ad">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Soyad">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Kullanıcı Adı">
              </div>
              <div class="form-group">
                <input type="email" class="form-control"  placeholder="E-poste">
              </div>
              <div class="form-group">
                <input type="password" class="form-control"  placeholder="Şifre">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-main text-center">Kayıt Ol</button>
              </div>
            </form>
            <p class="mt-20">Çoktan hesap oluşturmuş muydunuz?<a href="{{route('giris_yap')}}"> Giriş yapın</a></p>
            <p><a href="#"> Şifrenizi mi unuttunuz?</a></p>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
