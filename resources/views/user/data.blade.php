<!DOCTYPE html>
<html>
<head>
  <title>TÌM KIẾM</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  .box{
    width:600px;
    margin:0 auto;
  }
</style>
</head>
<body>
  <br />
  <div class="container box">
   <h3 align="center">TÌM KIẾM THEO TÊN TRƯỜNG</h3><br />   
   <div class="form-group">
    <input type="text" name="country_name" id="country_name" class="form-control input-lg" placeholder="Nhập tên trường..." />
    <div id="countryList"><br>
    </div>
    @foreach($news as $row)
      <p>Mã trường : {{$row->id}}</p>
      <p>Tên trường : {{$row->ten_dv}}</p>
      <p>Email : {{$row->email}}</p>
      <p>Mật khẩu : {{$row->password}}</p>
      <p>Số điện thoại : {{$row->phone_number}}</p>
      <p>Địa chỉ : {{$row->dia_chi}}</p>
      <p>Thông tin : {{$row->thong_tin}}</p>
      
      <p>Thời gian đánh giá : {{$row->created_at}}</p>
      <td>
        <button><a href="{{URL::to('/search')}}" style="color: black">Tiếp tục tìm kiếm</a></button>
      @endforeach
  </div>
  {{ csrf_field() }}
</div>
</body>
</html>

<script>
  $(document).ready(function(){

   $('#country_name').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
    var query = $(this).val(); //lấy gía trị ng dùng gõ
    if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
    {
     var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
     $.ajax({
      url:"{{ route('search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
      method:"POST", // phương thức gửi dữ liệu.
      data:{query:query, _token:_token},
      success:function(data){ //dữ liệu nhận về
       $('#countryList').fadeIn();  
       $('#countryList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
     }
   });
   }
 });

   $(document).on('click', 'li', function(){  
    
    $('#country_name').val($(this).text());  
    $('#countryList').fadeOut();  
  });  

 });
</script>