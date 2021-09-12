@extends('layouts.layoutmain')
@section('contenido')
            <section class="container">
                    <div class="columns">

                            <article class="column">
                            @foreach ($fotos as $foto)
                                <div class="card">
                                    <p>{{$foto->descripcion}}</p>
                                    <img src="/storage/imagenes/{{$foto->ruta_foto}}" alt="">
                                </div>
                                
                              
                                
                            @endforeach
                            </article>

                    </div>

            </section>
           

@endsection