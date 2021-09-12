@extends('layouts.layoutmain')

@section('contenido')
    
<section>
    <div class="section">
            <h3 > HOLA ESTO ES FOTOAPP</h3>
    </div>
</section>
<section class="container-fluid">
    <div  id="contenedor">
      <div id="tarjetas">

      
        @foreach ($fotos as $foto)
      
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
      
        @endforeach   
      </div>
   </div>
</section>



@endsection
