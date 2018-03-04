@extends('master-admin')
@section('content')
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">STT</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th class="text-right">Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 0; $total = 0;?>
            @foreach($sanphams as $sp)
            <tr>
                <?php $stt++; $total += $sp->price * $sp->quality;?>
                <td class="text-center">{{$stt}}</td>
                <td>{{$sp->title}}</td>
                <td>{{$sp->price}}</td>
                <td>{{$sp->quality}}</td>
                <td class="text-right">{{ number_format($sp->price * $sp->quality, 0, ',', '.')}} vnđ</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-center"><b>Tổng</b></td>
                <td class="text-right">{{ number_format($total, 0, ',', '.')}} vnđ</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection