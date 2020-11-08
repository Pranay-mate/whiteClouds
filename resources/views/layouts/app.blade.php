<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>
<body>
    <div id="app">
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"> <img src="/img/cloud2.png" width="50" height="30" alt=""
                loading="lazy">WhiteClouds</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Trending <span class="badge badge-danger">New</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" target="_blank" href="http://www.backpackerbanter.com/blog/">Travel
                            Blog</a>
                        <a class="dropdown-item" target="_blank"
                            href="https://timesofindia.indiatimes.com/life-style/health-fitness/health-news/coronavirus-vaccine-from-covaxin-to-russian-vaccine-roll-out-here-are-all-the-updates-regarding-covid-19-vaccine-development/photostory/78362614.cms">Pandemic
                            News</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" target="_blank"
                            href="https://www.healthline.com/nutrition/27-health-and-nutrition-tips">Health Care
                            Tips</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contactUs">Contact Us</a>
                </li>
              
                @guest
                    
                            @if (Route::has('register'))
                                        <li class="nav-item">
                    <a class="nav-link" href="/login">Book Tickets</a>
                </li>
                            @endif
                        @else
                                          <li class="nav-item">
                    <a class="nav-link" href="/bookings/create">Book Tickets</a>
                </li>
                        @endguest
                <li class="nav-item">
                    <a class="nav-link" href="/faqs">FAQs <span class="badge badge-warning">?</span></a>
                </li>
            </ul>
        
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/home">
                                        Dashboard
                                    </a>
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
        </div>
    </nav>
       

        <main class="py-4">
            @yield('content')
        </main>

    </div>
          <footer class="container">
        <p class="float-right"><a href="/contactUs">Contact Us</a></p>
        <p class='float-left'>© 2010-2020 WhiteClouds, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
</body>
</html>
