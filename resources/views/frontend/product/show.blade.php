@extends('layouts.app')

@section('content')
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="{{route('index')}}">Home</a>
                            <a href="{{route('frontend.products')}}">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        @if($product->productImages)
                            <ul class="nav nav-tabs" role="tablist">
                                @foreach($product->productImages as $key => $itemImg)
                                    <li class="nav-item">
                                        <a class="nav-link {{ $key == 0 ? 'active' : '' }}" data-toggle="tab"
                                           href="#tabs-{{++$key}}" role="tab">
                                            <div class="product__thumb__pic set-bg"
                                                 data-setbg="{{ asset($itemImg->image) }}"></div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-9">
                        @if($product->productImages)
                            <div class="tab-content">
                                @foreach($product->productImages as $key => $itemImg)
                                    <div class="tab-pane {{ $key == 0 ? 'active' : '' }}" id="tabs-{{++$key}}"
                                         role="tabpanel">
                                        <div class="product__details__pic__item">
                                            <img src="{{ asset($itemImg->image) }}" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{$product->name}}</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
                            </div>

                            <form method="POST" action="{{route('add-cart', ['id' => $product->id])}}">
                                @csrf
                                <div class="product__details__cart__option">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="number" name="quantity" value="1"
                                                   min="1" max="{{$product->quantity}}">
                                        </div>
                                    </div>

                                    <button type="submit" class="primary-btn">add to cart</button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                       role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Customer
                                        Previews(5)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Additional
                                        information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                @foreach($related_products as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                        <div class="product__item">
                            <a href="{{ url('product/' . $item->slug) }}">
                                <div class="product__item__pic set-bg" data-setbg="{{asset($item->image)}}"></div>
                            </a>

                            <div class="product__item__text">
                                <h6>{{$item->name}}</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <h5>{{$item->price}}.00₮</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Section End -->
@endsection
