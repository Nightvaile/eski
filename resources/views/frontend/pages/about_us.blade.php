@extends('frontend.layout.layout')
@section('title')
    Hakkımızda
@endsection
@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Hakkımızda</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{route('homepage')}}">Anasayfa</a></li>
                            <li class="active">Hakkımızda</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container">
            <div class="row" style="display: flex;justify-content: center;align-items: center;flex-wrap: wrap;" >
                <div class="col-md-6">
                    <img class="img-responsive" src="{{ $about->img ?? __(asset('UserSide/images/about/about.jpg'))}}">
                </div>
                <div class="col-md-12">
                    <h2 class="mt-40">Mağzamız Hakkında</h2>
                    <p>{{$about->text ?? __('text gelmedi')}}</p>
                    <a href="https://www.linkedin.com/in/mehmet-harun-kaya-7b094b23b/" class="btn btn-main mt-20">Linkedln</a>
                </div>
            </div>
            <div class="row mt-40" style="display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">
                @if(!empty($awards) && count($awards)>0)
                    @foreach($awards as $award)
                        <div class="col-md-3 text-center mt-10">
                            <img src="{!! $award->img ?? __(asset('UserSide/images/about/awards-logo.png'))!!}">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="team-members">
        <div class="container">
            <div class="row">
                <div class="title"><h2>Takım Arkadaşlarımız</h2></div>
            </div>
            <div class="row" style="display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">

                {{--Burası Dinamik bölge--}}
                @if(!empty($members) && count($members) > 0)
                    @foreach($members as $member)
                        <div class="col-md-3 ">
                            <div class="team-member text-center">
                                <img class="img-circle" style="width: 220px; height: 220px;" src="{!! $member->profile !!}">
                                <h4>{{$member->name}}</h4>
                                <p>{{$member->position}}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
                {{--Burası statik bölge--}}
                <div class="col-md-3 ">
                    <div class="team-member text-center">
                        <img class="img-circle" src="{{asset('UserSide/images/team/team-1.jpg')}}">
                        <h4>Jonathon Andrew</h4>
                        <p>Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section video-testimonial bg-1 overly-white text-center mt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Video sunumu</h2>
                    <a class="play-icon"
                       href="{{$about->video ?? __('https://www.youtube.com/watch?v=oyEuk8j8imI&amp;rel=0')}}"
                       data-toggle="lightbox">
                        <i class="tf-ion-ios-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
