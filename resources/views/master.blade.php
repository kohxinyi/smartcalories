<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Smart Calorie</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css')}}" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('/css/responsive.css')}}" rel="stylesheet" />
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Auth -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
 
  @stack('styles')
  @stack('scripts')
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ asset('/')}}">
              <h3>
                Smart Calorie
              </h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/caloriesCalculator"> Calories Calculator </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/bmiCalculator"> BMI Calculator </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/leaderboard"> Leaderboard </a>
                </li>
                <li class="nav-item">
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
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a href="/summary" class="dropdown-item">
                                      Summary
                                    </a>

                                    <a href="/profile" class="dropdown-item">
                                      My Profile
                                    </a>

                                    <a href="/weight" class="dropdown-item">
                                      My Weight
                                    </a>

                                    <a href="/goals" class="dropdown-item">
                                      My Goals
                                    </a>

                                    <a href="/foods" class="dropdown-item">
                                      My Foods
                                    </a>

                                    <a href="/workouts" class="dropdown-item">
                                      My Exercise
                                    </a>

                                    <a href="/foodDatabase" class="dropdown-item">
                                      Food Suggestion
                                    </a>

                                    <a href="/qrscanner" class="dropdown-item">
                                      QR Scanner
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
    <!-- end header section -->
  </div>

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="side_img">
      <img src="{{ asset('/images/side-img.png')}}" alt="" />
    </div>
    <div class="container">
      @yield('contact')
      <div class="row">
        @yield('content')
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_menu">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{asset('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about"> About </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="container-fluid footer_section">
    <p>
      &copy; 2022 All Rights Reserved By
      <a href="#">Smart Calorie</a>
    </p>
  
  </footer>
  <!-- footer section -->
@stack('scripts')
</body>

</html>