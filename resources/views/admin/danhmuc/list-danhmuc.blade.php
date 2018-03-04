@extends('master-admin')
@section('content')
<a href="{{URL('/admin/quan-ly-danh-muc/them-moi')}}" class="btn btn-primary">Thêm</a>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">STT</th>
                <th>Tên danh mục</th>
                <th >#</th>
                <th >#</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 0;?>
            @foreach($danhmucs as $dm)
            <tr>
                <?php $stt++;?>
                <td class="text-center">{{$stt + ($danhmucs->currentPage() - 1)*10}}</td>
                <td>{{$dm->name}}</td>
                <td>
                    <button class="btn btn-success">
                        <a href="{{URL('/admin/quan-ly-danh-muc/cap-nhat')}}/{{$dm->slug}}">Sửa</a>
                    </button>
                </td>
                <td>
                    <button class="btn btn-danger">
                        <a href="{{URL('/admin/quan-ly-danh-muc/xoa')}}/{{$dm->id}}">Xóa</a>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="...">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            @for($i = 1; $i <= $danhmucs->lastPage(); $i++)
            <li class="page-item @if($i == $danhmucs->currentPage()) active @endif">
                <a class="page-link" href="?page={{$i}}">{{$i}}</a><span class="sr-only">(current)</span>
            </li>
            @endfor
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
</div>
<!-- modal -->
<div class="modal fade" id="themdanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="container" action="" method="POST">
                    <div class="form-group row">
                        <label>Tên danh mục</label>
                        <input class="form-control" placeholder="Tên danh mục">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Thêm</button>
            </div>
        </div>
    </div>
</div>
@endsection