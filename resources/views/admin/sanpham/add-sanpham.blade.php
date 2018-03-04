@extends('master-admin')
@section('content')
        <form class="container" action="{{URL('admin/quan-ly-san-pham/them-moi')}}" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <div class="col-6" required>
                <label>Tiêu đề</label>
                <input class="form-control" placeholder="Tên sản phẩm" name="sp[title]">
            </div>
            <div class="form-group col-6">
                <label for="exampleSelect2">Loại sản phẩm</label>
                <select class="form-control" name="sp[status]">
                    <option value="0">Sản phẩm thường</option>
                    <option value="1">Sản phẩm khuyến mãi</option>
                    <option value="2">Sản phẩm nổi bật</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="exampleSelect2">Danh mục</label>
                <select class="form-control" name="sp[category_id]">
                    <option value="">Chọn</option>
                    @foreach($danhmucs as $danhmuc)
                    <option value="{{$danhmuc->id}}">{{$danhmuc->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3" required>
                <label>Giá bán</label>
                <input class="form-control" placeholder="Giá bán" name="sp[price]">
            </div>
            <div class="col-3">
                <label>Giá khuyến mại (Nếu có)</label>
                <input class="form-control" placeholder="Giá khuyến mại" name="sp[old_price]">
            </div>
        </div>
        <div class="form-group">
            <label>Thông số kĩ thuật</label>
            <textarea class="form-control" id="info" name="sp[thong_so_ky_thuat]"></textarea>
        </div>
        <div class="form-group">
            <label>Mô tả sản phẩm</label>
            <textarea class="form-control" id="Desc" name="sp[mo_ta]"></textarea>
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