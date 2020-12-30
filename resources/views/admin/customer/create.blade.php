@extends('admin.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm Mới Khách Hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        {{--                        <li class="breadcrumb-item active">Danh Sách Khách Hàng</li>--}}
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12 col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <h1>Thêm Mới Khách Hàng</h1>
                                    </div>
                                    <div class="col-12">
                                        <form method="post" action="{{ route('customer.store') }}" >
                                            @csrf
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="name">Họ Và Tên</label>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="họ và tên" required>
                                                    </div>
                                                    @error('name')
                                                    <p class="alert alert-danger">{{ $message }}</p>
                                                    @enderror
                                                    <div class="form-group">
                                                        <label for="address">Địa Chỉ</label>
                                                        <input type="text" class="form-control" name="address"  placeholder="địa chỉ" required>
                                                    </div>
                                                    @error('name')
                                                    <p class="alert alert-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="phone">Số Điện Thoai</label>
                                                        <input type="text" class="form-control" name="phone" placeholder="Số Điện Thoai" required>
                                                    </div>
                                                    @error('name')
                                                    <p class="alert alert-danger">{{ $message }}</p>
                                                    @enderror
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                                    </div>
                                                    @error('email')
                                                    <p class="alert alert-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Thêm Mới</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- /.card-header -->

                        <!-- /.card-body -->
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
