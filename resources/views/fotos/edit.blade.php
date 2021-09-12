@extends('layouts.layoutmain')
@section('contenido')
        
            <section class="container">
                <h3> edita tu foto</h3>
            </section>

            <form enctype="multipart/form-data" action="{{route('foto.update', $foto->id)}}" method="post">
                @csrf
                @method('PATCH')
                <img src="/storage/imagenes/{{$foto->ruta_foto}}" alt="">
                <label for="imagen">Imagen</label>
                <input type="file" accept="image/*" name="ruta_foto">
                <label for="descripcion">Descripcion</label>
                <input value="{{$foto->descripcion}}" type="text" name="descripcion">
               
              
                <label for="categoria">Categoria</label>
                <select name="id_categoria" value="{{$foto->id_categoria}}" >
                    
                    @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}"> {{$categoria->nombre_categoria}}</option>
                    @endforeach   
    
                </select>           
                <label for="calificacion">calificacion</label>
                <input value="{{$foto->calificacion}}" type="text" name="calificacion">
                <input class="button is-success" type="submit" >
            </form>

@endsection