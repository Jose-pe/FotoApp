@extends('layouts.layoutmain')

@section('contenido')


<div class="container">
    <section class="section">
        <h2 class="title is-8 has-text-link"> HOLA {{ Auth::user()->nickname }} SUBE TUS FOTOS</h2>
    
    </section>
    
        <div class="formulario">
        <form enctype="multipart/form-data" action="{{route('foto.store')}}" method="post">
            @csrf
            <div class="field">
                <div class="control">
                <input type="file" class="input is-link" accept="image/*" name="ruta_foto" required>
                </div>    
            </div>  
            <div class="mb-2">              
             
                <textarea placeholder="Algo que decir??" class="textarea is-link" name="descripcion"></textarea>
                
            </div>
            
            <div class="field">
                <div class="select is-link">
                   
                    <select name="id_categoria" class="input" >
                        
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}"> {{$categoria->nombre_categoria}}</option>
                        @endforeach   
        
                    </select>           
                </div>
            </div>
            <div class="field">
                <div class="select is-link">                    
                    <select name="calificacion" class="input">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>            
                </div>
            </div>
           
            <button class="button is-link" type="submit" > Publicar Foto</button>
        </form>
    </div>
</div> 
</div>



@endsection

