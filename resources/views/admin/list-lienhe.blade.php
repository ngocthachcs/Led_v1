@extends('master-admin')
@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover">
            <thead>
                <tr>
                    <th style="width: 50px" class="text-center">STT</th>
                    <th style="width: 150px">Ngày nhận</th>
                    <th style="width: 200px">Tên khách hàng</th>
                    <th style="width: 150px">Email</th>
                    <th >Tiêu đề</th>
                    <th >Nội dung</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 0;?>
                @foreach($lienhes as $lh)
                    <?php $stt++;?>
                    <tr>
                        <td class="text-center">{{$stt}}</td>
                        <td>{{date('d/m/Y', strtotime($lh->created_at))}}</td>
                        <td>{{$lh->name}}</td>
                        <td>{{$lh->email}}</td>
                        <td>{{$lh->title}}</td>
                        <td>{{$lh->content}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <nav aria-label="...">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            @for($i = 1; $i <= $lienhes->lastPage(); $i++)
            <li class="page-item @if($i == $lienhes->currentPage()) active @endif">
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
