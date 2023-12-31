<!DOCTYPE html><!--
Template Name: Rubick - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('backendimages/logo.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive bootstrap admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - Rubick - Bootstrap HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
        
        <link rel="stylesheet" href="{{asset('backend/css/app.css')}}"/>
        <!-- END: CSS Assets-->
        @notifyCss
    </head>
    <!-- END: Head -->
    <body class="main">
        <div class="d-flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="index.html" class="intro-x d-flex align-items-center ps-5 pt-4">
                    <img style="width: 100%;" alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{asset('backend/images/logo.svg')}}">
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="{{route('home')}}" class="side-menu side-menu--active side-menu--open">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                            </div>
                        </a>
                    </li>
                    @hasanyrole(['admin','writer'])
                    <li>
                        <a href="javascript:;.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title">
                                Menu Bar
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('category.all')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Category</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('SubCategory.all')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Sub Category</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title">
                                Post Bar
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('post.all')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Add Post</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('post.get.all')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> All Post</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endhasanyrole
                    <li>
                        <a href="side-menu-light-inbox.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Inbox </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb me-auto d-none d-sm-flex"> <a href="{{route('frontend')}}">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{route('home')}}" class="breadcrumb--active">Dashboard</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x position-relative me-3 me-sm-6">
                        <div class="search d-none d-sm-block">
                            <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                            <i data-feather="search" class="search__icon dark-text-gray-300"></i> 
                        </div>
                        <a class="notification d-sm-none" href="index.html"> <i data-feather="search" class="notification__icon dark-text-gray-300"></i> </a>
                        <div class="search-result">
                            <div class="search-result__content">
                                <div class="search-result__content__title">Pages</div>
                                <div class="mb-5">
                                    <a href="index.html" class="d-flex align-items-center">
                                        <div class="w-8 h-8 bg-theme-18 text-theme-9 d-flex align-items-center justify-content-center rounded-circle"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                        <div class="ms-3">Mail Settings</div>
                                    </a>
                                    <a href="index.html" class="d-flex align-items-center mt-2">
                                        <div class="w-8 h-8 bg-theme-17 text-theme-11 d-flex align-items-center justify-content-center rounded-circle"> <i class="w-4 h-4" data-feather="users"></i> </div>
                                        <div class="ms-3">Users & Permissions</div>
                                    </a>
                                    <a href="index.html" class="d-flex align-items-center mt-2">
                                        <div class="w-8 h-8 bg-theme-14 text-theme-10 d-flex align-items-center justify-content-center rounded-circle"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                        <div class="ms-3">Transactions Report</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Products</div>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle" src="dist/images/preview-4.jpg">
                                    </div>
                                    <div class="ms-3">Sony Master Series A9G</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Electronic</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle" src="dist/images/preview-1.jpg">
                                    </div>
                                    <div class="ms-3">Samsung Q90 QLED TV</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Electronic</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle" src="dist/images/preview-11.jpg">
                                    </div>
                                    <div class="ms-3">Samsung Q90 QLED TV</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Electronic</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle" src="dist/images/preview-5.jpg">
                                    </div>
                                    <div class="ms-3">Nike Tanjun</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Sport &amp; Outdoor</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown me-auto me-sm-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-bs-toggle="dropdown"> <i data-feather="bell" class="notification__icon dark-text-gray-300"></i> </div>
                        <div class="notification-content pt-2 dropdown-menu">
                            <div class="notification-content__box dropdown-content">
                                <div class="notification-content__title dark-text-gray-300">Notifications</div>
                                <div class="cursor-pointer position-relative d-flex align-items-center ">
                                    <div class="w-12 h-12 flex-none image-fit me-1">
                                        <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill" src="dist/images/profile-14.jpg">
                                        <div class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3"></div>
                                    </div>
                                    <div class="ms-2 overflow-hidden">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Robert De Niro</a> 
                                            <div class="fs-xs text-gray-500 ms-auto text-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit me-1">
                                        <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill" src="dist/images/profile-3.jpg">
                                        <div class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3"></div>
                                    </div>
                                    <div class="ms-2 overflow-hidden">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Angelina Jolie</a> 
                                            <div class="fs-xs text-gray-500 ms-auto text-nowrap">06:05 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit me-1">
                                        <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill" src="dist/images/profile-5.jpg">
                                        <div class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3"></div>
                                    </div>
                                    <div class="ms-2 overflow-hidden">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Robert De Niro</a> 
                                            <div class="fs-xs text-gray-500 ms-auto text-nowrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit me-1">
                                        <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill" src="dist/images/profile-1.jpg">
                                        <div class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3"></div>
                                    </div>
                                    <div class="ms-2 overflow-hidden">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Bruce Willis</a> 
                                            <div class="fs-xs text-gray-500 ms-auto text-nowrap">03:20 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit me-1">
                                        <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill" src="dist/images/profile-5.jpg">
                                        <div class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3"></div>
                                    </div>
                                    <div class="ms-2 overflow-hidden">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Kevin Spacey</a> 
                                            <div class="fs-xs text-gray-500 ms-auto text-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-pill overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                            <img alt="Rubick Tailwind HTML Admin Template" src="{{
                                auth()->user()->profile_img ? 
                                asset('storage/users/'.auth()->user()->profile_img):
                                env('AVATER_API').auth()->user()->name}}">
                        </div>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content bg-theme-26 dark-bg-dark-6 text-white">
                                <li class="p-2">
                                    <div class="fw-medium text-white">{{auth()->user()->name}}</div>
                                    <div class="fs-xs text-theme-28 mt-0.5 dark-text-gray-600">DevOps Engineer</div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                                </li>
                                <li>
                                    <a href="{{route('profile.home')}}" class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i data-feather="user" class="w-4 h-4 me-2"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="index.html" class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i data-feather="edit" class="w-4 h-4 me-2"></i> Add Account </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                       {{ __('Logout') }} class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover">

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                        
                                        
                                        <i data-feather="toggle-right" class="w-4 h-4 me-2"></i> Logout </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
{{-- Main Containt --}}
@yield('backendContent')
{{-- laravel notify start --}}
<x-notify::notify />
    </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="side-menu-dark-dashboard-overview-1.html" class="dark-mode-switcher cursor-pointer shadow-md position-fixed bottom-0 end-0 box dark-bg-dark-2 border rounded-pill w-40 h-12 d-flex align-items-center justify-content-center z-50 mb-10 me-10">
            <div class="me-4 text-gray-700 dark-text-gray-300">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places"></script>
        <script src="{{asset('backend/js/app.js')}}"></script>
        @notifyJs
        <!-- END: JS Assets-->
        @stack('customJs')
    </body>
</html>
