@extends('page.layout.master')
@section('page-title','trang chu')
@section('content')
    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Giỏ Hàng Của Bạn</h3>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Cart Table Area =================-->
    <section class="cart_table_area p_100">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Thành Tiền</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <img src="img/product/cart-img.jpg" alt="">
                        </td>
                        <td>Wheel Axel</td>
                        <td>$25.00</td>
                        <td>
                            <a href="" class="ml-2" ><span>-</span></a>
                            <span class="ml-2">2</span>
                            <a href="" class="ml-2"><span>+</span></a>
                        </td>
                        <td>$25.00</td>
                        <td><a href="">X</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row cart_total_inner">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <div class="cart_total_text">
                        <div class="cart_head">
                            Đơn Hàng Của Bạn
                        </div>
                        <div class="total">
                            <h4>Tổng Tiền <span>$25.00</span></h4>
                        </div>
                        <div class="cart_footer">
                            <a class="pest_btn" href="#">Thanh Toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Table Area =================-->
@endsection
