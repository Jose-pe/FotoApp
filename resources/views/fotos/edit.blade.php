@extends('layouts.layoutmain')
@section('contenido')
        
    <section id="containereditar">
                  
        <article class="card">

           
            <form enctype="multipart/form-data" action="{{route('foto.update', $foto->id)}}" method="post">
                @csrf
                @method('PATCH')
                <img src="/storage/imagenes/{{$foto->ruta_foto}}" alt="">
                <div class="mb-2">
                    <textarea class="textarea is-link" placeholder="{{$foto->descripcion}}"  name="descripcion"></textarea>
                </div>
                
              
                <div class="select is-link">
                    <select  class="input" name="id_categoria" value="{{$foto->id_categoria}}" >
                        <option value="{{$foto->id_categoria}}"> {{$foto->categoria->nombre_categoria}}</option>
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}"> {{$categoria->nombre_categoria}}</option>
                        @endforeach   
        
                    </select>   
                </div>
                <div class="field mt-2 mb-2">
                    <div class="select is-link">                    
                        <select name="calificacion" class="input">
                            <option selected> {{$foto->calificacion}}</option>    
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>            
                    </div>
                </div>
                 <div class="field">
                    <div class="control">
                        <button class=" button is-link is-fullwidth" type="submit" > Editar </button>
                    </div>
                 </div>       
            </form>
        </article>
    </section>
@endsection