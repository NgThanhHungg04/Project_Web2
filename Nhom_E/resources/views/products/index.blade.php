@extends('layouts.admin')
@section('title')
<title>Trang quản trị</title>
@endsection
@section('content')
<div class="content-wrapper">
<<<<<<< HEAD
=======
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
>>>>>>> category_admin
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
<<<<<<< HEAD
                <h3 class="card-title" style="font-size: 24px; font-weight: bold;">Danh sách sản phẩm</h3>
                    <a href="{{ route('products.create') }}" class="btn btn-warning float-right"  >Thêm mới</a> <!-- Sử dụng float-right -->
                </div>

=======
                    <h3 class="card-title">Danh sách sản phẩm</h3>
                    <a style="margin-left: 20px;" href="{{ route('products.create') }}" class="btn btn-warning">Thêm mới</a>
                </div>
>>>>>>> category_admin
                @if (session('status'))
                <p class="text-warning" style="margin:0px;padding:0px;margin-left:20px">
                    {{ session('status') }}
                </p>
                @endif
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Khuyến mãi</th>
<<<<<<< HEAD
=======
                                <th>Hiển thị</th>
                                <th>Hot</th>
                                <th>Bật/Tắt KM</th>
>>>>>>> category_admin
                                <th style="width: 12%;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <img src="/images/{{ $item->images }}" style="width:100px;height:80px" alt="">
                                </td>
                                <td>{{ $item->quatity }}</td>
                                <td style="font-weight:600;color:red">{{ number_format($item->price) }} đồng</td>
                                <td style="font-weight:500;color:green">{{ number_format($item->discount) }} đồng</td>
<<<<<<< HEAD
                                
                                <td>
                                    <a href="{{ route('products.edit',['id' => $item->id]) }}" class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>
                                    <a href="{{ route('products.delete',['id' => $item->id]) }}" class="btn btn-sm btn-danger"><i class="icon ion-android-delete"></i></a>
=======
                                <td>
                                    <input type="checkbox" {{ $item->homeflag }} name="homeflag">
                                </td>
                                <td>
                                    <input type="checkbox" {{ $item->hotflag }} name="hotflag">
                                </td>
                                <td>
                                    <input type="checkbox" {{ $item->isdiscount }} name="isdiscount">
                                </td>

                                <td>
                                    <a href="{{ route('products.edit',['id' => $item->id]) }}" class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>

                                    <!-- Nút xóa với modal xác nhận -->
                                    <button class="btn btn-sm btn-danger" onclick="showDeleteModal({{ $item->id }})"><i class="icon ion-android-delete"></i></button>
>>>>>>> category_admin
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
<<<<<<< HEAD
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
=======

            </div>
        </div>
    </div>
>>>>>>> category_admin
</div>
@endsection