<?php

namespace App\Http\Controllers\foto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Categoria;
use  App\Models\Foto;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;
use \Storage;


class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fotos = Foto::all();
        return view('inicio', compact('fotos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::all();

        return view('fotos.create', compact('categorias'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

        $path = Storage::disk('public')->putFile('imagenes', $request->file('ruta_foto'));

        $input['id_user'] = Auth::user()->id;
        $input['ruta_foto'] = str_ireplace('imagenes/','',$path);
        

        Foto::create($input);
        return redirect()->route('home')->with('status','Foto Publicada');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $foto = Foto::find($id);
        $categorias = Categoria::all();
        return view('fotos.edit', compact('foto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        $foto = Foto::find($id);
        $foto->update($input);
        return redirect()->route('home')->with('status', 'Se ha modificado la foto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fotos = Foto::find($id);
        $fotos->delete();
        return redirect()->route('home')->with('status', 'Foto Eliminada');
    }

    public function perfilpublico($id_user)
    {
        $fotos= Foto::all()->where('id_user', $id_user); 
        return view('perfilpublico', compact('fotos'));
    }
}
