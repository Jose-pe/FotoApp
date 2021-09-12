@extends('layouts.layoutmain')

@section('contenido')
<div class="container">
    
                <div class="columns">{{ __('Dashboard') }}
                        <div class="column">
                            <a class="is-link" href="{{route('foto.create')}}">Sube Fotos</a>
                        </div>
                        <div class="column">
                             <a class="is link" href="">Perfil</a>                                   
                        </div>
                           
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                </div>
        <section class="columns">
            @foreach ($fotos as $foto)
            <div class="column">
                <img src="/storage/imagenes/{{$foto->ruta_foto}}" alt="">
               
                <p>{{$foto->categoria->nombre_categoria}}</p>  
                
                <p> {{$foto->descripcion}}</p>
                <p>{{$foto->calificacion}}</p>
                <form action="{{route('foto.destroy', $foto->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="button is-danger"  value="Eliminar" type="submit">
                </form>
                
                <a href="{{route('foto.edit', $foto->id)}}">editar</a>
              
            </div>
            @endforeach
           
        </section>
 </div>
        

@endsection
