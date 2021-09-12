@extends('layouts.layoutmain')

@section('contenido')
<h1 class="title"> hola </h1>

<div class="container">
    <div class="column">

        <form enctype="multipart/form-data" action="{{route('foto.store')}}" method="post">
            @csrf
            <label for="imagen">Imagen</label>
            <input type="file" accept="image/*" name="ruta_foto" required>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion">
           
          
            <label for="categoria">Categoria</label>
            <select name="id_categoria" >
                
                @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}"> {{$categoria->nombre_categoria}}</option>
                @endforeach   

            </select>           
            <label for="calificacion">calificacion</label>
            <input type="text" name="calificacion">
            <input class="button is-success" type="submit" >
        </form>
    </div>
   
</div>



@endsection

