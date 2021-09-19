@extends('layouts.layoutmain')
@section('contenido')
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
                                                <p>{{$foto->descripcion}}</p>
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
                                        </div>
                                   </div>                              
                                </article>
                            </div>
                            @endforeach
                    </div>
            </section>
           

@endsection