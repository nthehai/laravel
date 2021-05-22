<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('admin/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{URL::asset('admin/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{URL::asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{URL::asset('admin/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <link href="{{URL::asset('admin/demo/demo.css')}}" rel="stylesheet" />
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{URL::asset('admin/img/logo-small.png')}}">
          </div>
        </a>
        <a href="http://localhost:81/tudanhgia1/public/" class="simple-text logo-normal">TRANG CHỦ</a>

      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <ul class="nav navbar-nav navbar-right">
              @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
              @else
                <li class="dropdown">

                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="nc-icon nc-single-02"></i>
                  {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu" role="menu">
                      <li>
                        <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                      </li>
                  </ul>
                </li>
              @endif
            </ul>
          </li>
          <li>
            <a href="{{URL::to('/home')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Bảng điều khiển</p>
            </a>
          </li>
          <li>
            <a href="{{URL::to('/admin/news/create')}}">
              <i class="nc-icon nc-diamond"></i>
              <p>Tạo tài khoản</p>
            </a>
          </li>
          <li>
            <a href="{{URL::to('/danh-sach')}}">
              <i class="nc-icon nc-pin-3"></i>
              <p>Danh sách đơn vị</p>
            </a>
          </li>
          <li>
            <a href="{{URL::to('/list-users')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Danh sách tài khoản</p>
            </a>
          </li>
          <li>
            <a href="{{URL::to('/list-form')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Danh sách đánh giá</p>
            </a>
          </li>
          <li>
            <a href="{{URL::to('/thong_ke')}}">
              <i class="nc-icon nc-chart-bar-32"></i>
              <p>Thống kê và xếp hạng</p>
            </a>
          </li>
          <li>
            <a href="{{URL::to('/search')}}">
              <i class="nc-icon nc-zoom-split"></i>
              <p>Tìm kiếm</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;" style="color:red">SỬA THÔNG TIN TRƯỜNG</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Tìm kiếm...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Một số hoạt động</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Hoạt động</a>
                  <a class="dropdown-item" href="#">Khác</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Tài khoản</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!-- End Navbar -->
<div class="content">
<form method="post" action="{{URL::to('/admin/news/update/'.$news->id)}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        <label for="id">Mã trường</label></br>
        <input type="text" name="id" value="{{ $news->id }}" readonly>
    </p>
    <p>
        <label for="ten_dv">Tên trường</label><br>
        <input type="text" name="ten_dv" value="{{ $news->ten_dv }}" required>
    </p>
    <p>
        <label for="email">E-mail</label><br>
        <input type="text" name="email" value="{{ $news->email }}" required>
    </p>
    <p>
        <label for="password">Mật khẩu</label><br>
        <input type="text" name="password" value="{{ $news->password }}" required>
    </p>
    <p>
        <label for="phone_number">Số điện thoại</label><br>
        <input type="text" name="phone_number" value="{{ $news->phone_number }}" required>
    </p>
    <p>
        <label for="dia_chi">Địa chỉ</label><br>
        <input type="text" name="dia_chi" value="{{ $news->dia_chi }}" required>
    </p>

    <p>
        <label for="thong_tin">Thông tin</label><br>
        <input type="text" name="thong_tin" value="{{ $news->thong_tin }}" required>
    </p>
    
    <p>
        <label for="created_at">Thời gian đánh giá</label><br>
        <input type="date" name="created_at" value="{{ $news->created_at }}" required>
    </p>
    <p>
        <button type="submit" id="capnhat">Cập nhật</button>
    </p>
</form>
</div>     
</div>
<style type="text/css">
    *{
        font-family: sans-serif;
    }
    #capnhat{
        background-color: skyblue;
        border: none;
        color: black;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        font-family: sans-serif;
  }
</style>
<script src="{{URL::asset('admin/js/core/jquery.min.js')}}"></script>
<script src="{{URL::asset('admin/js/core/popper.min.js')}}"></script>
<script src="{{URL::asset('admin/js/core/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('admin/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="{{URL::asset('admin/js/plugins/chartjs.min.js')}}"></script>
<script src="{{URL::asset('admin/js/plugins/bootstrap-notify.js')}}"></script>
<script src="{{URL::asset('backend/js/bootstrap.js')}}"></script>
<script src="{{URL::asset('admin/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/demo/demo.j')}}"></script>
<script>
  $(document).ready(function() {
    demo.initChartsPages();
  });
</script>
<style type="text/css">
    input[type=file] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid #58257b;
      border-radius: 4px;
    }
    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid #58257b;
      border-radius: 4px;
    }
    input[type=date] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid #58257b;
      border-radius: 4px;
    }
</style>
</body>
</html>
