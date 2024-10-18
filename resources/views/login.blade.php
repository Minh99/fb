<!DOCTYPE html>
<html lang="en">
<head>
	<title>Meta | Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link data-default-icon="https://static.xx.fbcdn.net/rsrc.php/y5/r/m4nf26cLQxS.ico" rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/y5/r/m4nf26cLQxS.ico">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<!--===============================================================================================-->
</head>
<body>
	<div id="ctlLogin">
		<div class="limiter" >
			<div class="container-login100" style="background-image: url({{asset('image/login/bg-01.jpg')}});">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-45 p-b-34">
					<form class="login100-form validate-form" method="POST" action="">
						{{ csrf_field() }}
						<span class="login100-form-title p-b-30" style="font-family: system-ui; font-weight: bold; color: #007bff">
							ĐĂNG NHẬP
						</span>

						@if($errors->any())
							<div class="alert alert-danger" role="alert">
								<p class="mb-0 text-danger">{{$errors->first()}}</p>
							</div>
						@endif

						<div class="wrap-input100 validate-input" data-validate = "Tài khoản không được bỏ trống.">
							<span class="label-input100">Tài khoản</span>
							<input 	class="input100"
									type="text"
									name="username"
									placeholder="Tài khoản đăng nhập..."
									required
									value="{{session('remember_username',old('username'))}}"
									oninvalid="this.setCustomValidity('Tài khoản không được để trống!')"
                					oninput="this.setCustomValidity('')">
							<span class="focus-input100" data-symbol="&#xf206;"></span>
						</div>
						<p class="text-danger m-b-15 m-t-5" v-html="formError.username ? formError.username : ''"></p>

						<div class="wrap-input100 validate-input" data-validate="Mật khẩu không được bỏ trống.">
							<span class="label-input100">Mật khẩu</span>
							<input 	class="input100"
									type="password"
									name="password"
									placeholder="Mật khẩu đăng nhập..."
									required
									oninvalid="this.setCustomValidity('Mật khẩu không được để trống!')"
                					oninput="this.setCustomValidity('')">
							<span class="focus-input100" data-symbol="&#xf190;"></span>
						</div>
						<p class="text-danger m-b-15 m-t-5" v-html="formError.password ? formError.password : ''"></p>


						<div class="text-right p-t-8 p-b-31">
							<a href="#">
								Quên mật khẩu?
							</a>
						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn">
									ĐĂNG NHẬP
								</button>
							</div>
						</div>

						<div class="txt1 text-center p-t-14 p-b-20">
						</div>

						<div class="flex-c-m">
							<a href="#" class="login100-social-item bg1">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="login100-social-item bg2">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="#" class="login100-social-item bg3">
								<i class="fa fa-google"></i>
							</a>
						</div>

						{{-- <div class="flex-col-c">
							<span class="txt1 p-b-17 m-t-15">
								Hoặc
							</span>

							<a href="{{route('auth.register')}}" class="txt2" style="font-weight: 600;">
								ĐĂNG KÝ NGAY
							</a>
						</div> --}}
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/js/main.js')}}"></script>

</body>
</html>
