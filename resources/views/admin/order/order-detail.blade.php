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
                <div class="col-lg-6 col-md-12">
                    <h3>Thông Tin Khách Hàng</h3>
                    @foreach($orders as $order)
                    <p>Họ Và Tên : {{ $order->customer->name }}</p>
                    <p>Địa Chỉ  : {{ $order->customer->address }}</p>
                    <p>Email : {{ $order->customer->email }}</p>
                    <p>Số Điện Thoại : {{ $order->customer->phone }}</p>
                    @endforeach
                        <!-- /.card-body -->
                    </div>
                <div class="col-lg-6 col-md-12">
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
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <h3>Gửi Mail Cho Khách Hàng</h3>
                    <form action="{{ route('send-mail') }}" method="post">
                        @csrf
                    <div class="form-group">
                        <label for="name">Họ Và Tên</label>
                        <input type="text" class="form-control" name="name" id="name" >
                    </div>
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="name" >
                    </div>
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="subject">Tiêu Đề</label>
                        <input type="subject" class="form-control" name="subject" id="subject" >
                    </div>
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="content">Nội Dung</label>
                        <textarea class="form-control" name="subject" id="content" rows="3" placeholder="Nội Dung"></textarea>
                    </div>
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror
                    <input type="submit" value="Gửi" class="btn btn-primary">
                    </form>
                </div>
            </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
