@extends('admin.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chi Tiết Đơn Hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Chi Tiết Đơn Hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h3>Thông Tin Khách Hàng</h3>
                    @foreach($orders as $order)
                    <p>Họ Và Tên : {{ $order->customer->name }}</p>
                    <p>Địa Chỉ  : {{ $order->customer->address }}</p>
                    <p>Email : {{ $order->customer->email }}</p>
                    <p>Số Điện Thoại : {{ $order->customer->phone }}</p>
                @endforeach
                        <!-- /.card-body -->
                    </div>
                <div class="col-6">
                    <h3>Chi Tiết Đơn Hàng</h3>
                  @foreach($orderDetails as $orderDetail)
                    <p>Tên Sản Phẩm : {{ $orderDetail->name }}</p>
                    <p>Số lượng : {{ $orderDetail->quantity }}</p>
                    <p>Giá sản phẩm: {{ $orderDetail->price }}</p>
                    <p>Tổng tiền : {{ $orderDetail->total }}</p>
                    @endforeach
                </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
