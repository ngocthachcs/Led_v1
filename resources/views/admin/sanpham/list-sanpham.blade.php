@extends('master-admin')
@section('content')
    <button class="btn btn-success">
        <a href="upload.html">Thêm sản phẩm mới</a>
    </button>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width: 50px" class="text-center">STT</th>
                    <th style="width: 150px">Ảnh đại diện</th>
                    <th>Tiêu đề</th>
                    <th style="width: 150px">Giá bán</th>
                    <th style="width: 150px">Loại sản phẩm</th>
                    <th style="width: 50px">Sửa</th>
                    <th style="width: 50px">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $stt = 0;?>
                    @foreach($sanphams as $sp)
                        <?php $stt++;?>
                        <tr>
                            <td class="text-center">{{$stt  + ($sanphams->currentPage() - 1)*10}}</td>
                            <td>
                                <img src="{{URL('/')}}/{{$sp->img}}" style="width: 100px; height: 100px">
                            </td>
                            <td>{{$sp->title}}</td>
                            <td class="text-right">{{ number_format($sp->price, 0, ',', '.')}} vnđ</td>
                            <td>
                                @if($sp->status == 0)
                                Sản phẩm thường
                                @elseif($sp->status == 1)
                                Nổi bật
                                @else
                                Khuyến mại
                                @endif
                            </td>
                            <td >
                                <a href="{{URL('admin/quan-ly-san-pham/cap-nhat')}}/{{$sp->id}}" class="btn btn-primary">Sửa</a>
                            </td>
                            <td >
                                <a href="" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                </tr>
            </tbody>
        </table>
        <nav aria-label="...">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            @for($i = 1; $i <= $sanphams->lastPage(); $i++)
            <li class="page-item @if($i == $sanphams->currentPage()) active @endif">
                <a class="page-link" href="?page={{$i}}">{{$i}}</a><span class="sr-only">(current)</span>
            </li>
            @endfor
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
    </div>
@endsection
