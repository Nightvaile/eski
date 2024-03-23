@extends('frontend.layout.layout')
@section('title')
    İletişim
@endsection
@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">İletişim</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{route('homepage')}}">Anasayfa</a></li>
                            <li class="active">İletişim</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-wrapper">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    <div class="contact-form col-md-6 ">


                        @if(session()->has('success'))
                            <div id="mail-success" class="success alert show">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session()->has('fail'))
                            <div id="mail-fail" class="error alert show">
                                {{ session('fail') }}
                            </div>
                        @endif
                        <form id="contact-form" method="post" action="{{route('iletisim_ilet')}}" role="form">
                            @csrf


                            <div class="form-group">
                                <input type="text" placeholder="Adınız" class="form-control" name="name" id="name">
                            </div>

                            <div class="form-group">
                                <input type="email" placeholder="E-posta" class="form-control" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Konu" class="form-control" name="subject" id="subject">
                            </div>

                            <div class="form-group">
                                <textarea rows="6" placeholder="Mesaj" class="form-control" name="message"
                                          id="message"></textarea>
                            </div>


                            <div id="cf-submit">
                                <input type="submit" id="contact-submit" class="btn btn-transparent" value="Gönder">
                            </div>

                        </form>
                    </div>
                    <!-- ./End Contact Form -->

                    <!-- Contact Details -->
                    <div class="contact-details col-md-6 ">
                        {{--Google Map--}}
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3002.5547937380343!2d28.723201576603984!3d41.1878767083458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caabcea819fe8b%3A0x33258fca33c310af!2sArnavutk%C3%B6y%20Bili%C5%9Fim%20Akademisi!5e0!3m2!1str!2str!4v1692797149571!5m2!1str!2str"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        {{--Info--}}
                        <ul class="contact-short-info">
                            <li>
                                <i class="tf-ion-ios-home"></i>
                                <span>Adres: {{$contact_info->adress ?? _('veri gelmedi')}}</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-phone-portrait"></i>
                                <span>Telefon: {{$contact_info->phone ?? _('veri gelmedi')}}</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-globe"></i>
                                <span>Fax: {{$contact_info->fax ?? _('veri gelmedi')}}</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-mail"></i>
                                <span>E-posta: {{$contact_info->mail ?? _('veri gelmedi')}}</span>
                            </li>
                        </ul>
                        <!-- Footer Social Links -->
                        <div class="social-icon">
                            <ul>
                                {{--                                @if(!empty($contact_socials) && count($contact_socials)> 0)--}}
                                {{--                                    @foreach($contact_socials as $social)--}}
                                {{--                                        <li>--}}
                                {{--                                            <a class="{{$social->img ?? _(null)}}" href="{{$social->link ?? _('#')}}">--}}
                                {{--                                                <i class="{{$social->icon ?? _('fab fa-discord')}}"></i>--}}
                                {{--                                            </a>--}}
                                {{--                                        </li>--}}
                                {{--                                    @endforeach--}}
                                {{--                                @endif--}}
                                <li><a class="" href="{{$contact_socials[0]->url ?? _('veri gelmedi')}}">
                                        <i class="tf-ion-social-facebook"></i>
                                    </a></li>
                                <li><a href="{{$contact_socials[1]->url ?? _('veri gelmedi')}}">
                                        <i class="tf-ion-social-twitter"></i>
                                    </a></li>
                                <li><a href="{{$contact_socials[2]->url ?? _('veri gelmedi')}}">
                                        <i class="tf-ion-social-dribbble-outline"></i>
                                    </a></li>
                                <li><a href="{{$contact_socials[3]->url ?? _('veri gelmedi')}}">
                                        <i class="tf-ion-social-googleplus-outline"></i>
                                    </a></li>
                                <li><a href="{{$contact_socials[4]->url ?? _('veri gelmedi')}}">
                                        <i class="tf-ion-social-pinterest-outline"></i>
                                    </a></li>
                            </ul>
                        </div>
                        <!--/. End Footer Social Links -->
                    </div>
                    <!-- / End Contact Details -->


                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </section>

@endsection
