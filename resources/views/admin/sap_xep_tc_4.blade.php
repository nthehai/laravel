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
              <i class="nc-icon nc-bullet-list-67"></i>
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
            <a class="navbar-brand" href="javascript:;" style="color:red">SẮP XẾP THEO TIÊU CHÍ 4</a>
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
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">', $message, '</span>';
                    Session::put('message', null);
                }
                ?>
                <style type="text/css">
                  *{
                    font-family: sans-serif;
                  }
                  table{
                      border:1px solid black;
                      width: 100%;

                  }
                  th{
                      border:1px solid black;
                      height: 50px
                  }
                  td{
                      border:1px solid black;
                      height: 50px;
                  }
                  tr:hover{
                      background-color:#ddd;
                      cursor:pointer;
                  }
                </style>
                <table>
                <thead>
                    <tr style="background-color:skyblue">
                        <th>Mã trường</th>
                        <th>Tên trường</th>
                        <th>Tổng điểm tiêu chí 4</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->ten_dv}}</td>
                        <td>{{$row->Standard_4}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <style type="text/css">
              button{
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
            <a href="{{URL::to('/tc_1')}}"> 
            <button>Sắp xếp theo tiêu chí 1</button> 
            </a>
            <a href="{{URL::to('/tc_2')}}"> 
            <button>Sắp xếp theo tiêu chí 2</button> 
            </a>  
            <a href="{{URL::to('/tc_3')}}"> 
            <button>Sắp xếp theo tiêu chí 3</button> 
            </a>
            <a href="{{URL::to('/tc_4')}}"> 
            <button>Sắp xếp theo tiêu chí 4</button> 
            </a>
            <a href="{{URL::to('/tc_5')}}"> 
            <button>Sắp xếp theo tiêu chí 5</button> 
            </a>
            <a href="{{URL::to('/tc_6')}}"> 
            <button>Sắp xếp theo tiêu chí 6</button> 
            </a>
            <a href="{{URL::to('/tc_7')}}"> 
            <button>Sắp xếp theo tiêu chí 7</button> 
            </a>
            <a href="{{URL::to('/tong_diem')}}"> 
            <button>Sắp xếp theo tổng điểm</button> 
            </a>
          </li>
        </div>
    </div>
</div>
</div>

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
</style>
</body>
</html>
