@extends('layouts.admin')
@section('title')
<title>Trang quản trị</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title" style="font-size: 24px; font-weight: bold;">Danh sách sản phẩm</h3>
                    <a href="{{ route('products.create') }}" class="btn btn-warning float-right"  >Thêm mới</a> <!-- Sử dụng float-right -->
                </div>

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
                                
                                <td>
                                    <a href="{{ route('products.edit',['id' => $item->id]) }}" class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>
                                    <a href="{{ route('products.delete',['id' => $item->id]) }}" class="btn btn-sm btn-danger"><i class="icon ion-android-delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection