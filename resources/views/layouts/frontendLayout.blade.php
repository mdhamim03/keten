<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Katen - Minimal Blog & Magazine HTML Theme</title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{asset("frontend/images/favicon.png")}}">

	<!-- STYLES -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('frontend/css/simple-lie-icons.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css" media="all">

	{{-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] --}}

</head>

<body>


<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	<header class="header-classic">

			<div class="container-xl">
				<!-- header top -->
				<div class="header-top">
					<div class="row align-items-center">

						{{-- Logo --}}
							@include('layouts.utility.frontendLogo')
						{{-- Logo End--}}

						{{-- Social icon --}}
						<div class="col-md-8 d-none d-md-block">
							@include('layouts.utility.frontendSocialIcon')
						</div>
						{{-- Social icon End --}}

					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg">
				<!-- header bottom -->
				<div class="header-bottom  w-100">
					
					<div class="container-xl">
						<div class="d-flex align-items-center">
							<div class="collapse navbar-collapse flex-grow-1">
								{{-- Nav start --}}
								@include('layouts.utility.frontendNavBar')
								{{-- Nav start end --}}
							</div>
			
							<!-- header buttons -->
							<div class="header-buttons">
								@include('layouts.utility.frontendNavBarButton')
							</div>
						</div>
					</div>
			
				</div>
			</nav>
			

	</header>
    {{-- main Content --}}
        @yield('contant')

{{-- Footer start --}}
@include('layouts.utility.frontendFooter')