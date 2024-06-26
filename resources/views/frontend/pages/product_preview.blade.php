@extends('frontend.layout.layout')
@section('title')
    Urun
@endsection
@section('content')
    <section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="{{route('homepage')}}">Anasayfa</a></li>
                        <li><a href="{{route('kategori_goster')}}">Ürünler</a></li>
                        <li class="active">{{$product->name}}</li>
                    </ol>
                </div>
                {{--<div class="col-md-6">
                    <ol class="product-pagination text-right">
                        <li><a href="blog-left-sidebar.html"><i class="tf-ion-ios-arrow-left"></i> Next </a></li>
                        <li><a href="blog-left-sidebar.html">Preview <i class="tf-ion-ios-arrow-right"></i></a></li>
                    </ol>
                </div>--}}
            </div>
            <div class="row mt-20">
                <div class="col-md-5">
                    <div class="single-product-slider">
                        <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                            <div class='carousel-outer'>
                                <!-- me art lab slider -->
                                <div class='carousel-inner '>
                                    <div class='item active'>
                                        <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-1.jpg')}}' alt='' data-zoom-image="images/shop/single-products/product-1.jpg" />
                                    </div>
                                    <div class='item'>
                                        <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-2.jpg')}}' alt='' data-zoom-image="images/shop/single-products/product-2.jpg" />
                                    </div>

                                    <div class='item'>
                                        <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-3.jpg')}}' alt='' data-zoom-image="images/shop/single-products/product-3.jpg" />
                                    </div>
                                    <div class='item'>
                                        <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-4.jpg')}}' alt='' data-zoom-image="images/shop/single-products/product-4.jpg" />
                                    </div>
                                    <div class='item'>
                                        <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-5.jpg')}}' alt='' data-zoom-image="images/shop/single-products/product-5.jpg" />
                                    </div>
                                    <div class='item'>
                                        <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-6.jpg')}}' alt='' data-zoom-image="images/shop/single-products/product-6.jpg" />
                                    </div>

                                </div>

                                <!-- sag sol -->
                                <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                    <i class="tf-ion-ios-arrow-left"></i>
                                </a>
                                <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                    <i class="tf-ion-ios-arrow-right"></i>
                                </a>
                            </div>

                            <!-- thumb -->
                            <ol class='carousel-indicators mCustomScrollbar meartlab'>
                                <li data-target='#carousel-custom' data-slide-to='0' class='active'>
                                    <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-1.jpg')}}' alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='1'>
                                    <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-2.jpg')}}' alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='2'>
                                    <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-3.jpg')}}' alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='3'>
                                    <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-4.jpg')}}' alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='4'>
                                    <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-5.jpg')}}' alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='5'>
                                    <img src='{{asset('UserSide').$product->image ?? __('images/shop/single-products/product-6.jpg')}}' alt='' />
                                </li>
                                {{--<li data-target='#carousel-custom' data-slide-to='6'>
                                    <img src='' alt='' />
                                </li>--}}
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-details">
                        <h2>{{$product->name}}</h2>
                        <p class="product-price">{{$product->price}}</p>

                        <p class="product-description mt-20">
                            {{$product->description ?? __('Gelmedi')}}
                        </p>
                        <div class="color-swatches">
                            <span>Renk:</span>
                            <ul>
                                <li>
                                    <a href="#!" class="swatch-violet"></a>
                                </li>
                                <li>
                                    <a href="#!" class="swatch-black"></a>
                                </li>
                                <li>
                                    <a href="#!" class="swatch-cream"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-size">
                            <span>Beden:</span>
                            <select class="form-control">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>
                        <div class="product-quantity">
                            <span>Adet:</span>
                            <div class="product-quantity-slider">
                                <input id="product-quantity" type="text" value="0" name="product-quantity">
                            </div>
                        </div>
                        {{--<div class="product-category">
                            <span>Categories:</span>
                            <ul>
                                <li><a href="product-single.html">Products</a></li>
                                <li><a href="product-single.html">Soap</a></li>
                            </ul>
                        </div>--}}
                        <a href="cart.html" class="btn btn-main mt-20">Sepete Ekle</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="tabCommon mt-20">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Ayrıntılar</a></li>
                            <li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">İncelemeler ({{count($reviews)}})</a></li>
                        </ul>
                        <div class="tab-content patternbg">
                            <div id="details" class="tab-pane fade active in">
                                <h4>Ürün Açıklaması</h4>
                                {{$product->description}}
                            </div>
                            <div id="reviews" class="tab-pane fade">
                                <div class="post-comments">
                                    <ul class="media-list comments-list m-bot-50 clearlist">
                                        <!-- Comment Item start-->
                                        <li class="media">

                                            {{--<a class="pull-left" href="#!">
                                                <img class="media-object comment-avatar" src="{{asset('UserSide')}}/images/blog/avater-1.jpg" alt="" width="50" height="50" />
                                            </a>--}}

                                            <div class="media-body">
                                                <div class="comment-info">
                                                    <h4 class="comment-author">
                                                        <a href="#!">Jonathon Andrew</a>

                                                    </h4>
                                                    <time datetime="2013-04-06T13:53">July 02, 2015, at 11:34</time>
                                                    <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
                                                </div>

                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod laborum minima, reprehenderit laboriosam officiis praesentium? Impedit minus provident assumenda quae.
                                                </p>
                                            </div>

                                        </li>
                                        <!-- End Comment Item -->

                                       @foreach($reviews as $review)
                                            <!-- Comment Item start-->
                                            <li class="media">

                                                {{--<a class="pull-left" href="#!">
                                                    <img class="media-object comment-avatar" src="{{asset('UserSide').$review->profile ?? __('Gelemedi')}}" alt="" width="50" height="50" />
                                                </a>--}}

                                                <div class="media-body">
                                                    <div class="comment-info">
                                                        <h4 class="comment-author">
                                                            @foreach($customers as $customer)
                                                                @if($customer->id == $review->user_id)
                                                                    <a href="#!">{{$customer->name ?? __('Gelemedi')}}</a>
                                                                @endif
                                                            @endforeach
                                                        </h4>
                                                        <time datetime="2013-04-06T13:53">{{$review->created_at ?? __('Gelemedi')}}</time>
                                                        {{--<a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>--}}
                                                    </div>
                                                    <p>
                                                        {{$review->comment ?? __('Gelemedi')}}
                                                    </p>
                                                </div>
                                            </li>
                                            <!-- End Comment Item -->
                                       @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products related-products section">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>İlgili Ürünler</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <span class="bage">Sale</span>
                            <img class="img-responsive" src="{{asset('UserSide')}}/images/shop/products/product-5.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">Reef Boardsport</a></h4>
                            <p class="price">$200</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="{{asset('UserSide')}}/images/shop/products/product-1.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">Rainbow Shoes</a></h4>
                            <p class="price">$200</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="{{asset('UserSide')}}/images/shop/products/product-2.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">Strayhorn SP</a></h4>
                            <p class="price">$230</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="{{asset('UserSide')}}/images/shop/products/product-3.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">Bradley Mid</a></h4>
                            <p class="price">$200</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal product-modal fade" id="product-modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="tf-ion-close"></i>
        </button>
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="modal-image">
                                <img class="img-responsive" src="{{asset('UserSide')}}/images/shop/products/modal-product.jpg" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-short-details">
                                <h2 class="product-title">GM Pendant, Basalt Grey</h2>
                                <p class="product-price">$200</p>
                                <p class="product-short-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
                                </p>
                                <a href="#!" class="btn btn-main">Sepete Ekle</a>
                                <a href="#!" class="btn btn-transparent">Ürün Detaylarını Görüntüle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
