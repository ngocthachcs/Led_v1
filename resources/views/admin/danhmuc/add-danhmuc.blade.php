@extends('master-admin')
@section('content')
<h3>Thêm danh mục sản phẩm</h3>
<form class="container" action="{{URL('')}}/admin/quan-ly-danh-muc/them-moi" method="POST">
    <div class="form-group row col-4">
        <label>Tên danh mục</label>
        <input class="form-control" placeholder="Tên danh mục" name="dm[name]">
    </div>
    <div class="form-group row col-4">
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{URL('/admin/quan-ly-danh-muc/')}}" class="btn btn-default">Hủy</a>
    </div>
</form>
@endsection