<!DOCTYPE html>
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
    <p>Nếu không thấy thông tin tức là bạn chưa hoàn thành quá trình tự đánh giá, click <a href="{{URL::to('/danh-gia')}}"> vào đây
            </a> để hoàn tất !</p>
    @foreach($news as $row)
      <p style="color: red;"><strong>Mã trường : {{$row->id}}</strong></p>
      <p style="color: red"><strong>Thời gian đánh giá : {{$row->created_at}}</strong></p>
      <h4>Tiêu chuẩn 1. Quản trị chiến lược (100 điểm)</h4>
      <p>1.1.Năng lực thực hiện các chỉ tiêu chiến lược của đơn vị : {{$row->tc_1_1}}%</p>
      <p>1.2.Kết quả thực hiện chỉ tiêu chiến lược : {{$row->tc_1_2}} lần/năm học</p>
      <p>1.3.Uy tín của lãnh đạo đơn vị : {{$row->tc_1_3}}%</p>
      <p><strong>Tổng điểm tiêu chuẩn 1 : {{$row->Standard_1}} / 100</strong></p>
      <h4>Tiêu chuẩn 2. Đào tạo (295 điểm)</h4>
      <p>2.1.Kết quả đào tạo : {{$row->tc_2_1}}%</p>
      <p>2.2.Quy mô giảng viên : {{$row->tc_2_2}}%</p>
      <p>2.3.Trình độ giảng viên : {{$row->tc_2_3}}%</p>
      <p>2.4.Uy tín giảng viên : {{$row->tc_2_4}}%</p>
      <p>2.5.Quy mô đào tạo thạc sĩ : {{$row->tc_2_5}}%</p>
      <p>2.6.Quy mô đào tạo tiến sĩ : {{$row->tc_2_6}}%</p>
      <p>2.7.Mức độ hài lòng của người học : {{$row->tc_2_7}}★</p>
      <p>2.8.Mức độ hài lòng của nhà tuyển dụng : {{$row->tc_2_8}}★</p>
      <p>2.9.Việc làm của người học : {{$row->tc_2_9}}%</p>
      <p>2.10.Tỷ lệ các giải thưởng về học thuật của người học : {{$row->tc_2_10}}%</p>
      <p>2.11.Kiểm định và xếp hạng : {{$row->tc_2_11}} điểm</p>
      <p><strong>Tổng điểm tiêu chuẩn 2 : {{$row->Standard_2}} / 295</strong></p>
      <h4>Tiêu chuẩn 3. Nghiên cứu (245 điểm)</h4>
      <p>3.1.Công bố khoa học : {{$row->tc_3_1}}★</p>
      <p>3.2.Công bố trong danh mục ISI/Scopus : {{$row->tc_3_2}}★</p>
      <p>3.3.Sách chuyên khảo/giáo trình : {{$row->tc_3_3}}★</p>
      <p>3.4.Giải thưởng KH&CN : {{$row->tc_3_4}}%</p>
      <p>3.5.Kinh phí cho hoạt động KH&CN : {{$row->tc_3_5}} triệu VNĐ</p>
      <p><strong>Tổng điểm tiêu chuẩn 3 : {{$row->Standard_3}} / 245</strong></p>
      <h4>Tiêu chuẩn 4. Đổi mới sáng tạo (120 điểm)</h4>
      <p>4.1.Sở hữu trí tuệ : {{$row->tc_4_1}} giải pháp</p>
      <p>4.2.Hợp tác nghiên cứu không sử dụng ngân sách nhà nước : {{$row->tc_4_2}} triệu VNĐ</p>
      <p>4.3.Số doanh nghiệp khởi nghiệp : {{$row->tc_4_3}} doanh nghiệp</p>
      <p>4.4.Môi trường đào tạo gắn với nghiên cứu và ứng dụng : {{$row->tc_4_4}}%</p>
      <p>4.5.Không gian sáng tạo và hỗ trợ khởi nghiệp : {{$row->tc_4_5}} không gian</p>
      <p>4.6.Đối tác doanh nghiệp : {{$row->tc_4_6}} đối tác</p>
      <p><strong>Tổng điểm tiêu chuẩn 4 : {{$row->Standard_4}} / 120</strong></p>
      <h4>Tiêu chuẩn 5. Công nghệ thông tin và tài nguyên số (90 điểm)</h4>
      <p>5.1.Năng lực ứng dụng công nghệ thông tin phục vụ quản lý : {{$row->tc_5_1}} thủ tục</p>
      <p>5.2.Khả năng phân tích và quản trị chất lượng : {{$row->tc_5_2}} lĩnh vực</p>
      <p>5.3.Tài nguyên số : {{$row->tc_5_3}} tài liệu</p>
      <p>5.4.Học liệu số : {{$row->tc_5_4}}%</p>
      <p>5.5.Mức độ tương tác học thuật trực tuyến : {{$row->tc_5_5}} kênh</p>
      <p>5.6.Bài giảng điện tử : {{$row->tc_5_6}} bài</p>
      <p>5.7.Ứng dụng hệ thống thực - ảo (Cyber-Physical System) : {{$row->tc_5_7}} tỷ lệ</p>
      <p>5.8.Hệ thống mạng không dây : {{$row->tc_5_8}} đối tác</p>
      <p>5.9.Phần mềm kiểm tra sự trùng lặp thông tin : {{$row->tc_5_9}}%</p>
      <p>5.10.Mức độ lan tỏa học thuật : {{$row->tc_5_10}} phần mềm</p>
      <p><strong>Tổng điểm tiêu chuẩn 5 : {{$row->Standard_5}} / 90</strong></p>
      <h4>Tiêu chuẩn 6. Mức độ quốc tế hóa (80 điểm)</h4>
      <p>6.1.Đào tạo bằng tiếng nước ngoài : {{$row->tc_6_1}}%</p>
      <p>6.2.Đào tạo liên kết quốc tế : {{$row->tc_6_2}}%</p>
      <p>6.3.Người học quốc tế : {{$row->tc_6_3}}%</p>
      <p>6.4.Giảng viên quốc tế : {{$row->tc_6_4}}%</p>
      <p>6.5.Sinh viên quốc tế trao đổi : {{$row->tc_6_5}}%</p>
      <p>6.6.Giảng viên đi trao đổi : {{$row->tc_6_6}}%</p>
      <p>6.7.Sinh viên đi trao đổi : {{$row->tc_6_7}}%</p>
      <p>6.8.Hội nghị, hội thảo quốc tế : {{$row->tc_6_8}}%</p>
      <p>6.9.Hợp tác quốc tế về nghiên cứu : {{$row->tc_6_9}}%</p>
      <p>6.10.Kinh phí hợp tác nghiên cứu : {{$row->tc_6_10}} triệu VNĐ</p>
      <p><strong>Tổng điểm tiêu chuẩn 6 : {{$row->Standard_6}} / 80</strong></p>
      <h4>Tiêu chuẩn 7. Truyền thông và phục vụ cộng đồng (70 điểm)</h4>
      <p>7.1.Truyền thông hình ảnh của đơn vị tới cộng đồng : {{$row->tc_7_1}} sản phẩm</p>
      <p>7.2.Xây dựng hệ thống ấn phẩm nhận diện thương hiệu : {{$row->tc_7_2}}★</p>
      <p>7.3.Chuyển giao tri thức và công nghệ : {{$row->tc_7_3}} triệu VNĐ</p>
      <p>7.4.Phát triển bền vững : {{$row->tc_7_4}} khoa đào tạo/năm</p>
      <p>7.5.Các loại hình hoạt động phục vụ cộng đồng : {{$row->tc_7_5}}★</p>
      <p><strong>Tổng điểm tiêu chuẩn 7 : {{$row->Standard_7}} / 70</strong></p>
      <p><strong>TỔNG ĐIỂM : {{$row->Tong_Diem}} điểm</strong></p>
      <p><strong>SỐ SAO CÓ ĐƯỢC : {{$row->gan_sao}}</strong></p>
      <button><a href="{{URL::to('/edit_form/'.$row->id)}}" style="color: black">Chỉnh sửa</a></button>
      @endforeach
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
<style type="text/css">
*{
  font-family: sans-serif;
}
#tong7,#tong6,#tong5,#tong4,#tong3,#tong2,#tong1,#tongTatCa,#ganSao,#id{
  border:1px solid #ebecf1;
  font-family: sans-serif;
  background-color: #ebecf1;
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
input[type=text]{
  width: 30%;
  padding: 5px 5px;
  margin: 1px 0;
  box-sizing: border-box;
  border: 1px solid #03a9f4;
  border-radius: 4px;
  font-family: sans-serif;
}
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
</body>
</html>