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
    <form method="post" action="{{URL::to('/submit-form')}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label style="color: red;"><strong>Mã Trường <?php
                  $name = Session::get('ten_dv');
                  if($name){
                  echo $name;
                  }
                ?> :</strong></label>
      <input type="text" name="id" id="id" value="<?php
                  $name = Session::get('id');
                  if($name){
                  echo $name;
                  }
                ?> " required>
      
      <!--   Tiêu chuẩn 1   -->
      <h4>Tiêu chuẩn 1. Quản trị chiến lược (100 điểm)</h4>
      <label>1.1.Năng lực thực hiện các chỉ tiêu chiến lược của đơn vị</label></br>
      <i>Tính điểm theo mức độ các chỉ tiêu kế hoạch năm học được hoàn thành</i><br>
      <input type="number" id="1.1" name="tc_1_1" value="" min="0" max="100" placeholder="Thang điểm từ 0 đến 100%" required onkeyup="tieuchuan();"><br>
      <label>1.2.Kết quả thực hiện chỉ tiêu chiến lược</label><br>
      <i>Có triển khai rà soát và đánh giá mục tiêu các kế hoạch dài hạn, trung hạn và ngắn hạn</i><br>
      <input type="number" id="1.2" name="tc_1_2" value="" min="0" max="3" required placeholder="Ví dụ:01 lần/năm học" onkeyup="tieuchuan();"><br>
      <label>1.3.Uy tín của lãnh đạo đơn vị </label><br>
      <i>Mức độ hài lòng của nhân viên đối với công tác quản lý, lãnh đạo của lãnh đạo đơn vị</i><br>
      <input type="number" id="1.3" name="tc_1_3" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <strong><p style="color: #f96332;font-size: 15px;">TỔNG ĐIỂM TIÊU CHUẨN 1 LÀ : <input type="text" name="Standard_1" id="tong1" value="" readonly></p></strong>
      <!--   Tiêu chuẩn 2   -->
      <h4>Tiêu chuẩn 2. Đào tạo (295 điểm)</h4>
      <label>2.1.Kết quả đào tạo</label><br>
      <i>Tỷ lệ người học tốt nghiệp(Tổng số người học tốt nghiệp đúng thời hạn trong thời gian đào tạo chuẩn/Tổng số người học nhập học)</i><br>
      <input type="number" id="2.1" name="tc_2_1" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <label>2.2.Quy mô giảng viên </label><br>
      <i>Tỷ lệ giảng viên trên tổng quy mô đào tạo đại học và sau đại học.</i><br>
      <input type="number" id="2.2" name="tc_2_2" value="" min="0" max="10" required placeholder="Thang điểm từ 0 đến 10%" onkeyup="tieuchuan();"><br>
      <label>2.3.Trình độ giảng viên</label><br>
      <i>Tỷ lệ cán bộ khoa học có trình độ tiến sĩ trên tổng số cán bộ khoa học cơ hữu. </i><br>
      <input type="number" id="2.3" name="tc_2_3" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <label>2.4.Uy tín giảng viên </label><br>
      <i>Tỷ lệ cán bộ khoa học có chức danh GS, PGS trên tổng số cán bộ khoa học cơ hữu.</i><br>
      <input type="number" id="2.4" name="tc_2_4" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <label>2.5.Quy mô đào tạo thạc sĩ </label><br>
      <i>Tỷ lệ đào tạo thạc sĩ trên tổng quy mô đào tạo.</i><br>
      <input type="number" id="2.5" name="tc_2_5" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <label>2.6.Quy mô đào tạo tiến sĩ </label><br>
      <i>Tỷ lệ đào tạo tiến sĩ trên tổng quy mô đào tạo.</i><br>
      <input type="number" id="2.6" name="tc_2_6" value="" min="0" max="10" required placeholder="Thang điểm từ 0 đến 10%" onkeyup="tieuchuan();"><br>
      <label>2.7.Mức độ hài lòng của người học</label><br>
      <i>Kết quả khảo sát người học do trường thực hiện để đánh giá môn học hoặc/và khóa học (Sử dụng kết quả tổng hợp bằng điểm trung bình phản hồi của sinh viên về học phần (Phiếu II.1) trong Hướng dẫn 581/HD-ĐHQGHN)</i><br>
      <input type="number" id="2.7" name="tc_2_7" value="" min="0" max="5" required placeholder="Thang điểm từ 0 đến 5" onkeyup="tieuchuan();"><br>
      <label>2.8.Mức độ hài lòng của nhà tuyển dụng</label><br>
      <i>Kết quả khảo sát nhà tuyển dụng (Sử dụng kết quả tổng hợp bằng điểm trung bình phản hồi của nhà sử dụng lao động (Phiếu VI.1) trong Hướng dẫn 581/HD-ĐHQGHN)</i><br>
      <input type="number" id="2.8" name="tc_2_8" value="" min="0" max="5" required placeholder="Thang điểm từ 0 đến 5" onkeyup="tieuchuan();"><br>
      <label>2.9.Việc làm của người học</label><br>
      <i>Tỷ lệ người học tốt nghiệp đại học có việc làm sau 12 tháng (bao gồm cả đi học tiếp)(Sử dụng kết quả tổng hợp bằng kết quả khảo sát người học tốt nghiệp (Phiếu V.1) trong Hướng dẫn 581/HD-ĐHQGHN)</i><br>
      <input type="number" id="2.9" name="tc_2_9" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <label>2.10.Tỷ lệ các giải thưởng về học thuật của người học</label><br>
      <i>Tỷ lệ tổng số các giải thưởng Olympic, nghiên cứu khoa học, sáng tạo kỹ thuật, khởi nghiệp… cấp Bộ, quốc gia, quốc tế và tương đương gắn với lĩnh vực đào tạo của trường trong 3 năm gần nhất trên tổng quy mô đào tạo.</i><br>
      <input type="number" id="2.10" name="tc_2_10" value="" min="0" max="10" required placeholder="Thang điểm từ 0 đến 10%" onkeyup="tieuchuan();"><br>
      <label>2.11.Kiểm định và xếp hạng</label><br>
      <i>Trong năm nhận được kết quả kiểm định chất lượng CSGD/CTĐT hoặc xếp hạng quốc tế cho CSGD/cho lĩnh vực đào tạo do đơn vị phụ trách. Đánh giá theo 2 mức: kết quả kiểm định trong nước:15 điểm; kiểm định/xếp hạng quốc tế:25 điểm.</i><br>
      <input type="number" id="2.11" name="tc_2_11" value="" min="0" max="25" required placeholder="Chọn 2 mức 15 hoặc 25" onkeyup="tieuchuan();" pattern="[15|25]" title="Nhập 15 hoặc 25 thôi !"><br>
      <strong><p style="color: #f96332;font-size: 15px;">TỔNG ĐIỂM TIÊU CHUẨN 2 LÀ : <input type="tong2" name="Standard_2" id="tong2" value="" readonly></p></strong>
      <!--   Tiêu chuẩn 3   -->
      <h4>Tiêu chuẩn 3. Nghiên cứu (245 điểm)</h4>
      <label>3.1.Công bố khoa học</label><br>
      <i>Trung bình số bài báo trên tổng số cán bộ khoa học cơ hữu trong 5 năm gần nhất (khuyến khích có phiên bản trực tuyến)</i><br>
      <input type="number" id="3.1" name="tc_3_1" value="" min="0" max="5" required placeholder="Nhập số * đạt được ví dụ : 2.5" onkeyup="tieuchuan();"><br>
      <label>3.2.Công bố trong danh mục ISI/Scopus</label><br>
      <i>Số bài báo ISI và Scopus công bố trên tổng số cán bộ khoa học cơ hữu trong 5 năm gần nhất </i><br>
      <input type="number" id="3.2" name="tc_3_2" value="" min="0" max="5" required placeholder="Nhập số * đạt được ví dụ : 2.5" onkeyup="tieuchuan();"><br>
      <label>3.3.Sách chuyên khảo/giáo trình</label><br>
      <i>Trung bình số sách chuyên khảo/giáo trình trên chương trình đào tạo sau đại học tính trong 5 năm gần nhất (tính hệ số 2 cho sách chuyên khảo/giáo trình xuất bản quốc tế).</i><br>
      <input type="number" id="3.3" name="tc_3_3" value="" min="0" max="5" required placeholder="Nhập số * đạt được ví dụ : 2.5" onkeyup="tieuchuan();"><br>
      <label>3.4.Giải thưởng KH&CN</label><br>
      <i>Tỷ lệ giải thưởng về học thuật cấp Bộ, quốc gia, quốc tế của cán bộ khoa học cơ hữu trên tổng số cán bộ khoa học cơ hữu trong 5 năm gần nhất.</i><br>
      <input type="number" id="3.4" name="tc_3_4" value="" min="0" max="10" required placeholder="Thang điểm từ 0 đến 10%" onkeyup="tieuchuan();"><br>
      <label>3.5.Kinh phí cho hoạt động KH&CN</label>
      <i>Kinh phí nghiên cứu trung bình (từ các nguồn khác nhau, không tính đầu tư cho cơ sở vật chất) trên cán bộ khoa học cơ hữu trong 3 năm gần nhất. </i><br>
      <input type="number" id="3.5" name="tc_3_5" value="" min="0" max="500" required placeholder="Nhập số tiền kinh phí: ví dụ 200 (đơn vị: triệu VNĐ)" onkeyup="tieuchuan();"><br>
      <strong><p style="color: #f96332;font-size: 15px;">TỔNG ĐIỂM TIÊU CHUẨN 3 LÀ : <input type="text" name="Standard_3" id="tong3" value="" readonly></p></strong>
      <!--   Tiêu chuẩn 4   -->
      <h4>Tiêu chuẩn 4. Đổi mới sáng tạo (120 điểm)</h4>
      <label>4.1.Sở hữu trí tuệ </label><br>
      <i>Số giải pháp hữu ích/bằng độc quyền sở hữu trí tuệ được cấp trong 5 năm gần nhất.</i><br>
      <input type="number" id="4.1" name="tc_4_1" value="" min="0" max="10" required placeholder="Nhập số giải pháp đạt được" onkeyup="tieuchuan();"><br>
      <label>4.2.Hợp tác nghiên cứu không sử dụng ngân sách nhà nước</label><br>
      <i>Kinh phí ngoài ngân sách được tài trợ, đầu tư để phát triển sản phẩm, chuyển giao tri thức và hỗ trợ khởi nghiệp tính trung bình trên đầu cán bộ khoa học cơ hữu cho 3 năm gần nhất.</i><br>
      <input type="number" id="4.2" name="tc_4_2" value="" min="0" max="500" required placeholder="Nhập số kinh phí : ví dụ 30 ( triệu VNĐ)" onkeyup="tieuchuan();"><br>
      <label>4.3.Số doanh nghiệp khởi nghiệp</label><br>
      <i>Số doanh nghiệp khởi nghiệp của đơn vị, cán bộ khoa học cơ hữu, sinh viên và cựu sinh viên trong 5 năm gần nhất.</i><br>
      <input type="number" id="4.3" name="tc_4_3" value="" min="0" max="10" required placeholder="Nhập số doanh nghiệp khởi nghiệp" onkeyup="tieuchuan();"><br>
      <label>4.4.Môi trường đào tạo gắn với nghiên cứu và ứng dụng</label><br>
      <i>Tỷ lệ các chương trình đào tạo có (i) PTN, trung tâm nghiên cứu, cơ sở phục vụ thực hành, thực tập (ii) các hoạt động, chương trình/ dự án/ đề tài nghiên cứu gắn với lĩnh vực đào tạo.</i><br>
      <input type="number" id="4.4" name="tc_4_4" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <label>4.5.Không gian sáng tạo và hỗ trợ khởi nghiệp</label><br>
      <i>Tạo lập được không gian thúc đẩy sáng tạo và hỗ trợ khởi nghiệp.
      Không gian sáng tạo và hỗ trợ khởi nghiệp là nơi giúp cán bộ khoa học, sinh viên và cộng đồng khởi nghiệp chia sẻ ý tưởng, thiết kế, xây dựng và phát triển sản phẩm mới (diện tích tối thiểu 30m2).</i><br>
      <input type="number" id="4.5" name="tc_4_5" value="" min="0" max="10" required placeholder="Nhập số không gian sáng tạo" onkeyup="tieuchuan();"><br>
      <label>4.6.Đối tác doanh nghiệp</label><br>
      <i>Trung bình số doanh nghiệp, cơ quan và tổ chức có một trong các hoạt động hợp tác với nhà trường về: (i) hợp tác đào tạo, triển khai các dự án nghiên cứu, dự án khởi nghiệp của sinh viên; (ii) hỗ trợ kinh phí đặt hàng nghiên cứu; (iii) hợp tác nghiên cứu triển khai có kết quả công bố khoa học và đăng ký SHTT chung  trên số CTĐT ĐH.</i><br>
      <input type="number" id="4.6" name="tc_4_6" value="" min="0" max="10" required placeholder="Nhập trung bình số đối tác doanh nghiệp" onkeyup="tieuchuan();"><br>
      <strong><p style="color: #f96332;font-size: 15px;">TỔNG ĐIỂM TIÊU CHUẨN 4 LÀ : <input type="text" name="Standard_4" id="tong4" value="" readonly></p></strong>
      <!--   Tiêu chuẩn 5   -->
      <h4>Tiêu chuẩn 5. Công nghệ thông tin và tài nguyên số (90 điểm)</h4>
      <label>5.1.Năng lực ứng dụng công nghệ thông tin phục vụ quản lý</label><br>
      <i>Có hệ thống công nghệ thông tin đảm bảo để thực hiện được các thủ tục hành chính sau thông qua hệ thống trực tuyến: học phí; giám sát môi trường; theo dõi tình trạng cơ sở vật chất; an ninh – an toàn; điểm danh cán bộ và sinh viên; theo dõi tình trạng sử dụng phòng học; quản lý lịch giảng dạy – lịch học; dịch vụ hành chính "một cửa"; dịch vụ hỗ trợ người học trực tuyến; thông tin kết quả học tập đến người học (1 điểm/thủ tục).</i><br>
      <input type="number" id="5.1" name="tc_5_1" value="" min="0" max="10" required placeholder="Nhập số thủ tục ( tối đa là 10)" onkeyup="tieuchuan();"><br>
      <label>5.2.Khả năng phân tích và quản trị chất lượng</label><br>
      <i>Cơ sở dữ liệu và các phần mềm thống kê 10 lĩnh vực cơ bản: đào tạo, khoa học và công nghệ, nhân sự, kế hoạch - tài chính, CSVC, người học, cựu người học, nhà tuyển dụng, đối tác khoa học, đối tác chuyển giao (2 điểm/ CSDL)</i><br>
      <input type="number" id="5.2" name="tc_5_2" value="" min="0" max="10" required placeholder="Nhập số lĩnh vực cơ bản" onkeyup="tieuchuan();"><br>
      <label>5.3.Tài nguyên số </label><br>
      <i>Số tài liệu nội sinh được số hóa và cung cấp trực tuyến trên tổng số cán bộ khoa học cơ hữu/năm (Khảo sát trên Google Search theo cú pháp: site:tênmiền filetype:pdf)</i><br>
      <input type="number" id="5.3" name="tc_5_3" value="" min="0" max="10" required placeholder="Số tài liệu nội sinh được số hóa và cung cấp trực tuyến trên tổng số cán bộ khoa học cơ hữu/năm." onkeyup="tieuchuan();"><br>
      <label>5.4.Học liệu số</label><br>
      <i>Tỷ lệ các học phần có sử dụng học liệu bắt buộc là học liệu số trên tổng số học phần của các CTĐT.</i><br>
      <input type="number" id="5.4" name="tc_5_4" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <label>5.5.Mức độ tương tác học thuật trực tuyến</label><br>
      <i>Mỗi học phần có ít nhất 1 kênh tương tác, hỗ trợ sinh viên học tập (qua điện thoại, email, mạng xã hội, hoặc các ứng dụng tích hợp...).</i><br>
      <input type="number" id="5.5" name="tc_5_5" value="" min="0" max="10" required placeholder="Số kênh tương tác, hỗ trợ sinh viên học tập" onkeyup="tieuchuan();"><br>
      <label>5.6.Bài giảng điện tử </label><br>
      <i>Trung bình số học phần có giảng dạy trực tuyến trên tổng số các chương trình đào tạo. </i><br>
      <input type="number" id="5.6" name="tc_5_6" value="" min="0" max="10" required placeholder="Trung bình số học phần có giảng dạy trực tuyến trên tổng số các chương trình đào tạo" onkeyup="tieuchuan();"><br>
      <label>5.7.Ứng dụng hệ thống thực - ảo (Cyber-Physical System)</label><br>
      <i>Tỷ lệ số PTN thực hành ảo hoặc hệ thống tương tự có bản quyền đang được sử dụng trên tổng số chương trình đào tạo đại học. </i><br>
      <input type="number" id="5.7" name="tc_5_7" value="" min="0" max="10" required placeholder="Nhập tỷ lệ số ( ví dụ 0.5)" onkeyup="tieuchuan();"><br>
      <label>5.8.Hệ thống mạng không dây </label><br>
      <i>Mức độ phủ wifi tính trên diện tích khu giảng đường, thư viện và khu hành chính.</i><br>
      <input type="number" id="5.8" name="tc_5_8" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <label>5.9.Phần mềm kiểm tra sự trùng lặp thông tin </label><br>
      <i>Sử dụng phần mềm có bản quyền để kiểm tra sự trùng lặp thông tin và đạo văn.</i><br>
      <input type="number" id="5.9" name="tc_5_9" value="" min="0" max="10" required placeholder="Số phần mềm có bản quyền để kiểm tra sự trùng lặp thông tin và đạo văn" onkeyup="tieuchuan();"><br>
      <label>5.10.Mức độ lan tỏa học thuật </label>
      <i>Tỷ lệ học giả có hồ sơ khoa học thuộc Google Scholar trên tổng số cán bộ khoa học cơ hữu.</i><br>
      <input type="number" id="5.10" name="tc_5_10" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <strong><p style="color: #f96332;font-size: 15px;">TỔNG ĐIỂM TIÊU CHUẨN 5 LÀ : <input type="text" name="Standard_5" id="tong5" value="" readonly></p></strong>
      <!--   Tiêu chuẩn 6   -->
      <h4>Tiêu chuẩn 6. Mức độ quốc tế hóa (80 điểm)</h4>
      <label>6.1.Đào tạo bằng tiếng nước ngoài</label><br>
      <i>Tỷ lệ chương trình đào tạo bằng tiếng nước ngoài do trường cấp bằng trên tổng số chương trình đào tạo, đang hoạt động.</i><br>
      <input type="number" id="6.1" name="tc_6_1" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <label>6.2.Đào tạo liên kết quốc tế</label><br>
      <i>Tỷ lệ chương trình đào tạo liên kết quốc tế do đối tác hoặc/và trường và đối tác đồng cấp bằng đang hoạt động trên tổng số chương trình đào tạo.</i><br>
      <input type="number" id="6.2" name="tc_6_2" value="" min="0" max="10" required placeholder="Thang điểm từ 0 đến 10%" onkeyup="tieuchuan();"><br>
      <label>6.3.Người học quốc tế </label><br>
      <i>Tỷ lệ người học có quốc tịch nước ngoài học lấy bằng trên tổng quy mô đào tạo.</i><br>
      <input type="number" id="6.3" name="tc_6_3" value="" min="0" max="10" required placeholder="Thang điểm từ 0 đến 10%" onkeyup="tieuchuan();"><br>
      <label>6.4.Giảng viên quốc tế </label><br>
      <i>Tỷ lệ cán bộ khoa học có quốc tịch nước ngoài (đến giảng dạy tối thiểu 01 chuyên đề hoặc có thời gian giảng dạy hoặc nghiên cứu tại trường liên tục tối thiểu 3 tháng) trên quy mô cán bộ khoa học cơ hữu.</i><br>
      <input type="number" id="6.4" name="tc_6_4" value="" min="0" max="10" required placeholder="Thang điểm từ 0 đến 10%" onkeyup="tieuchuan();"><br>
      <label>6.5.Sinh viên quốc tế trao đổi </label><br>
      <i>Tỷ lệ sinh viên có quốc tịch nước ngoài đến học hoặc thực tập trong đó có tín chỉ được công nhận chuyển đổi (Mốc chuẩn: đối với các khối KHTN-CN là 1%; 3% với các khối còn lại)</i><br>
      <input type="number" id="6.5" name="tc_6_5" value="" min="0" max="10" required placeholder="Thang điểm từ 0 đến 10%" onkeyup="tieuchuan();"><br>
      <label>6.6.Giảng viên đi trao đổi</label><br>
      <i>Tỷ lệ cán bộ khoa học cơ hữu đi giảng dạy và nghiên cứu tại trường đại học ở nước ngoài tối thiểu 01 chuyên đề hoặc có thời gian đi trao đổi ít nhất 3 tháng. </i><br>
      <input type="number" id="6.6" name="tc_6_6" value="" min="0" max="10" required placeholder="Thang điểm từ 0 đến 10%" onkeyup="tieuchuan();"><br>
      <label>6.7.Sinh viên đi trao đổi</label><br>
      <i>Tỷ lệ sinh viên đi học hoặc thực tập tại trường đại học ở nước ngoài có tín chỉ được công nhận chuyển đổi.</i><br>
      <input type="number" id="6.7" name="tc_6_7" value="" min="0" max="10" required placeholder="Thang điểm từ 0 đến 10%" onkeyup="tieuchuan();"><br>
      <label>6.8.Hội nghị, hội thảo quốc tế </label><br>
      <i>Số lượng hội nghị, hội thảo quốc tế do khoa hoặc trường chủ trì tổ chức, tính trung bình theo chương trình đào tạo cho 5 năm gần nhất.</i><br>
      <input type="number" id="6.8" name="tc_6_8" value="" min="0" max="10" required placeholder="Số lượng hội nghị, hội thảo quốc tế do khoa hoặc trường chủ trì tổ chức" onkeyup="tieuchuan();"><br>
      <label>6.9.Hợp tác quốc tế về nghiên cứu</label><br>
      <i>Tỷ lệ bài báo ISI/ Scopus có hợp tác quốc tế.</i><br>
      <input type="number" id="6.9" name="tc_6_9" value="" min="0" max="100" required placeholder="Thang điểm từ 0 đến 100%" onkeyup="tieuchuan();"><br>
      <label>6.10.Kinh phí hợp tác nghiên cứu</label><br>
      <i>Tỷ lệ kinh phí từ các dự án hợp tác quốc tế trên cán bộ khoa học cơ hữu tính trong 3 năm gần nhất.</i><br>
      <input type="number" id="6.10" name="tc_6_10" value="" min="0" max="100" required placeholder="Nhập kinh phí từ các dự án hợp tác quốc tế " onkeyup="tieuchuan();"><br>
      <strong><p style="color: #f96332;font-size: 15px;">TỔNG ĐIỂM TIÊU CHUẨN 6 LÀ : <input type="text" name="Standard_6" id="tong6" readonly value=""></p></strong>
      <!--   Tiêu chuẩn 7   -->
      <h4>Tiêu chuẩn 7. Truyền thông và phục vụ cộng đồng (70 điểm)</h4>
      <label>7.1.Truyền thông hình ảnh của đơn vị tới cộng đồng</label><br>
      <i>Có 02 sản phẩm truyền thông (bài viết, talkshow, video truyền thông,…) trên các trang báo điện tử (không tính bài đăng trên trang web hoặc fanpage của đơn vị)</i><br>
      <input type="number" id="7.1" name="tc_7_1" value="" min="0" max="10" required placeholder="Số sản phẩm truyền thông (bài viết, talkshow, video truyền thông,…) trên các trang báo điện tử " onkeyup="tieuchuan();"><br>
      <label>7.2.Xây dựng hệ thống ấn phẩm nhận diện thương hiệu</label><br>
      <i>Có hệ thống ấn phẩm nhận diện thương hiệu bao gồm: logo, slogan, bộ ấn phẩm văn phòng, bộ ấn phẩm đào tạo, bộ ấn phẩm truyền thông)</i><br>
      <input type="number" id="7.2" name="tc_7_2" value="" min="0" max="5" required placeholder="Chọn các mức từ 1 đến 5" onkeyup="tieuchuan();"><br>
      <label>7.3.Chuyển giao tri thức và công nghệ </label><br>
      <i>Kinh phí tư vấn, chuyển giao tri thức và công nghệ góp phần phát triển kinh tế tính trung bình trên đầu cán bộ khoa học cơ hữu trong 3 năm gần nhất.</i><br>
      <input type="number" id="7.3" name="tc_7_3" value="" min="0" max="100" required placeholder="Kinh phí tư vấn ( ví dụ 50 triệu VNĐ)" onkeyup="tieuchuan();"><br>
      <label>7.4.Phát triển bền vững</label><br>
      <i>Các hoạt động truyền thông thúc đẩy hiệu quả hoặc/và triển khai tác động đến sự phát triển bền vững của cộng đồng, như chương trình bảo tồn năng lượng, chương trình bảo tồn nước, chương trình tái chế, chương trình bảo tồn văn hóa và các chương trình phát triển cộng đồng khác.</i><br>
      <input type="number" id="7.4" name="tc_7_4" value="" min="0" max="10" required placeholder="Số khoa đào tạo/năm." onkeyup="tieuchuan();"><br>
      <label>7.5.Các loại hình hoạt động phục vụ cộng đồng</label><br>
      <i>Các loại hình hoạt động phục vụ cộng đồng thuộc ba trong bốn lĩnh vực ( Đào tạo,Nghiên cứu,Tư vấn,Tình nguyện)</i><br>
      <input type="number" id="7.5" name="tc_7_5" value="" min="0" max="4" required placeholder="Chọn các mức từ 1 đến 4" onkeyup="tieuchuan();"><br>
      <strong><p style="color: #f96332;font-size: 15px;">TỔNG ĐIỂM TIÊU CHUẨN 7 LÀ : <input type="text" name="Standard_7" id="tong7" value="" readonly></p></strong>
      <strong><p style="color: #f96332;font-size: 15px;">TỔNG ĐIỂM TẤT CẢ 7 TIÊU CHUẨN LÀ : <input type="text" name="Tong_Diem" id="tongTatCa" readonly></p></strong>

      <strong><p style="color: #f96332;font-size: 15px;">SỐ SAO CÓ ĐƯỢC : <input type="text" name="gan_sao" id="ganSao" value="" readonly></p></strong>
      <button type="submit">HOÀN THÀNH</button>
      <hr>
    </form>
  </div>
</div>


<!--   Core JS Files   -->
<script type="text/javascript"> 
        function tieuchuan() {
          //tiêu chí 1.1
          var x1 = document.getElementById("1.1").value;
          if(x1 < 50){
            var tc1_1=0;
          }
          if(x1 > 80){
            var tc1_1=60;
          }
          if (x1 >= 50 && x1 <= 80){
            var tc1_1=((x1-50)/(80-50))*60;
          }
          //tiêu chí 1.2
          var x2 = document.getElementById("1.2").value;
          if(x2 < 1){
            var tc1_2=0;
          }
          if(x2 >=1){
            var tc1_2=20;
          }
          //tiêu chí 1.3
          var x3 = document.getElementById("1.3").value;
          if(x3 < 50){
            var tc1_3 =0;
          }
          if(x3 > 70){
            var tc1_3=20;
          }
          if (x3 >= 50 && x3 <= 70){
            var tc1_3=((x3-50)/(70-50))*20;
          }
          var tongTC1 = tc1_1 + tc1_2 + tc1_3;
          document.getElementById("tong1").value = tongTC1;
          // tiêu chuẩn 2.1
          var x4 = document.getElementById("2.1").value;
          if(x4 < 50){
            var tc2_1=0;
          }
          if(x4 > 70){
            var tc2_1=30;
          }
          if (x4 >= 50 && x4 <= 70){
            var tc2_1=((x4-50)/(70-50))*30;
          }
          // tiêu chuẩn 2.2
          var x5 = document.getElementById("2.2").value;
          if(x5 < 2){
            var tc2_2=0;
          }
          if(x5 > 8){
            var tc2_2=35;
          }
          if (x5 >= 2 && x5 <= 8){
            var tc2_2=((x5-2)/(8-2))*35;
          }
          // tiêu chuẩn 2.3
          var x6 = document.getElementById("2.3").value;
          if(x6 < 50){
            var tc2_3=0;
          }
          if(x6 > 65){
            var tc2_3=40;
          }
          if (x6 >= 50 && x6 <= 65){
            var tc2_3=((x6-50)/(65-50))*40;
          }
          // tiêu chuẩn 2.4
          var x7 = document.getElementById("2.4").value;
          if(x7 < 5){
            var tc2_4=0;
          }
          if(x7 > 25){
            var tc2_4=30;
          }
          if (x7 >= 5 && x7 <= 25){
            var tc2_4=((x7-5)/(25-5))*30;
          }
          // tiêu chuẩn 2.5
          var x8 = document.getElementById("2.5").value;
          if(x8 < 22){
            var tc2_5=0;
          }
          if(x8 >=22){
            var tc2_5=35;
          }
          //tiêu chuẩn 2.6
          var x9 = document.getElementById("2.6").value;
          if(x9 < 3){
            var tc2_6=0;
          }
          if(x9 >=3){
            var tc2_6=20;
          }
          // tiêu chuẩn 2.7
          var x10 = document.getElementById("2.7").value;
          if(x10 < 3){
            var tc2_7=0;
          }
          if(x10 > 5){
            var tc2_7=20;
          }
          if (x10 >= 3 && x10 <= 5){
            var tc2_7=((x10-3)/(5-3))*20;
          }
          // tiêu chuẩn 2.8
          var x11 = document.getElementById("2.8").value;
          if(x11 < 3){
            var tc2_8=0;
          }
          if(x11 > 5){
            var tc2_8=20;
          }
          if (x11 >= 3 && x11 <= 5){
            var tc2_8=((x11-3)/(5-3))*20;
          }
          //tiêu chuẩn 2.9
          var x12 = document.getElementById("2.9").value;
          if(x12 < 75){
            var tc2_9=0;
          }
          if(x12 > 100){
            var tc2_9=20;
          }
          if (x12 >= 75 && x12 <= 100){
            var tc2_9=((x12-75)/(100-75))*20;
          }
          //tiêu chuẩn 2.10
          var x13 = document.getElementById("2.10").value;
          if(x13 < 1){
            var tc2_10=0;
          }
          if(x13 >=1){
            var tc2_10=20;
          }
          // tiêu chuẩn 2.11
          var x14 = document.getElementById("2.11").value;
          if(x14 == 15){
            var tc2_11=15;
          }
          if(x14 ==25){
            var tc2_11=25;
          }

          var tongTC2 = tc2_1 + tc2_2 + tc2_3 + tc2_4 + tc2_5 + tc2_6 + tc2_7 + tc2_8 + tc2_9 + tc2_10 + tc2_11;
          document.getElementById("tong2").value = tongTC2;
          // tiêu chuẩn 3.1
          var x15 = document.getElementById("3.1").value;
          if(x15 < 2.5){
            var tc3_1=0;
          }
          if(x15 >= 2.5){
            var tc3_1=60;
          }
          // tiêu chuẩn 3.2
          var x16 = document.getElementById("3.2").value;
          if(x16 < 0.5){
            var tc3_2=0;
          }
          if(x16 >= 0.5){
            var tc3_2=100;
          }
          // tiêu chuẩn 3.3
          var x17 = document.getElementById("3.3").value;
          if(x17 < 2){
            var tc3_3=0;
          }
          if(x17 >= 2){
            var tc3_3=30;
          }
          //tiêu chuẩn 3.4
          var x18 = document.getElementById("3.4").value;
          if(x18 < 0.5){
            var tc3_4=0;
          }
          if(x18 >= 0.5){
            var tc3_4=15;
          }
          //tiêu chuẩn 3.5
          var x19 = document.getElementById("3.5").value;
          if(x19 < 100){
            var tc3_5=0;
          }
          if(x19 >= 200){
            var tc3_5=40;
          }
          if (x19 >= 100 && x19 <= 200){
            var tc3_5=((x19-100)/(200-100))*40;
          }
          var tongTC3 = tc3_1 + tc3_2 + tc3_3 + tc3_4 + tc3_5;
          document.getElementById("tong3").value = tongTC3;
          // tiêu chuẩn 4.1
          var x20 = document.getElementById("4.1").value;
          if(x20 < 10){
            var tc4_1=0;
          }
          if(x20 >= 10){
            var tc4_1=30;
          }
          // tiêu chuẩn 4.2
          var x21 = document.getElementById("4.2").value;
          if(x21 < 30){
            var tc4_12=0;
          }
          if(x21 >= 30){
            var tc4_2=20;
          }
          // tiêu chuẩn 4.3
          var x22 = document.getElementById("4.3").value;
          if(x22 < 5){
            var tc4_3=0;
          }
          if(x22 >= 5){
            var tc4_3=10;
          }
          //tiêu chuẩn 4.4
          var x23 = document.getElementById("4.4").value;
          if(x23 < 50){
            var tc4_4=0;
          }
          if(x23 >= 50){
            var tc4_4=20;
          }
          //tiêu chuẩn 4.5
          var x24 = document.getElementById("4.5").value;
          if(x24 < 1){
            var tc4_5=0;
          }
          if(x24 >= 1){
            var tc4_5=30;
          }
          //tiêu chuẩn 4.6
          var x25 = document.getElementById("4.6").value;
          if(x25 < 2){
            var tc4_6=0;
          }
          if(x25 >= 2){
            var tc4_6=10;
          }
          var tongTC4 = tc4_1 + tc4_2 + tc4_3 + tc4_4 + tc4_5 + tc4_6;
          document.getElementById("tong4").value = tongTC4;
          // tiêu chuẩn 5.1
          var x26 = document.getElementById("5.1").value;
          var tc5_1 =1*x26;
          // tiêu chuẩn 5.2
          var x27 = document.getElementById("5.2").value;
          var tc5_2= 2*x27;
          // tiêu chuẩn 5.3
          var x28 = document.getElementById("5.3").value;
          if(x28 < 2){
            var tc5_3=0;
          }
          if(x28 >= 2){
            var tc5_3=5;
          }
          //tiêu chuẩn 5.4
          var x29 = document.getElementById("5.4").value;
          if(x29 < 50){
            var tc5_4=0;
          }
          if(x29 > 90){
            var tc5_4=5;
          }
          if (x29 >= 50 && x29 <= 90){
            var tc5_4=((x29-50)/(90-50))*5;
          }
          //tiêu chuẩn 5.5
          var x30 = document.getElementById("5.5").value;
          if(x30< 1){
            var tc5_5=0;
          }
          if(x30 >= 1){
            var tc5_5=10;
          }
          //tiêu chuẩn 5.6
          var x31 = document.getElementById("5.6").value;
          if(x31 < 10){
            var tc5_6=0;
          }
          if(x31 >= 10){
            var tc5_6=10;
          }
          //tiêu chuẩn 5.7
          var x32 = document.getElementById("5.7").value;
          if(x32 < 0.5){
            var tc5_7=0;
          }
          if(x32 >= 0.5){
            var tc5_7=10;
          }
          //tiêu chuẩn 5.8
          var x33 = document.getElementById("5.8").value;
          if(x33 < 75){
            var tc5_8=0;
          }
          if(x33 >= 75){
            var tc5_8=10;
          }
          //tiêu chuẩn 5.9
          var x34 = document.getElementById("5.9").value;
          if(x34 < 1){
            var tc5_9=0;
          }
          if(x34 >= 1){
            var tc5_9=5;
          }
          //tiêu chuẩn 5.10
          var x35 = document.getElementById("5.10").value;
          if(x35 < 20){
            var tc5_10=0;
          }
          if(x35 >= 20){
            var tc5_10=5;
          }
          var tongTC5 = tc5_1 + tc5_2 + tc5_3 + tc5_4 + tc5_5 + tc5_6 + tc5_7 + tc5_8 + tc5_9 + tc5_10;
          document.getElementById("tong5").value = tongTC5;
          // tiêu chuẩn 6.1
          var x36 = document.getElementById("6.1").value;
          if(x36 < 30){
            var tc6_1=0;
          }
          if(x36 >= 30){
            var tc6_1=10;
          }
          // tiêu chuẩn 6.2
          var x37 = document.getElementById("6.2").value;
          if(x37 < 15){
            var tc6_2=0;
          }
          if(x37 >= 15){
            var tc6_2=5;
          }
          // tiêu chuẩn 6.3
          var x38 = document.getElementById("6.3").value;
          if(x38 < 1){
            var tc6_3=0;
          }
          if(x38 >= 1){
            var tc6_3=15;
          }
          //tiêu chuẩn 6.4
          var x39 = document.getElementById("6.4").value;
          if(x39 < 5){
            var tc6_4=0;
          }
          if(x39 >= 5){
            var tc6_4=15;
          }
          //tiêu chuẩn 6.5
          var x40 = document.getElementById("6.5").value;
          if(x40 < 1){
            var tc6_5=0;
          }
          if(x40 >= 1){
            var tc6_5=5;
          }
          //tiêu chuẩn 6.6
          var x41 = document.getElementById("6.6").value;
          if(x41 < 5){
            var tc6_6=0;
          }
          if(x41 >= 5){
            var tc6_6=5;
          }
          //tiêu chuẩn 6.7
          var x42 = document.getElementById("6.7").value;
          if(x42 < 3){
            var tc6_7=0;
          }
          if(x42 >= 3){
            var tc6_7=5;
          }
          //tiêu chuẩn 6.8
          var x43 = document.getElementById("6.8").value;
          if(x43 < 1){
            var tc6_8=0;
          }
          if(x43 >= 1){
            var tc6_8=5;
          }
          //tiêu chuẩn 6.9
          var x44 = document.getElementById("6.9").value;
          if(x44 < 50){
            var tc6_9=0;
          }
          if(x44 >= 50){
            var tc6_9=5;
          }
          //tiêu chuẩn 6.10
          var x45 = document.getElementById("6.10").value;
          if(x45 < 30){
            var tc6_10=0;
          }
          if(x45 >= 30){
            var tc6_10=10;
          }
          var tongTC6 = tc6_1 + tc6_2 + tc6_3 + tc6_4 + tc6_5 + tc6_6 + tc6_7 + tc6_8 + tc6_9 + tc6_10;
          document.getElementById("tong6").value = tongTC6;
          // tiêu chuẩn 7.1
          var x46 = document.getElementById("7.1").value;
          if(x46 < 2){
            var tc7_1=0;
          }
          if(x46 >= 2){
            var tc7_1=10;
          }
          // tiêu chuẩn 7.2
          var x47 = document.getElementById("7.2").value;
          if(x47 < 1){
            var tc7_2=0;
          }
          if(x47 >= 1){
            var tc7_2=5;
          }
          // tiêu chuẩn 7.3
          var x48 = document.getElementById("7.3").value;
          if(x48 < 50){
            var tc7_3=0;
          }
          if(x48 >= 50){
            var tc7_3=20;
          }
          //tiêu chuẩn 7.4
          var x49 = document.getElementById("7.4").value;
          if(x49 < 1){
            var tc7_4=0;
          }
          if(x49 >= 1){
            var tc7_4=15;
          }
          //tiêu chuẩn 7.5
          var x50 = document.getElementById("7.5").value;
          if(x50 < 3){
            var tc7_5=0;
          }
          if(x50 >= 3){
            var tc7_5=20;
          }
          var tongTC7 = tc7_1 + tc7_2 + tc7_3 + tc7_4 + tc7_5;
          document.getElementById("tong7").value = tongTC7;
          //tong tat ca
          var tongTC = tongTC1 + tongTC2 + tongTC3 + tongTC4 + tongTC5 + tongTC6 + tongTC7;
          document.getElementById("tongTatCa").value = tongTC; 
          if (tongTC < 150) {
            document.getElementById("ganSao").value='★';
          } 
          if (tongTC <300 && tongTC >= 150) {
            document.getElementById("ganSao").value='★★';
          } 
          if (tongTC <600 && tongTC >= 300) {
            document.getElementById("ganSao").value='★★★';
          } 
          if (tongTC <800 && tongTC >= 600) {
            document.getElementById("ganSao").value='★★★★';
          } 
          if (tongTC >= 800) {
            document.getElementById("ganSao").value='★★★★★';
          } 
        }      
      </script>
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