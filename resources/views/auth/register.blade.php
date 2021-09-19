@extends('layouts.layoutmain')

@section('contenido')
<div class="container">
    <div class="formulario">
        
           
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="field">

                            <div class="control">
                                <input id="name" placeholder="Nombres y Apellidos" type="text" class="input is-large @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">

                            <div class="control">
                                <input id="nickname" placeholder="Nombre de Usuario" type="text" class="input is-large @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>

                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                    

                        <div class="field">

                            <div class="control">
                                <input id="email" placeholder="E-mail" type="email" class="input is-large @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">

                            <div class="control">
                                <input id="password" placeholder="Contraseña" type="password" class="input is-large @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">

                            <div class="control">
                                <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="input is-large" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button is-link is-fullwidth is-large">
                                    {{ __('Registarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>          
</div>
@endsection
