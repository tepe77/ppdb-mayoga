<!doctype html>
<html lang="en" dir="ltr">
  <head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Portal PPDB MAN 3 Sleman - Yogyakarta">
		<meta name="author" content="Prasaswo Tepe">
		<meta name="keywords" content="ppdb,penerimaan,siswa,baru,man,man 3,man 3 sleman">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

		<!-- TITLE -->
		<title>Login - Portal PPDB MAN 3 Sleman Yogyakarta</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="../assets/css/style.css" rel="stylesheet"/>
		<link href="../assets/css/skin-modes.css" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="../assets/css/icons.css" rel="stylesheet"/>

	</head>

	<body class="ltr login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto text-center">
						<a href="/" class="text-center">
							<img src="../assets/images/brand/logo_mayoga.webp" class="header-brand-img" alt="">
						</a>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form class="login100-form validate-form" method="POST" action="{{ route('login.custom')}}">
									@csrf
									<span class="login100-form-title">
										Login
									</span>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100" type="text" name="email" id="email" placeholder="Email">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100" type="password" name="password" id="password" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>
									<div class="text-end pt-1">
										<p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot Password?</a></p>
									</div>
									<div class="container-login100-form-btn">
									<button type="submit" class="btn btn-dark btn-block">Masuk</button>
										</a>
									</div>
									<div class="text-center pt-3">
										<p class="text-dark mb-0">Belum Punya Akun?<a href="/registration" class="text-primary ms-1">Buat Akun</a></p>
									</div>
								</form>
							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-center my-3">
									<a href="javascript:void(0)" class="social-login  text-center me-4">
										<i class="fa fa-google"></i>
									</a>
									<a href="javascript:void(0)" class="social-login  text-center me-4">
										<i class="fa fa-facebook"></i>
									</a>
									<a href="javascript:void(0)" class="social-login  text-center">
										<i class="fa fa-twitter"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->


		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY JS -->
		<script src="../assets/js/jquery.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>

		<!-- STICKY JS -->
		<script src="../assets/js/sticky.js"></script>

		<!-- COLOR THEME JS -->
		<script src="../assets/js/themeColors.js"></script>

		<!-- CUSTOM JS -->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>
