<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
html, body 
{
    background-image: url("/css/img/background.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    color: #ffffff;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}
div.row
{
    padding: 25px
}
h3
{
    color: #ffffff !important;
}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ffffff;
  color: inherit;
}
td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f1f1f1 !important;}
tr:hover {background-color: #ddd !important;}
tr {background-color: #ffffff !important;}

</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AMAE') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'AMAE') }}
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    @guest
                
                    @else

                    <a class="nav-link" href="{{ url('/home') }}">{{ __('Pradžia') }}</a>  

                    @if (!is_null(Auth::user()->approved_at))     
                        @if(Auth::user()->admin==false)
                        <a class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Įrankiai') }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/vaistu-dozavimas') }}" >{{ __('Vaistų dozavimas') }}</a>  
                                    <a class="dropdown-item" href="{{ url('/vaistai') }}" >{{ __('Vaistai') }}</a>
                                    <a class="dropdown-item" href="{{ url('/pacients') }}" >{{ __('Pacientai') }}</a>                                  
                                    <a class="dropdown-item" href="{{ url('/prescriptions') }}" >{{ __('Paskirti receptai') }}</a>
                                </div>
                            </li>
                        </a> 

                        <a class="nav-link" href="{{ url('wiki') }}">{{ __('WIKI') }}</a> 

                        @endif

                        <a class="nav-link" href="{{ url('tickets') }}">{{ __('Užklausos') }}</a>

                    @endif

                    @if(Auth::user()->admin) 
                    
                    <a class="nav-link" href="{{ url('/admin/users') }}">{{ __('Vartotojų patvirtinimas') }}</a>

                    @endif
                    
                    @endguest
                    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Prisijungti') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registracija') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    @if (!is_null(Auth::user()->approved_at)) 
                                        <a class="dropdown-item" href="{{ route('profile') }}" >{{ __('Mano paskyra') }}</a>
                                        <a class="dropdown-item" href="{{ route('edit') }}" >{{ __('Paskyros redagavimas') }}</a>
                                    @endif
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Atsijungti') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
</body>
</html>
