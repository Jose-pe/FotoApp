@extends('layouts.layoutmain')

@section('contenido')
<section class="section">
    
                <div class="section">
                        <h2 class="title is-2 is-spaced has-text-link">
                            <i class="fas fa-portrait fa-lg"></i> {{ Auth::user()->nickname }} !
                        </h2>                     
                </div>

                <div class="section-small">
                    @if (session('status'))
                        <div class="notification is-primary" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                </div>
</section>
    <section class="container-fluid">
        <div class="columns is-multiline is-centered">
            

            
            @foreach ($fotos as $foto)
            <div class="column">
            <article class="card"> 
                <div class="card-img">                
                    <figure class="image" id="foto">
                        <img src="/storage/imagenes/{{$foto->ruta_foto}}" alt="">
                    </figure>
                </div>
                <div class="card-content">
                       
                    <div class="content">
                        <div id="contenedordescripcion">
                            <p> {{$foto->descripcion}}</p>
                        </div>
                        <div id="usuario">
                            <p class="title is-5"><a class="has-text-primary" href="{{route('perfilpublico', $foto->id_user)}}">
                            @ {{$foto->user->nickname}}
                          </a></p>
                        </div>
                        <div id="categorias">
                            <p class="tag is-warning">#{{$foto->categoria->nombre_categoria}}</p>
                          </div>
                          <p>{{$foto->calificacion}}</p>
                    <div id="botonescard">
                          <form action="{{route('foto.destroy', $foto->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="button is-link" type="submit">
                            <i class="fas fa-trash-alt fa-lg" >                            
                            </i>
                            </button>
                        </form>
                        
                        <a class="button is-link" href="{{route('foto.edit', $foto->id)}}"><i class="fas fa-edit fa-lg"></i></a>
                    </div>    
                    </div>
                </div>
            </article>
              
                
               
               
               
              
        </div>
            @endforeach
        </div>
        </div>
    </section>
 
        

@endsection
