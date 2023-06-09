@extends('admin.main')
@section('content')
    <form action="/admin/lop/add" method="post">
        @include('share.error')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã lớp học</label>
                <input type="text" name="malop" class="form-control" id="malop" placeholder="Nhập mã lớp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tên lớp học</label>
                <input type="text" name="tenlop" class="form-control" id="tenlop" placeholder="Nhập tên lớp">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text" name="mota" class="form-control" id="mota" placeholder="Nhập mô tả">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="exampleInputPassword1">Số lượng sinh viên</label>
                    <input type="number" name="soluongsv" class="form-control" id="soluongsv" placeholder="Nhập số lượng sv">
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
        @csrf
    </form>
@endsection
