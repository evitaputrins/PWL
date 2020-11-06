<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top" style="background-color:#000080">
    <div class="container">
      <a class="navbar-brand" href="https://lmsc19.polinema.ac.id/course/view.php?id=47">Pemrograman Web Lanjut</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
        @can('user-display')
        <a class="nav-link" href="{{ url('./home') }}">Home</a>
        @endcan
        </li>
        <li class="nav-item">
        @can('user-display')
        <a class="nav-link" href="{{ url('./about') }}">About</a>
        @endcan
        </li>
        <li class="nav-item {{ Route::is('services')? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('./services') }}">Services</a>
            @endcan
          </li>
          <li class="nav-item {{ Route::is('contact')? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('./contact') }}">Contact</a>
            @endcan
          </li>
          <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
            @can('manage-articles')
              <a class="nav-link" href="{{ url('./manage') }}">Manage Article</a>
            @endcan
          </li>
          <li class="nav-item {{ Route::is('manageuser') ? 'active' : '' }}">
            @can('manageuser-users')
              <a class="nav-link" href="{{ url('./manageuser') }}">Manage User</a>
            @endcan
          </li>

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

  @yield('content')
 
  <!-- /.container -->


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Evita Putri Nauli Simanungkalit</p>
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
