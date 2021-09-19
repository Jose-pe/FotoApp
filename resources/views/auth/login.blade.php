@extends('layouts.layoutmain')

@section('contenido')
<div class="container">
 
        
            <div class="formulario">
               

              
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="field mb-4">
                            <p class="control has-icons-left has-icons-right">
                                <input type="email" class="input is-large @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-MAIL" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope fa-lg"></i>
                                  </span>
                            </p>                          
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                  

                        <div class="field mb-4">

                            <p class="control has-icons-left">
                                <input  type="password" class="input is-large @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="PASSWORD">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock fa-lg"></i>
                                  </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                        </div>

                        <div class="field p-1">
                            <div class="control">
                                
                                    <input class="checkbox is-large" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="checkbox" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                               
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit"  class="button is-medium is-fullwidth is-link mb-2">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class=" is-link" href="{{ route('password.request') }}">
                                        {{ __('Recuperar Contraseña ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
           
       
    </div>
</div>
@endsection
