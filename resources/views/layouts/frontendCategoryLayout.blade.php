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

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	<header class="header-personal">
        <div class="container-xl header-top">
			<div class="row align-items-center">

				{{-- social icons start --}}
                <div class="col-4 d-none d-md-block d-lg-block">
					<!-- social icons -->
                    @include('layouts.utility.frontendSocialIcon')
				</div>
				{{-- social icons start  end --}}

				<div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <!-- site logo -->
                        <a class="navbar-brand" href="personal.html"><img src="images/other/avatar-lg.png" alt="logo" /></a>
                        <a href="personal.html" class="d-block text-logo">Hamim</a>
                        <span class="slogan d-block">Professional Writer & Personal Blogger</span>
                    </div>

				<div class="col-md-4 col-sm-12 col-xs-12">
					<!-- header buttons -->
					<div class="header-buttons float-md-end mt-4 mt-md-0">
                        @include('layouts.utility.frontendNavBarButton')
						
					</div>
				</div>

			</div>
        </div>

		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">
				
				<div class="collapse navbar-collapse justify-content-center centered-nav">
					<!-- menus -->
					{{-- Nav start --}}
                    @include('layouts.utility.frontendNavBar')
                    {{-- Nav start end --}}
				</div>

			</div>
		</nav>
	</header>

    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Lifestyle</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="category.html#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lifestyle</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


{{-- Yeald Start --}}
@yield('content')


{{-- Footer Start --}}
@include('layouts.utility.frontendFooter')