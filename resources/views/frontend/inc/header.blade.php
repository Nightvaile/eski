<!-- Start Top Header Bar -->
<section class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="contact-number">
                    <i class="tf-ion-ios-telephone"></i>
                    <span>+90 512 345 67 89</span>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Site Logo -->
                <div class="logo text-center">
                    <a href="{{route('homepage')}}">
                        <!-- replace logo here -->
                        <svg width="350px" height="50px" viewBox="0 0 140 35" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                               font-size="30" font-family="AustinBold, Austin" font-weight="bold">
                                <g id="Group" transform="translate(-25, -298)" fill="#000000">
                                    <text id="AVIATO">
                                        <tspan x="0" y="325">NİGHTVAİLE</tspan>
                                    </text>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Cart -->
                <ul class="top-menu text-right list-inline">
                    <li class="dropdown cart-nav dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                class="tf-ion-android-cart"></i>Sepet</a>
                        <div class="dropdown-menu cart-dropdown">
                            <!-- Cart Item -->
                            <div class="media">
                                <a class="pull-left" href="#!">
                                    <img class="media-object" src="{{ asset('UserSide/images/shop/cart/cart-1.jpg') }}"
                                         alt="image"/>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
                                    <div class="cart-price">
                                        <span>1 x</span>
                                        <span>1250.00</span>
                                    </div>
                                    <h5><strong>$1200</strong></h5>
                                </div>
                                <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
                            </div><!-- / Cart Item -->
                            <!-- Cart Item -->
                            <div class="media">
                                <a class="pull-left" href="#!">
                                    <img class="media-object" src="{{ asset('UserSide/images/shop/cart/cart-2.jpg') }}"
                                         alt="image"/>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
                                    <div class="cart-price">
                                        <span>1 x</span>
                                        <span>1250.00</span>
                                    </div>
                                    <h5><strong>$1200</strong></h5>
                                </div>
                                <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
                            </div><!-- / Cart Item -->

                            <div class="cart-summary">
                                <span>Total</span>
                                <span class="total-price">$1799.00</span>
                            </div>
                            <ul class="text-center cart-buttons">
                                <li><a href="cart.html" class="btn btn-small">View Cart</a></li>
                                <li><a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a></li>
                            </ul>
                        </div>

                    </li>
                    <!-- / Cart -->

                    <!-- Search -->
                    <li class="dropdown search dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                class="tf-ion-ios-search-strong"></i> Ara</a>
                        <ul class="dropdown-menu search-dropdown">
                            <li>
                                <form action="post"><input type="search" class="form-control" placeholder="Ara...">
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a type="button" class="btn" data-bs-toggle="button" href="{{ route('giris_yap') }}">Giriş
                            Yap</a>
                    </li>
                    <li>
                        <a type="button" class="btn" data-bs-toggle="button" href="{{ route('kayit_ol') }}">Kayıt
                            Ol</a>
                    </li>
                    <!-- / Search -->

                    {{--
                         <!-- Languages -->
                    <li class="commonSelect">
                        <select class="form-control">
                            <option>EN</option>
                            <option>DE</option>
                            <option>FR</option>
                            <option>ES</option>
                        </select>
                    </li>
                    <!-- / Languages -->
                    --}}

                </ul><!-- / .nav .navbar-nav .navbar-right -->
            </div>
        </div>
    </div>
</section>
<!-- End Top Header Bar -->
<!-- Main Menu Section -->
<section class="menu">
    <nav class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
                <h2 class="menu-title">Ana Menü</h2>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- / .navbar-header -->

            <!-- Navbar Links -->
            <div id="navbar" class="navbar-collapse collapse text-center">
                <ul class="nav navbar-nav">

                    <!-- Home -->
                    <li class="dropdown ">
                        <a href="{{ route('homepage') }}">Anasayfa</a>
                    </li><!-- / Home -->

                    {{--                    <!--  Elements -->
                                        <li class="dropdown dropdown-slide">
                                            <a href="{{route('erkek')}}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
                                               role="button" aria-haspopup="true" aria-expanded="false">Erkek <span
                                                    class="tf-ion-ios-arrow-down"></span></a>
                                            <ul class="dropdown-menu">
                                                <ul>
                                                    <li class="dropdown-header">Ürünler</li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Üst Giyim</a></li>
                                                    <li><a href="#">Alt Giyim</a></li>
                                                    <li><a href="#">Ayakabı</a></li>
                                                    <li><a href="#">Aksesuar</a></li>
                                                </ul>
                                            </ul>
                                        </li>
                                        <!-- / Elements -->
                --}}
                    @if(!empty($categories))
                        @foreach($categories as $kategori)
                            @if($kategori->parent_id === null)
                                <li class="dropdown dropdown-slide">
                                    <a href="{{ route('kategori_goster', ['kategori' => $kategori->slug, 'altKategori'=> null ]) }}"
                                       class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                       data-delay="350"
                                       role="button" aria-haspopup="true"
                                       aria-expanded="false">{{$kategori->name ?? _('ad gelmedi')}} <span
                                            class="tf-ion-ios-arrow-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <ul>
                                            <li class="dropdown-header">Kategoriler</li>
                                            <li role="separator" class="divider"></li>
                                            @include('frontend.inc.kategori',['altKategoriler' => $kategori->parent_id, 'kategori' => $kategori])
                                        </ul>
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    @endif
                    <li class="dropdown ">
                        <a href="{{ route('hakkimizda') }}">Hakkımızda</a>
                    </li>
                    <li class="dropdown ">
                        <a href="{{ route('iletisim') }}">İletişim</a>
                    </li>



                    <!-- Pages -->
                    {{--                    <li class="dropdown dropdown-slide">
                                            <a href="{{route('kadın')}}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                                data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Kadın<span
                                                    class="tf-ion-ios-arrow-down"></span></a>
                                            <div class="dropdown-menu">
                                                <div class="row">

                                                    <!-- Introduction -->
                                                    <div class="col-lg-6 col-md-6 mb-sm-3">
                                                        <ul>
                                                            <li class="dropdown-header">Ürünler</li>
                                                            <li role="separator" class="divider"></li>
                                                            <li><a href="#">Üst Giyim</a></li>
                                                            <li><a href="#">Alt Giyim</a></li>
                                                            <li><a href="#">Ayakabı</a></li>
                                                            <li><a href="#">Aksesuar</a></li>
                                                        </ul>
                                                    </div>
                                                    --}}{{--
                                                    <!-- Contact -->
                                                    <div class="col-sm-3 col-xs-12">
                                                        <ul>
                                                            <li class="dropdown-header">Dashboard</li>
                                                            <li role="separator" class="divider"></li>
                                                            <li><a href="dashboard.html">User Interface</a></li>
                                                            <li><a href="order.html">Orders</a></li>
                                                            <li><a href="address.html">Address</a></li>
                                                            <li><a href="profile-details.html">Profile Details</a></li>
                                                        </ul>
                                                    </div>

                                                    <!-- Utility -->
                                                    <div class="col-sm-3 col-xs-12">
                                                        <ul>
                                                            <li class="dropdown-header">Utility</li>
                                                            <li role="separator" class="divider"></li>
                                                            <li><a href="login.html">Login Page</a></li>
                                                            <li><a href="signin.html">Signin Page</a></li>
                                                            <li><a href="forget-password.html">Forget Password</a></li>
                                                        </ul>
                                                    </div> --}}{{--

                                                    <!-- Mega Menu -->
                                                    <div class="col-lg-6 col-md-6 mb-sm-3">
                                                        <a href="shop.html">
                                                            <img class="img-responsive"
                                                                src="{{ asset('UserSide/images/shop/header-img.jpg') }}"
                                                                alt="menu image" />
                                                        </a>
                                                    </div>
                                                </div><!-- / .row -->
                                            </div><!-- / .dropdown-menu -->
                                        </li>--}}
                    <!-- / Pages -->


        {{--              <!-- Blog -->
                      <li class="dropdown dropdown-slide">
                          <a href="{{route('cocuk')}}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                              data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Çocuk<span
                                  class="tf-ion-ios-arrow-down"></span></a>
                                  <div class="dropdown-menu">
                                      <div class="row">

                                          <!-- Basic -->
                                          <div class="col-lg-6 col-md-6 mb-sm-3">
                                              <ul>
                                                  <li class="dropdown-header">Erkek Çocuk</li>
                                                  <li role="separator" class="divider"></li>
                                                  <li><a href="#">Üst Giyim</a></li>
                                                  <li><a whref="#">Alt Giyim</a></li>
                                                  <li><a href="#">Ayakabı</a></li>
                                                  <li><a href="#">Aksesuar</a></li>
                                                  --}}{{-- <li><a href="#">Confirmation</a></li> --}}{{--
                                              </ul>
                                          </div>
                                          <!-- Layout -->
                                          <div class="col-lg-6 col-md-6 mb-sm-3">
                                              <ul>
                                                  <li class="dropdown-header">Kız Çocuk</li>
                                                  <li role="separator" class="divider"></li>
                                                  <li><a href="#">Üst Giyim</a></li>
                                                  <li><a whref="#">Alt Giyim</a></li>
                                                  <li><a href="#">Ayakabı</a></li>
                                                  <li><a href="#">Aksesuar</a></li>
                                              </ul>
                                          </div>

                                      </div><!-- / .row -->
                                  </div><!-- / .dropdown-menu -->
          <!-- Shop -->
          <li class="dropdown dropdown-slide">
              <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
                  role="button" aria-haspopup="true" aria-expanded="false">Fırsatlar
                  <span class="tf-ion-ios-arrow-down"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="typography.html">Outlet Ürünler</a></li>
                  <li><a href="buttons.html">İndirimli Yeni Sezon Ürünleri</a></li>
                  <li><a href="alerts.html">Sezon Sonu Ürünler</a></li>
              </ul>
          </li><!-- / Blog -->
          </ul><!-- / .nav .navbar-nav -->

          </div>
          <!--/.navbar-collapse -->
          </div><!-- / .container -->--}}
    </nav>
</section>
