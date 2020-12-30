@extends('Cakebaker.layout.master')
@section('page-title','trang chu')
@section('content')
    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Chi Tiết Đơn Hàng Của Bạn</h3>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Billing Details Area =================-->
    <section class="billing_details_area p_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2>Chi Tiết Đơn Hàng</h2>
                    </div>
                <div class="col-lg-12">
                    <div class="order_box_price">
                        <div class="payment_list">
                            <div class="price_single_cost">
                                <h5>Tên Người Nhận <span>Tên chi Đó</span></h5>
                                <h5>Email <span>Emai@gmail.com</span></h5>
                                <h5>Số Điện Thoại <span>09033345435</span></h5>
                                <h5>Địa Chỉ Nhận Người Nhận <span>ngư thủy trung -lệ thủy-quảng bình</span></h5>
                                <h5>Tên Sản  Phẩm x 1 <span>$65.00</span></h5>
                                <h5>Phí Giao Hàng<span class="text_f">Miễn Phí</span></h5>
                                <h3>Tổng Tiền <span>$65.00</span></h3>
                            </div>
                        </div>
                        </div>
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
