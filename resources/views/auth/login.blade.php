<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Love - Wedding Mobile Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/frontend-theme/images/favicon.png') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css"
        integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/framework7.material.colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/framework7.material.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-theme/css/style.css') }}">
</head>

<body>

    <div class="statusbar-overlay"></div>
    <div class="panel-overlay"></div>
    <div class="views">
        <div class="view view-main">

            <!-- navbar -->
            <div class="navbar">
                <div class="navbar-inner">
                   <div class="center site-title">
                        <a href="index.html">
                            <h1>Love <i class="fa fa-heart"></i></h1>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end navbar -->

            <!-- pages -->
           <!-- pages -->
<div class="pages">
	<div class="page">
		<div class="page-content">
			<div class="app-pages">
	
				<!-- login-->
				<div class="login app-pages app-section">
					<div class="container">
						<div class="pages-title">
							<h3>Login</h3>
						</div>
						<form action="{{route('login')}}" method="post">
                            @csrf
							<div class="item-input">
								<input id="email" name="email" type="email" class="validate" placeholder="Email">
							</div>
							<div class="item-input">
								<input id="password" name="password" type="password" class="validate" placeholder="Passwordd">
							</div>
							{{-- <div><a href="" class="forgot">Forgot Password?</a></div> --}}
							{{-- <div class="chebox">
								<input type="checkbox" id="checkbox" />
			  					<label for="checkbox">Remember me</label>
							</div> --}}
							<button type="submit" class="app-button">Login</button>
							{{-- <div class="create-account">Not Registered? <a href="">Create an account</a></div> --}}
						</form>
						{{-- <div class="or">
							<h5>OR</h5>
							<button class="app-button facebook">Login with Facebook</button>
							<button class="app-button twitter">Login with Twitter</button>
							<button class="app-button google">Login with Google+</button>
						</div> --}}
					</div>
				</div>
				<!-- end login -->
				
				<!-- footer -->
				<footer>
					<div class="container">
						<h6>Find & follow us</h6>
						<ul class="icon-social">
							<li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
							<li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
							<li class="google"><a href=""><i class="fa fa-google"></i></a></li>
							<li class="instagram"><a href=""><i class="fa fa-instagram"></i></a></li>
							<li class="rss"><a href=""><i class="fa fa-rss"></i></a></li>
						</ul>
						<div class="tel-fax-mail">
							<ul>
								<li><span>Tel:</span> 900000o02</li>
								<li><span>Fax:</span> 0400000o98</li>
								<li><span>Email:</span> info@youremail.com</li>
							</ul>
						</div>
						<div class="ft-bottom">
							<span>Copyright © 2017 All Rights Reserved </span>
						</div>
					</div>
				</footer>
				<!-- end footer -->

			</div>
		</div>
	</div>
</div>
<!-- end pages -->
	
	
            <!-- end pages -->

        </div>
    </div>
    <!-- end views -->

    <!-- script -->
    <script src="{{ asset('assets/frontend-theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/framework7.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/jquery.filterizr.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-theme/js/my-app.js') }}"></script>
    {{-- <script src="https://kit.fontawesome.com/39fac907c5.js" crossorigin="anonymous"></script> --}}

</body>

</html>
