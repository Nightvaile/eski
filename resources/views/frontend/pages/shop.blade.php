@extends('frontend.layout.layout')
@section('title')
    Shop
@endsection
@section('content')
    <!-- Main Menu Section -->
    <section class="products section">
        <div class="container">
            <div class="row">
                {{--Filtere--}}
                <div class="col-md-3">
                    {{--Sorths--}}
                    <div class="widget">
                        <h4 class="widget-title">Sırala</h4>
                        <form method="post" action="#">
                            <select class="form-control">
                                <option>Varsayılan</option>
                                <option>En Çok Satılan</option>
                                <option>A'dan Z'ye</option>
                                <option>Z'den A'ya</option>
                            </select>
                        </form>
                    </div>
                    {{--Sorths--}}
                    <div class="widget product-category">
                        <h4 class="widget-title">Filtreler</h4>
                        <div class="panel-group commonAccordion" id="accordion" role="tablist"
                             aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{--Başlık--}}Beden Seçimi
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#!">{{--İçerik--}}S</a></li>
                                            <li><a href="#!">{{--İçerik--}}M</a></li>
                                            <li><a href="#!">{{--İçerik--}}L</a></li>
                                            <li><a href="#!">{{--İçerik--}}XL</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            {{--Başlık--}}Renk Seçimi
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#!">{{--İçerik--}}Mavi</a></li>
                                            <li><a href="#!">{{--İçerik--}}Sarı</a></li>
                                            <li><a href="#!">{{--İçerik--}}Yeşil</a></li>
                                            <li><a href="#!">{{--İçerik--}}Kırmızı</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            {{--Burda Olucak diğer seçenekler--}}
                        </div>

                    </div>
                </div>
                {{--\Filtre--}}
                {{--Ürünler--}}
                <div class="col-md-9">
                    <div class="row">
                        {{--Prodduct Example--}}
                        @if(!empty($products))
                            @foreach($products as $product)
                                <div class="col-md-4">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            {{--Etiket--}}
                                            @if(!empty($product->out_of_stock) && $product->out_of_stock == 1)
                                                <span class="bage">Tükendi</span>
                                            @endif
                                            <img class="img-responsive"
                                                 src="{{asset('/UserSide').$product->image?? __('Gelmedi')}}"
                                                 alt="product-img"/>
                                            <div class="preview-meta">
                                                <ul>
                                                    <li>
									<span data-toggle="modal" data-target="#product-modal-{{$product->slug}}">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                                    </li>
                                                    <li>
                                                        <a href="#!"><i class="tf-ion-ios-heart"></i></a>{{--Fav--}}
                                                    </li>
                                                    <li>
                                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>{{--Add Cart--}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{route('product_preview',['slug' => $product->slug, 'id' => $product->id] ?? __(''))}}">{{$product->name ?? __('Gelmedi')}}</a></h4>{{--Name&Link--}}
                                            <p class="price">{{$product->price ?? __('Gelmedi')}}</p>{{--Price--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="modal product-modal fade" id="product-modal-{{$product->slug}}">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="tf-ion-close"></i>
                                    </button>
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                                        <div class="modal-image">
                                                            <img class="img-responsive"
                                                                 src="{{asset('/UserSide').$product->image ?? __('Gelmedi')}}"
                                                                 alt="product-img"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class="product-short-details">
                                                            <h2 class="product-title">{{$product->name ?? __('Gelmedi')}}</h2>
                                                            <p class="product-price">{{$product->price ?? __('Gelmedi')}}</p>
                                                            <p class="product-short-description">
                                                                {{$product->description ?? __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem
                                                                iusto nihil cum. Illo laborum numquam rem aut officia dicta
                                                                cumque.')}}
                                                            </p>
                                                            <a href="cart.html" class="btn btn-main">Sepete Ekle</a>
                                                            <a href="{{route('product_preview',['slug' => $product->slug, 'id' => $product->id])}}" class="btn btn-transparent">Ürün Detaylarını Göster</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{--\Prodduct Example--}}
                        <!-- Modal -->

                        <!-- /.modal -->

                    </div>
                </div>
                {{--\Ürünler--}}
            </div>
        </div>
    </section>
@endsection
