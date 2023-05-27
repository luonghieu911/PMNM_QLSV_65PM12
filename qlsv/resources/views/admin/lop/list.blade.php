@extends('admin.main')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã lớp</th>
                <th>Tên lớp</th>
                <th>Mô tả</th>
                <th>Số lượng SV</th>
                <th >Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lops as $lop)
                <tr>
                    <td>{{$lop->id}}</td>
                    <td>{{$lop->malop}}</td>
                    <td>{{$lop->tenlop}}</td>
                    <td>{{$lop->mota}}</td>
                    <td>{{$lop->soluongsv}}</td>
                    <td>
                        <a class="btn btn-primary mr-2" href="/admin/lop/edit/{{$lop->id}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger " href=""><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            <tr></tr>
        </tbody>
    </table>
    {{ $lops->links() }}
@endsection
