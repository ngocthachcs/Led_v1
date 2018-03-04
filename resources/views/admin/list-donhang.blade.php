@extends('master-admin')
@section('content')
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">STT</th>
                <th>Ngày mua</th>
                <th>Mã đơn hàng</th>
                <th>Người mua</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Tổng tiền</th>
                <th>Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 0;?>
            @foreach($donhangs as $dh)
            <tr>
                <?php $stt++;?>
                <td class="text-center">{{$stt + ($donhangs->currentPage() - 1)*10}}</td>
                <td>{{date('d/m/Y', strtotime($dh->created_at))}}</td>
                <td>{{$dh->code}}</td>
                <td>{{$dh->name_user}}</td>
                <td>{{$dh->address}}</td>
                <td>{{$dh->phone}}</td>
                <td>{{$dh->email}}</td>
                <td>{{ number_format($dh->total, 0, ',', '.')}} vnđ</td>
                <td>
                    <button class="btn btn-danger">
                        <a href="{{URL('/')}}/admin/don-hang/{{$dh->id}}">Xem</a>
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
            @for($i = 1; $i <= $donhangs->lastPage(); $i++)
            <li class="page-item @if($i == $donhangs->currentPage()) active @endif">
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
{{-- <div class="modal fade" id="themdanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div> --}}
@endsection