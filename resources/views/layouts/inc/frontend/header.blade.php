<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="{{route('login')}}">Sign In</a>
            <a href="{{route('register')}}">Sign Up</a>
            <a href="#">FAQs</a>
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="{{asset('assets/img/icon/search.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('assets/img/icon/heart.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('assets/img/icon/cart.png')}}" alt=""> <span>0</span></a>
        <div class="price">$0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <a href="{{route('login')}}">Sign In</a>
                            <a href="{{route('register')}}">Sign Up</a>
                            <a href="#">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('frontend.products')}}">Shop</a></li>

                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./about.html">About Us</a></li>
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Categories</a>
                            <ul class="dropdown">
                                @foreach($categories as $category)
                                    <li><a href="">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li><a href="./contact.html">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('assets/img/icon/search.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/img/icon/heart.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/img/icon/cart.png')}}" alt=""></a>
                </div>
                <nav class="navbar">
                    <li class="nav  dropdown">
                        <a class="" href=""  data-toggle="dropdown">
                            <img src="{{asset('assets/img/icon/user.png')}}" width="20px" alt="">
                        </a>
                        <div class="dropdown-menu" >
                            @guest
                                <a class="dropdown-item" href="{{route('login')}}">Login</a>
                                <a class="dropdown-item" href="{{route('register')}}">register</a>
                            @else

                                <hr>
                                <a class="dropdown-item" href="{{route('cart')}}">cart</a>
                                 <a class="dropdown-item" href="#">orders</a>
                                <a class="dropdown-item" href="#">wishlist</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            @endguest
                        </div>
                    </li>
                </nav>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->



