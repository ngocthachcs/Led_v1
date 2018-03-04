@extends('master-admin')
@section('content')
        <form class="container" action="{{URL('admin/quan-ly-san-pham/cap-nhat')}}" method="POST" enctype="multipart/form-data">
        <input class="d-none" name="sp[id]" value="{{$sanpham->id}}">
        <input class="d-none" name="sp[img]" value="{{$sanpham->img}}">
        <div class="form-group row">
            <div class="col-6" required>
                <label>Tiêu đề</label>
                <input class="form-control" placeholder="Tên sản phẩm" name="sp[title]" value="{{$sanpham->title}}">
            </div>
            <div class="form-group col-6">
                <label for="exampleSelect2">Loại sản phẩm</label>
                <select class="form-control" style="height: 34px !important" name="sp[status]">
                    <option value="0" @if(0 == $sanpham->status) selected @endif>Sản phẩm thường</option>
                    <option value="1" @if(1 == $sanpham->status) selected @endif>Sản phẩm nổi bật</option>
                    <option value="2" @if(2 == $sanpham->status) selected @endif>Sản phẩm khuyến mãi</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="exampleSelect2">Danh mục</label>
                <select class="form-control" style="height: 34px !important" name="sp[category_id]">
                    <option value="">Chọn</option>
                    @foreach($danhmucs as $danhmuc)
                    <option value="{{$danhmuc->id}}" @if($danhmuc->id == $sanpham->category_id) selected @endif>{{$danhmuc->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3" required>
                <label>Giá bán</label>
                <input class="form-control" placeholder="Giá bán" name="sp[price]" value="{{$sanpham->price}}">
            </div>
            <div class="col-3">
                <label>Giá khuyến mại (Nếu có)</label>
                <input class="form-control" placeholder="Giá khuyến mại" name="sp[old_price]" value="{{$sanpham->old_price}}">
            </div>
        </div>
        <div class="form-group">
            <label>Thông số kĩ thuật</label>
            <textarea class="form-control" id="info" name="sp[thong_so_ky_thuat]">{{$sanpham->thong_so_ky_thuat}}</textarea>
        </div>
        <div class="form-group">
            <label>Mô tả sản phẩm</label>
            <textarea class="form-control" id="Desc" name="sp[mo_ta]">{{$sanpham->mo_ta}}</textarea>
        </div>
        <div class="form-group">
            <label>Ảnh</label>
            <input type="file" class="form-control-file" name="file">
            <small class="form-text text-muted">Ảnh đại diện cho sản phẩm này</small>
        </div>
        <button type="submit" class="btn btn-primary">Tải lên</button>
    </form>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#info').summernote();
        $('#Desc').summernote();
    });
</script>
@endsection