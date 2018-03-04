</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Admin</title>
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL('assets/admin/css/admin.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Admin - Led</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/')}}/admin/quan-ly-san-pham/">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{URL('/')}}/admin/quan-ly-san-pham/them-moi">Thêm sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/')}}/admin/quan-ly-danh-muc/">Danh mục sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/')}}/admin/don-hang/">Đơn hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/')}}/admin/lien-he/">Phản hồi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/')}}/admin/logoutAdmin">Đăng xuất</a>
                    </li>
                </ul>
            </nav>
            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
</body>
    @yield('js')
</html>