<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bulma/bulma.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <title>FotoApp</title>
</head>
<body>  
    
    <header>
        <nav>
            <ul class="navbar is-link">
                <!-- Authentication Links -->
                <li class="navbar-item">
                    <div class="buttons">
                        <a class="button is-success" href="/">Inicio</a>
                    </div>
                    
                </li>
          <div class="navbar-end">
            <div class="navbar-item">
                @guest
                    @if (Route::has('login'))

                        <li class="navbar-item ">
                            <div class="buttons">
                            <a class="button is-primary is-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="navbar-item">
                            <div class="buttons">
                            <a class="button is-primary is-light"  href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>    
                        </li>
                    @endif
                @else
                    <li class="navbar-item">
                        <div class="buttons">
                        <a class="button is-primary is-light" href="{{ route('home')}}"> Mi Perfil</a> 
                        </div>
                    </li>
                    <li class="navbar-item">
                        <div class="buttons">
                        <a class="button is-primary is-light" href="#" role="button" >
                           {{ Auth::user()->nickname }}
                        </a>
                        </div>
                    </li>
                        <li class="navbar-item">
                            
                            <a class="button is-primary is-light" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>                   
                @endguest
            </ul>
        </nav>
           

    </header>

    <section class="flex">
        @yield('contenido')   
       
    </section> 
    <footer class="footer">
        <h1> footer AQUI</h1>
    </footer>
    
      

</body>
</html>