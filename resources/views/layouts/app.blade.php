<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    {{-- theme --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">  

    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href=" {{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg')}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container">
                <a class="navbar-brand" href="{{ url('/admindashboard') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                                @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('ADMIN') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            </ul>
                          </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div> --}}


        {{-- .......................................................................... --}}
{{-- Body --}}

{{-- @auth --}}
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper ">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="/admindashboard"><img src="{{ asset('assets/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
                    </div>
                    
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none ddd-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>
                    @auth
                    <li class="sidebar-item active ">
                        <a href="{{ route('admin.dashboard')}}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    @endauth
                    

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>BCA</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('firstsemistersubjects.index')}}">BCA 1 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('secsemistersubjects.index')}}">BCA 2 <sup>nd</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-breadcrumb.html">BCA 3 <sup>rd</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-button.html">BCA 4 <sup>th</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-card.html">BCA 5 <sup>th</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-carousel.html">BCA 6 <sup>th</sup> SEM</a>
                            </li>
                            
                        </ul>
                    </li>

                    {{-- <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            
                            <span>BSC</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="extra-component-avatar.html">BSC 1 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="extra-component-sweetalert.html">BSC 2 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="extra-component-toastify.html">BSC 3 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="extra-component-rating.html">BSC 4 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="extra-component-divider.html">BSC 5 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="extra-component-divider.html">BSC 6 <sup>st</sup> SEM</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>MCA</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="layout-default.html">MCA 1 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="layout-vertical-1-column.html">MCA 2 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="layout-vertical-navbar.html">MCA 3 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="layout-horizontal.html">MCA 4 <sup>st</sup> SEM</a>
                            </li>
                        </ul>
                    </li> 

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-credit-card-fill"></i>
                            <span>MSC</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="layout-default.html">MSC 1 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="layout-vertical-1-column.html">MSC 2 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="layout-vertical-navbar.html">MSC 3 <sup>st</sup> SEM</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="layout-horizontal.html">MSC 4 <sup>st</sup> SEM</a>
                            </li>
                        </ul>
                    </li>  --}}
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main" class='layout-navbar'>
        <header class='mb-3'>
            <nav class="navbar navbar-expand navbar-light ">
                <div class="container-fluid">
                    @guest
                    <a href="#" class="burger-btn d-block">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                    @endguest
                    
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        </ul>
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                @guest
                                @if (Route::has('login'))
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('ADMIN') }}</a>
                                    </li>
                                </ul>
                                    
                                @endif
                                @else
                                <div class="user-menu d-flex">
                                    <div class="user-name text-end me-3">
                                        <h6 class="mb-0 text-gray-600"> {{ Auth::user()->name }}</h6>
                                        <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                    </div>
                                    <div class="user-img d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="assets/images/faces/1.jpg">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <h6 class="dropdown-header"> {{ Auth::user()->name }}</h6>
                                </li>
                                
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"><i  class="icon-mid bi bi-box-arrow-left me-2"></i> {{ __('Logout') }}</a></li>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                         </form>

                                         @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        {{-- <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header> --}}

        
        <div class="page-content mx-4">
            <section class="row">
                <div class="col-12 col-lg-12">

                    @yield('content')

                </div>
            </section>
        </div>
{{-- @else                   
<main class="py-4">
           
    <div class="container">
        <div class="row">
            <div class="col col-4">
                 <div class="">
                     <h3 class="p-4">BCA</h3>
                 </div>
                 <ul class="nav nav-tabs">
                     <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('firstsemistersubjects.index')}}"">1 <sup>st</sup>Sem</a>
                      </li>
                     <li class="nav-item">
                    <a class="nav-link" href="#">2 <sup>nd</sup>Sem</a>
                     </li>
                      <li class="nav-item">
                    <a class="nav-link" href="#">3 <sup>rd</sup>Sem</a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#">4 <sup>th</sup>Sem</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">5 <sup>th</sup>Sem</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">6 <sup>th</sup>Sem</a>
                    </li>
                 </ul>


                 <div class="">
                     <h3 class="p-4">BSC</h3>
                 </div>
                 <ul class="nav nav-tabs">
                     <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{route('FirstSemEnglish.index')}}">1 <sup>st</sup>Sem</a>
                      </li>
                     <li class="nav-item">
                    <a class="nav-link" href="#">2 <sup>nd</sup>Sem</a>
                     </li>
                      <li class="nav-item">
                    <a class="nav-link" href="#">3 <sup>rd</sup>Sem</a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#">4 <sup>th</sup>Sem</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">5 <sup>th</sup>Sem</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">6 <sup>th</sup>Sem</a>
                    </li>
                 </ul>

                 <div class="">
                     <h3 class="p-4">MCA</h3>
                 </div>
                 <ul class="nav nav-tabs">
                     <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">1 <sup>st</sup>Sem</a>
                      </li>
                     <li class="nav-item">
                    <a class="nav-link" href="#">2 <sup>nd</sup>Sem</a>
                     </li>
                      <li class="nav-item">
                    <a class="nav-link" href="#">3 <sup>rd</sup>Sem</a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#">4 <sup>th</sup>Sem</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">5 <sup>th</sup>Sem</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">6 <sup>th</sup>Sem</a>
                    </li>
                 </ul>

                 <div class="">
                     <h3 class="p-4">MSC</h3>
                 </div>
                 <ul class="nav nav-tabs">
                     <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">1 <sup>st</sup>Sem</a>
                      </li>
                     <li class="nav-item">
                    <a class="nav-link" href="#">2 <sup>nd</sup>Sem</a>
                     </li>
                      <li class="nav-item">
                    <a class="nav-link" href="#">3 <sup>rd</sup>Sem</a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#">4 <sup>th</sup>Sem</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">5 <sup>th</sup>Sem</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">6 <sup>th</sup>Sem</a>
                    </li>
                 </ul>
            </div>
        
            
            
       
            <div class="col col-8">
             @yield('content')
            </div>
         
        </div>


        
    </div>


     
 </div>
 </main> --}}
                    
{{-- @endauth --}}
        @auth
        <footer>
            <div class="footer clearfix mb-0 text-muted mt-5">
                <div class="float-start">
                    <p>2021 &copy; </p>
                </div>
                <div class="float-end">
                    <p>Created with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="#">Basant & Villasini</a></p>
                </div>
            </div>
        </footer>
        @endauth
        
    </div>
</div>
<script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js')}}"></script>

<script src="{{ asset('assets/js/main.js')}}"></script>

        {{-- ............................................................................ --}}

{{--     
        @auth 
        <div class="container p-4">
            <div class="row">
                <div class="col col-3">

                    <div class="card card-default">
                        <div class="card-header text-center">
                            <strong><h3><a href="#">Course</a></h3></strong>
                        </div>

                        <div class="card-body">

                            <div class="btn-group dropend m-2">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  BCA
                                </button>
                                <ul class="dropdown-menu">
                                  <!-- Dropdown menu links -->
                                    <li><a class="dropdown-item" href="{{ route('firstsemistersubjects.index')}}">1 <sup>st</sup>SEM</a></li>
                                    <li><a class="dropdown-item" href="{{ route('FirstSemEnglish.index')}}">2 <sup>nd</sup>SEM</a></li>
                                    <li><a class="dropdown-item" href="#">3 <sup>rd</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">4 <sup>th</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">5 <sup>th</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">6 <sup>th</sup>SEM</a></a></li>
                                </ul>
                            </div>

                            <div class="btn-group dropend m-2">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  BSC
                                </button>
                                <ul class="dropdown-menu">
                                  <!-- Dropdown menu links -->
                                    <li><a class="dropdown-item" href="{{ route('firstsemistersubjects.index')}}">1 <sup>st</sup>SEM</a></li>
                                    <li><a class="dropdown-item" href="{{ route('FirstSemEnglish.index')}}">2 <sup>nd</sup>SEM</a></li>
                                    <li><a class="dropdown-item" href="#">3 <sup>rd</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">4 <sup>th</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">5 <sup>th</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">6 <sup>th</sup>SEM</a></a></li>
                                </ul>
                            </div>

                            <div class="btn-group dropend m-2">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  MCA
                                </button>
                                <ul class="dropdown-menu">
                                  <!-- Dropdown menu links -->
                                    <li><a class="dropdown-item" href="{{ route('firstsemistersubjects.index')}}">1 <sup>st</sup>SEM</a></li>
                                    <li><a class="dropdown-item" href="{{ route('FirstSemEnglish.index')}}">2 <sup>nd</sup>SEM</a></li>
                                    <li><a class="dropdown-item" href="#">3 <sup>rd</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">4 <sup>th</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">5 <sup>th</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">6 <sup>th</sup>SEM</a></a></li>
                                </ul>
                            </div>

                            <div class="btn-group dropend m-2">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  MSC
                                </button>
                                <ul class="dropdown-menu">
                                  <!-- Dropdown menu links -->
                                    <li><a class="dropdown-item" href="{{ route('firstsemistersubjects.index')}}">1 <sup>st</sup>SEM</a></li>
                                    <li><a class="dropdown-item" href="#">2 <sup>nd</sup>SEM</a></li>
                                    <li><a class="dropdown-item" href="#">3 <sup>rd</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">4 <sup>th</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">5 <sup>th</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">6 <sup>th</sup>SEM</a></a></li>
                                </ul>
                            </div>

                            <div class="btn-group dropend m-2">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  ELECTRONICS
                                </button>
                                <ul class="dropdown-menu">
                                  <!-- Dropdown menu links -->
                                    <li><a class="dropdown-item" href="{{ route('firstsemistersubjects.index')}}">1 <sup>st</sup>SEM</a></li>
                                    <li><a class="dropdown-item" href="{{ route('FirstSemEnglish.index')}}">2 <sup>nd</sup>SEM</a></li>
                                    <li><a class="dropdown-item" href="#">3 <sup>rd</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">4 <sup>th</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">5 <sup>th</sup>SEM</a></a></li>
                                    <li><a class="dropdown-item" href="#">6 <sup>th</sup>SEM</a></a></li>
                                </ul>
                            </div>
                            
                         </div>
                    </div>
                </div>
            <div class="col col-9">
    
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                    @endif
                    <div class="">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @else
        <main class="py-4">
           
           <div class="container">
               <div class="row">
                   <div class="col col-6">
                        <div class="">
                            <h3 class="p-4">BCA</h3>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                           <a class="nav-link " aria-current="page" href="{{ route('firstsemistersubjects.index')}}"">1 <sup>st</sup>Sem</a>
                             </li>
                            <li class="nav-item">
                           <a class="nav-link" href="#">2 <sup>nd</sup>Sem</a>
                            </li>
                             <li class="nav-item">
                           <a class="nav-link" href="#">3 <sup>rd</sup>Sem</a>
                            </li>
                            <li class="nav-item">
                             <a class="nav-link" href="#">4 <sup>th</sup>Sem</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">5 <sup>th</sup>Sem</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">6 <sup>th</sup>Sem</a>
                           </li>
                        </ul>


                        <div class="">
                            <h3 class="p-4">BSC</h3>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                           <a class="nav-link " aria-current="page" href="{{route('FirstSemEnglish.index')}}">1 <sup>st</sup>Sem</a>
                             </li>
                            <li class="nav-item">
                           <a class="nav-link" href="#">2 <sup>nd</sup>Sem</a>
                            </li>
                             <li class="nav-item">
                           <a class="nav-link" href="#">3 <sup>rd</sup>Sem</a>
                            </li>
                            <li class="nav-item">
                             <a class="nav-link" href="#">4 <sup>th</sup>Sem</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">5 <sup>th</sup>Sem</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">6 <sup>th</sup>Sem</a>
                           </li>
                        </ul>

                        <div class="">
                            <h3 class="p-4">MCA</h3>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                           <a class="nav-link " aria-current="page" href="#">1 <sup>st</sup>Sem</a>
                             </li>
                            <li class="nav-item">
                           <a class="nav-link" href="#">2 <sup>nd</sup>Sem</a>
                            </li>
                             <li class="nav-item">
                           <a class="nav-link" href="#">3 <sup>rd</sup>Sem</a>
                            </li>
                            <li class="nav-item">
                             <a class="nav-link" href="#">4 <sup>th</sup>Sem</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">5 <sup>th</sup>Sem</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">6 <sup>th</sup>Sem</a>
                           </li>
                        </ul>

                        <div class="">
                            <h3 class="p-4">MSC</h3>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                           <a class="nav-link " aria-current="page" href="#">1 <sup>st</sup>Sem</a>
                             </li>
                            <li class="nav-item">
                           <a class="nav-link" href="#">2 <sup>nd</sup>Sem</a>
                            </li>
                             <li class="nav-item">
                           <a class="nav-link" href="#">3 <sup>rd</sup>Sem</a>
                            </li>
                            <li class="nav-item">
                             <a class="nav-link" href="#">4 <sup>th</sup>Sem</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">5 <sup>th</sup>Sem</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">6 <sup>th</sup>Sem</a>
                           </li>
                        </ul>
                   </div>
               
                   
                   
              
                   <div class="col col-6">
                    @yield('content')
                   </div>
                
               </div>


               
           </div>


            
        </div>
        </main>
        @endauth
        


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> --}}
</body>
</html>
