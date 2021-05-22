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
        <a href="" class="simple-text logo-normal">TRANG CHỦ</a>

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
            <a class="navbar-brand" href="javascript:;" style="color:red">QUẢN TRỊ DÀNH CHO ADMIN</a>
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
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Dung lượng</p>
                      <p class="card-title">150GB<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Làm mới
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Tổng tiền</p>
                      <p class="card-title">$ 1,345<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  Ngày hôm qua
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Lượt truy cập</p>
                      <p class="card-title">23<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  Khoảng 1 giờ trước
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Lượt theo dõi</p>
                      <p class="card-title">+45K<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Làm mới
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Biểu đồ so sánh</h5>
                <p class="card-category">Cập nhật 24 giờ mỗi ngày</p>
              </div>
              <div class="card-body" id="chart_div" style="width: 100%; height: 300px;">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawVisualization);
                function drawVisualization() {
                var data = google.visualization.arrayToDataTable([
                ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
                ['2004/05',  165,      938,         522,             998,           450,      614.6],
                ['2005/06',  135,      1120,        599,             1268,           288,      682],
                ['2006/07',  157,      1167,        587,             807,           397,      623],
                ['2007/08',  139,      1110,        615,             968,           215,      609.4],
                ['2008/09',  136,      691,         629,             1026,           366,      569.6]
                ]);

                var options = {
                hAxis: {title: 'Month'},
                seriesType: 'bars',
                series: {5: {type: 'line'}}
                };
                var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                chart.draw(data, options);
                }
                </script>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i>Được làm mới 3 giờ trước
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Bảng xếp hạng</h5>
                <p class="card-category">Last Campaign Performance</p>
              </div>
              <div class="card-body" id="piechart">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                // Draw the chart and set the chart values
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                  ['Task', 'Hours per Day'],
                  ['Work', 8],
                  ['Eat', 2],
                  ['TV', 4],
                  ['Gym', 2],
                  ['Sleep', 8]
                ]);
                // Optional; add a title and set the width and height of the chart
                var options = {'width':250, 'height':300};
                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
                }
                </script>
              </div>
              
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Đánh giá</h5>
                <p class="card-category">Biểu đồ cột</p>
              </div>
              <div class="card-body" id="chart_div1" style="width: 600px; height: 350px;">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Director (Year)',  'Rotten Tomatoes', 'IMDB'],
          ['Alfred Hitchcock (1935)', 8.4,         7.9],
          ['Ralph Thomas (1959)',     6.9,         6.5],
          ['Don Sharp (1978)',        6.5,         6.4],
          ['James Hawes (2008)',      4.4,         6.2]
        ]);

        var options = {
          title: 'The decline of \'The 39 Steps\'',
          vAxis: {title: 'Accumulated Rating'},
          isStacked: true
        };

        var chart = new google.visualization.SteppedAreaChart(document.getElementById('chart_div1'));

        chart.draw(data, options);
      }
    </script>
    

              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
<style type="text/css">
  *{
    font-family: sans-serif;
  }
</style>

<script src="{{URL::asset('admin/js/core/jquery.min.js')}}"></script>
<script src="{{URL::asset('admin/js/core/popper.min.js')}}"></script>
<script src="{{URL::asset('admin/js/core/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('admin/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{URL::asset('admin/js/plugins/chartjs.min.js')}}"></script>
<script src="{{URL::asset('admin/js/plugins/bootstrap-notify.js')}}"></script>
<script src="{{URL::asset('admin/js/paper-dashboard.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/js/paper-dashboard.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/js/paper-dashboard.js.map')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/demo.js')}}"></script>

</script>
<script>
  $(document).ready(function() {
    demo.initChartsPages();
  });
</script>
</body>
</html>

