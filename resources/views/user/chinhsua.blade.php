<li>
            <a href="{{URL::to('/search')}}">
              <i class="nc-icon nc-zoom-split"></i>
              <p>Tìm kiếm</p>
            </a>
          </li><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('user/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{URL::asset('user/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard User
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{URL::asset('user/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{URL::asset('user/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{URL::asset('user/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{URL::asset('admin/img/logo-small.png')}}">
          </div>
        </a>
        <a href="http://localhost:81/tudanhgia1/public/" class="simple-text logo-normal">
          TRANG CHỦ
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="username">
                <?php
                  $name = Session::get('ten_dv');
                  if($name){
                  echo $name;
                  }
                ?> 
                </span>   
            </a>
          </li>
          <li>
            <a href="{{URL::to('/home-user')}}">
              <i class="now-ui-icons design_app"></i>
              <p>Bảng điều khiển</p>
            </a>
          </li>
          <li>
            <a href="{{URL::to('/danh-gia')}}">
              <i class="now-ui-icons education_atom"></i>
              <p>Đánh giá</p>
            </a>
          </li>
          <li>
            <a href="{{URL::to('/chi-tiet')}}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Chi tiết</p>
            </a>
          </li>
          
          <li>
            <a href="{{URL::to('/thong_tin_truong')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Thông tin trường</p>
            </a>
          </li>
          <li>
            <a href="{{URL::to('/search')}}">
              <i class="now-ui-icons ui-1_zoom-bold"></i>
              <p>Tìm kiếm</p>
            </a>
          </li>
          <li><a href="{{URL::to('/dangxuat')}}"><i class="fa fa-key"></i>ĐĂNG XUẤT</a></li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="#pablo">Bảng điều khiển</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <form>
        <div class="input-group no-border">
          <input type="text" value="" class="form-control" placeholder="Search...">
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="now-ui-icons ui-1_zoom-bold"></i>
              </div>
            </div>
        </div>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#pablo">
          <i class="now-ui-icons media-2_sound-wave"></i>
          <p>
            <span class="d-lg-none d-md-block">Stats</span>
          </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="now-ui-icons location_world"></i>
          <p>
          <span class="d-lg-none d-md-block">Một số hoạt động</span>
          </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Hoạt động</a>
          <a class="dropdown-item" href="#">Hoạt động khác</a>
          <a class="dropdown-item" href="#">Tin tức</a>
          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#pablo">
            <i class="now-ui-icons users_single-02"></i>
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
<div class="panel-header panel-header-lg" style="width: 100%;height: 5px;">
</div>
<div class="content1" style="margin-left: 20px;margin-top: 20px;margin-right: 10%;">
  <div>
  <form method="post" action="{{URL::to('/capnhat/'.$news->id)}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        <label for="id">Mã trường</label></br>
        <input type="number" name="id" value="{{ $news->id }}" readonly>
    </p>
    <p>
        <label for="ten_dv">Tên trường</label><br>
        <input type="text" name="ten_dv" value="{{ $news->ten_dv }}">
    </p>
    <p>
        <label for="email">E-mail</label><br>
        <input type="email" name="email" value="{{ $news->email }}" required>
    </p>
    <p>
        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" value="{{ $news->password }}" required>
    </p>
    <p>
        <label for="phone_number">Số điện thoại</label><br>
        <input type="number" name="phone_number" value="{{ $news->phone_number }}" required>
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
  input[type=number]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #03a9f4;
    border-radius: 4px;
    font-family: sans-serif;
  }
  input[type=email]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #03a9f4;
    border-radius: 4px;
    font-family: sans-serif;
  }
  input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #03a9f4;
    border-radius: 4px;
    font-family: sans-serif;
  }
  input[type=date] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #03a9f4;
    border-radius: 4px;
    font-family: sans-serif;
  }
  input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #03a9f4;
    border-radius: 4px;
    font-family: sans-serif;
  }
</style>
<script src="{{URL::asset('user/js/core/jquery.min.js')}}"></script>
<script src="{{URL::asset('user/js/core/popper.min.js')}}"></script>
<script src="{{URL::asset('user/js/core/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('user/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="{{URL::asset('user/js/plugins/chartjs.min.js')}}"></script>
<script src="{{URL::asset('user/js/plugins/bootstrap-notify.js')}}"></script>
<script src="{{URL::asset('user/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script>
<script src="{{URL::asset('user/demo/demo.js')}}"></script>
<script>
$(document).ready(function() {
  demo.initDashboardPageCharts();
});
</script>
</body>
</html>