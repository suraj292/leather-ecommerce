<div>
    <header class="header-5" style="z-index: 1;">
        <div class="mobile-fix-option"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="brand-logo">
                                <a href="{{route('home')}}"> <img src="{{asset('assets/images/icon/logo/f8.png')}}" class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                        </li>
                                        <li><a href="{{route('home')}}">Italian Leather</a></li>
                                        <li class="mega" id="hover-cls">
                                            <a href="#">SHOP</a>
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Category</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            @foreach($categories as $category)
                                                                                <li>
                                                                                    <a href="{{ url('products/'.$category['product_category']) }}">
                                                                                        {{ $category['product_category'] }}
                                                                                        <i class="fa fa-bolt icon-trend" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Collection</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            @foreach($collections as $collection)
                                                                                <li>
                                                                                    <a href="{{ route('collection', Str::slug($collection->name)) }}">
                                                                                        {{ $collection->name }}
                                                                                    </a>
                                                                                </li>
                                                                            @endforeach
{{--                                                                            <li><a href="index.html">exit<i--}}
{{--                                                                                        class="ms-2 fa fa-bolt icon-trend"--}}
{{--                                                                                        aria-hidden="true"></i></a>--}}
{{--                                                                            </li>--}}
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>cookie bar</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="index.html">bottom<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a>
                                                                            </li>
                                                                            <li><a href="fashion-4.html">bottom
                                                                                    left</a></li>
                                                                            <li><a href="bicycle.html">bottom
                                                                                    right</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title mt-2">
                                                                        <h5>search</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="marketplace-demo-2.html">ajax
                                                                                    search<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>invoice template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                   href="invoice-1.html">invoice
                                                                                    1</a></li>
                                                                            <li><a target="_blank"
                                                                                   href="invoice-2.html">invoice
                                                                                    2</a></li>
                                                                            <li><a target="_blank"
                                                                                   href="invoice-3.html">invoice
                                                                                    3</a></li>
                                                                            <li><a target="_blank"
                                                                                   href="invoice-4.html">invoice
                                                                                    4</a></li>
                                                                            <li><a target="_blank"
                                                                                   href="invoice-5.html">invoice
                                                                                    5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                   href="http://themes.pixelstrap.com/multikart/email-template/email-order-success.html">order
                                                                                    success</a></li>
                                                                            <li><a target="_blank"
                                                                                   href="http://themes.pixelstrap.com/multikart/email-template/email-order-success-two.html">order
                                                                                    success 2</a></li>
                                                                            <li><a target="_blank"
                                                                                   href="http://themes.pixelstrap.com/multikart/email-template/email-template.html">email
                                                                                    template</a></li>
                                                                            <li><a target="_blank"
                                                                                   href="http://themes.pixelstrap.com/multikart/email-template/email-template-two.html">email
                                                                                    template 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title mt-2">
                                                                        <h5>elements</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="elements.html">
                                                                                    elements page<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i>
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="../assets/images/menu-banner.jpg"
                                                                     class="img-fluid mega-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
{{--                                            <ul>--}}
{{--                                                @foreach($categories as $category)--}}
{{--                                                    <li>--}}
{{--                                                        <a href="{{ route('products', $category->product_category) }}">{{$category->product_category}}</a>--}}
{{--                                                        @if(count($category->sub_category) > 0)--}}
{{--                                                            <ul>--}}
{{--                                                                @foreach($category->sub_category as $subcategory)--}}
{{--                                                                    <li><a wire:click="$emit('product_category', {{$subcategory->id}})">{{$subcategory->sub_category}}</a></li>--}}
{{--                                                                @endforeach--}}
{{--                                                            </ul>--}}
{{--                                                        @endif--}}
{{--                                                    </li>--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
                                        </li>
                                        <li class="mega" id="hover-cls">
                                            <a href="#">Leather & Art</a>
                                        </li>
                                        <li>
                                            <a href="#">value combo</a>
                                        </li>
                                        <li>
                                            <a href="#">Blogs</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <div class="top-header">
                                <ul class="header-dropdown">

                                    <li class="mobile-wishlist">
                                        <a href="#">
                                            <img src="{{asset('assets/images/jewellery/icon/heart.png')}}" alt="">
                                        </a>
                                    </li>

                                    <li class="onhover-dropdown mobile-account">
                                        <img src="{{asset('assets/images/jewellery/icon/avatar.png')}}" alt="">
                                        <ul class="onhover-show-div">
                                            @auth()
                                                <li>
                                                    <a class="text-uppercase text-decoration-underline">
                                                        {{ $user->name }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Profile
                                                    </a>
                                                </li>
                                                <li>
                                                    <a wire:click="logout">
                                                        Logout
                                                    </a>
                                                </li>
                                            @endauth
                                            @guest()
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        Sign in
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('register') }}">
                                                        Register
                                                    </a>
                                                </li>
                                            @endguest
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div><img src="{{asset('assets/images/jewellery/icon/search.png')}}"
                                                      onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                                                <i class="ti-search" onclick="openSearch()"></i>
                                            </div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div>
                                                    <span class="closebtn" onclick="closeSearch()"
                                                          title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                   id="exampleInputPassword1"
                                                                                   placeholder="Search a Product">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i
                                                                                class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div>
                                                <img src="{{asset('assets/images/jewellery/icon/cart.png')}}"
                                                      class="img-fluid blur-up lazyload" alt="">
                                                <i class="ti-shopping-cart"></i>
                                            </div>
                                            @if(!is_null($cart))
                                            <span class="cart_qty_cls">{{ count($cart) }}</span>

                                            <ul class="show-div shopping-cart">
                                                <!-- Cart product -->
                                                <span style="display: none;">
                                                    {{ $subtotal=0 }}
                                                </span>
                                                @foreach($cart as $key => $cartProduct)
                                                    <li>
                                                        <div class="media">
                                                            <a href="#">
                                                                <img alt="" class="me-3" src="{{asset('storage/product/small/'.$cartProduct['image'])}}">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#"> <h4>{{ $cartProduct['title'] }}</h4> </a>
                                                                <h4>
                                                                    <span>
                                                                        {{ $cartProduct['quantity'] }}  x $
                                                                        {{$cartProduct['quantity'] * $cartProduct['price'] }}
                                                                    </span>
                                                                    <span style="display: none;">
                                                                        {{ $subtotal += $cartProduct['quantity'] * $cartProduct['price'] }}
                                                                    </span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="close-circle">
                                                            @auth()
                                                                <a wire:click="dProductCart({{ $cartProduct['product_id'] }})">
                                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                                </a>
                                                            @endauth
                                                            @guest()
                                                                <a wire:click="dProductCart({{ $key }})">
                                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                                </a>
                                                            @endguest
                                                        </div>
                                                    </li>
                                                @endforeach
                                                <!-- Cart subtotal -->
                                                <li>
                                                    <div class="total">
                                                        <h5>subtotal : <span>{{ $subtotal }}</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons">
                                                        <a href="cart.html" class="view-cart">view cart</a>
                                                        <a href="#" class="checkout">checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                            @else
                                                <ul class="show-div shopping-cart">
                                                    <!-- if empty Cart product -->
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h5>No Product added to cart.</h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
