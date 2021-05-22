<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Website Group 2</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  .box{
    width:600px;
    margin:0 auto;
  }
  </style>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/animate.css')}}" rel="stylesheet" />
<link href="{{URL::asset('css/flexslider.css')}}" rel="stylesheet" />
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" />
<link href="{{URL::asset('css/magnific-popup.css')}}" rel="stylesheet" />
<link href="{{URL::asset('css/app.css')}}" rel="stylesheet" />
<link href="{{URL::asset('css/custom-fonts.css')}}" rel="stylesheet" />
<link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet" />
<link href="{{URL::asset('css/gallery-1.css')}}" rel="stylesheet" />
<link href="{{URL::asset('css/ie.css')}}" rel="stylesheet" />
</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @if (Route::has('login'))
            @if (Auth::check())
                <a href="{{ url('/home') }}" style="color: white
                ">BẢNG ĐIỀU KHIỂN</a>
            @else
                <a href="{{ url('/dangnhap') }}" style="color: white">ĐĂNG NHẬP</a>
            @endif
        @endif
      <p class="pull-right"><i class="fa fa-phone"></i>Số điện thoại: 0336576656</p>
      </div>
    </div>
  </div>
</div>
<h2 style="color: #0c4270"><center>Tự đánh giá đại học nghiên cứu đổi mới sáng tạo</center></h2>
<!-- Banner -->
<section id="banner">
  <div id="main-slider" class="flexslider">
    <ul class="slides">
      <li>
        <img src="{{URL::asset('images/banner.png')}}" alt="" height="550px" />
      </li>
    </ul>
  </div>
</section> 
<!-- Bảng xếp hạng -->
<div class="content" style="margin-left: 20px; margin-right: 20px;margin-top: 30px;">
  <h3><center>BẢNG XẾP HẠNG</center></h3>
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
<table>
<thead>
  <tr style="background-color:skyblue">
    <th style="color: black">Mã trường</th>
    <th style="color: black">Tên trường</th>
    <th style="color: black">Tổng sao</th>
  </tr>
</thead>
<tbody>
  @foreach($news as $row)
  <tr>
    <td>{{$row->id}}</td>
    <td>{{$row->ten_dv}}</td>
    <td>{{$row->gan_sao}}</td> 
  </tr>   
  @endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
<div style="text-align: center;margin-bottom: 40px;">
  <a href="{{URL::to('/search')}}"><button>TÌM KIẾM TRƯỜNG</button></a>
</div>
<!-- Thông tin --> 
<section class="section-padding gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>GIỚI THIỆU</h2>
                        <p>UPM là hệ thống xếp hạng do Bộ Giáo dục và Đào tạo Việt Nam tài trợ nhằm đánh giá khả năng đáp<br> ứng của các trường đại học trong thời đại Cách mạng Công nghiệp lần thứ 4 (4IR).</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-text">
                        <p>UPM là một công cụ đánh giá phù hợp cho các trường đại học trong khu vực nhằm đạt điểm chuẩn với 100 trường đại học hàng đầu châu Á. Nó đánh giá hoạt động của trường đại học thông qua 54 chỉ số trên 8 hạng mục, theo hai định hướng đặc biệt: nghiên cứu và ứng dụng. Kết quả đánh giá sẽ được trình bày dưới dạng điểm chung cho toàn cơ sở và điểm cho từng loại, tương ứng với một số Sao từ 1 - 5.</p>

                        <ul class="withArrow">
                            <li><span class="fa fa-angle-right"></span> Các trường đại học 5 sao có uy tín quốc gia cao và được quốc tế công nhận</li>
                            <li><span class="fa fa-angle-right"></span> Các trường đại học 4 sao nổi tiếng không chỉ trong nước mà còn trong khu vực</li>
                            <li><span class="fa fa-angle-right"></span> Các trường đại học UPM 3 sao có vai trò của mình trong hệ thống giáo dục đại học quốc gia (HE) và có thể tạo điều kiện thuận lợi cho việc di chuyển của sinh viên ở các nước ASEAN.</li>
                            
                        </ul>
                        
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-image">
                        <img src="{{URL::asset('images/what_1.png')}}" alt="About Images" height="300px">
                    </div>
                </div>
            </div>
        </div>
    </section>    
    
    
                    
                    

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="widget">
          <h5 class="widgetheading">Liên hệ</h5>
            <address>
              <strong>Đại học KHTN</strong><br>
                    Đại học Quốc Gia HN<br>
                     334 Nguyễn Trãi</address>
                    <p>
                        <i class="icon-phone"></i>Phone: 0336576656<br>
                        <i class="icon-envelope-alt"></i>Email: nguyenthehai_t62@hus.edu.vn
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Nhóm thực tập web - KSE</h5>
                    <ul class="link-list">
                        <li><a href="#">Gồm 3 thành viên</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Thành viên</h5>
                    <ul class="link-list">
                        <li><a href="#">Nguyễn Thế Hải</a></li>
                        <li><a href="#">Lã Ngọc Tuấn</a></li>
                        <li><a href="#">Đào Xuân Vinh </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; Sản phẩm thuộc bản quyền Nhóm thực tập - KSE<br/></span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="https://www.facebook.com/mero.hai.7/" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="https://mail.google.com/mail/u/0/#inbox" data-placement="top" title="Google mail"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{URL::asset('js/animate.js')}}"></script>
<script src="{{URL::asset('js/app.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/custom.js')}}"></script>
<script src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>  
<script src="{{URL::asset('js/jquery.fancybox.pack.js')}}"></script>
<script src="{{URL::asset('js/jquery.fancybox-media.js')}}"></script>
<!-- Vendor Scripts -->
<script src="{{URL::asset('js/jquery.flexslider.js')}}"></script>
<script src="{{URL::asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.js')}}"></script>
<script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('js/modernizr.custom.js')}}"></script>
</body>
</html>