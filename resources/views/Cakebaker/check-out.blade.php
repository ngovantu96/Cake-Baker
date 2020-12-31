@extends('Cakebaker.layout.master')
@section('page-title','trang chu')
@section('content')
    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Thanh Toán Đơn Hàng</h3>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Billing Details Area =================-->
    <section class="billing_details_area p_100">
        <div class="container">
            <div class="return_option">
                <h4>Bạn Chưa Có Tài Khoản? <a href="#">Click Vào Đây Để Đăng Kí</a></h4>
            </div>
            <div class="return_option">
                <h4>Mua Hàng Không Cần Tài Khoản</h4>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="main_title">
                        <h2>Chi Tiết Thanh Toán</h2>
                    </div>
                    <div class="billing_form_area">
                        <form class="billing_form row" action="{{ route('order.checkout') }}" method="post" >
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="first">Họ Và Tên *</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ Và Tên">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="address">Địa Chỉ *</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Địa Chỉ">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Địa Chỉ Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone *</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="note">Ghi Chú *</label>
                                <textarea class="form-control" name="note" id="note" rows="1" placeholder="ghi chú"></textarea>
                            </div>
                            <input type="submit"  class="btn pest_btn" value="Xác nhận mua hàng">
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="order_box_price">
                        <div class="main_title">
                            <h2>Đơn Hàng Của Bạn</h2>
                        </div>
                        @if($cart)
                        <div class="payment_list">
                            <div class="price_single_cost">
                                <h5>Sản Phẩm <span>Tổng Tiền</span></h5>
                                @foreach(@$cart->products as $item)
                                <h5>{{$item['productInfo']->name}} x {{ $item['qty'] }} <span>{{ number_format($item['price']) }}đ</span></h5>
                                @endforeach
                                <h5>Phí Giao Hàng<span class="text_f">Miễn Phí</span></h5>
                                <h3>Tổng Tiền <span>{{ number_format($cart->totalPrice) }}đ</span></h3>
                            </div>
                            <div id="accordion" class="accordion_area">
                                <div class="card">
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Nhận Hàng khi thanh toán</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Billing Details Area =================-->

    <!--================Newsletter Area =================-->
    <section class="newsletter_area">
        <div class="container">
            <div class="row newsletter_inner">
                <div class="col-lg-6">
                    <div class="news_left_text">
                        <h4>Join our Newsletter list to get all the latest offers, discounts and other benefits</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="newsletter_form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Subscribe Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Newsletter Area =================-->
@endsection
