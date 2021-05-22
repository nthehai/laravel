<!DOCTYPE html>
<html>
<head>
	<title>FORM ĐĂNG NHẬP CHO CÁC ĐƠN VỊ ĐÀO TẠO</title>
</head>
<body>
	<div class="loginbox">
    <img src="{{URL::asset('images/avatar1.png')}}" class="avatar">
        <h1>Login Here</h1>
		<form method="post" action="{{URL::to('/dangnhap')}}">		
			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
			<p>E-mail</p>
			<input type="email" name="email" placeholder="Enter Email" required>
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" required>
			<button type="submit">Đăng nhập</button>
			<a href="#">Lost your password?</a><br>
		</form>
	</div>	
	<style type="text/css">
	body{
    margin: 0;
    padding: 0;
    background: url('images/pic1.jpg');
    background-position: center;
    font-family: sans-serif;
	}

	.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="email"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox button
{
    border: none;
    outline: none;
    height: 40px;
    width: 270px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox button:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}
	</style>
</body>
</html>