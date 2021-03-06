@extends('Cakebaker.layout.master')
@section('page-title','trang chu')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Chi Tiết Sản Phẩm</h3>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Product Details Area =================-->
    <section class="product_details_area p_100">
        <div class="container">
            <div class="row product_d_price">
                <div class="col-lg-6">
                    <div class="product_img"><img class="img-fluid" src="{{ asset('storage/'.substr($product->image_product,7)) }}" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="product_details_text">
                        <h4>{{ $product->name }}</h4>
                        <h5>Tình Trạng : <span class="text-success">{{($product->quantity > 0) ? 'Còn Hàng' : 'Tạm Thời Hết Hàng' }}</span></h5>
{{--                        <p>Kích Thước Bánh : {{ $product->size }} g</p>--}}
                        <h5>Giá : <span>{{ number_format($product->price) }} đ</span></h5>
                        <a class="pink_more" href="#">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="product_tab_area">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mô Tả</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Review (0)</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>{!!  $product->description  !!}</p>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Details Area =================-->

    <!--================Similar Product Area =================-->
    <section class="similar_product_area p_100">
        <div class="container">
            <div class="main_title">
                <h2>Sản Phẩm Liên Quan</h2>
            </div>
            <div class="row similar_product_inner">
                @foreach($cakeBakers as $cakeBaker)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cake_feature_item">
                        <a href="{{ route('product-detail',$cakeBaker->id) }}">
                            <div class="cake_img">
                                <img src="{{ asset('storage/'.substr($cakeBaker->image_product,7)) }}" alt="">
                            </div>
                        </a>
                        <div class="cake_text">
                            <h4>{{ number_format($cakeBaker->price) }}đ</h4>
                            <h3>{{ $cakeBaker->name }}</h3>
                            <a class="pest_btn" href="#">Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--================End Similar Product Area =================-->


@endsection
