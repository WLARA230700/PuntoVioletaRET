<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_agregar_imagen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'tipo_imagen' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'archivo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request -> all();
        $file = $request -> file('archivo');

        $data['id_admin'] = 1;
        $timestamps = date('Y-m-d H:i:s');

        $filename = 'imagen-'.$data['tipo_imagen'].time().'.'.$file -> getClientOriginalExtension();
        $data['archivo'] = $filename;

        $path = $file -> storeAs('public/imagenes', $filename);

        DB::table("imagenes")->insert([
            'tipo_imagen' => $data['tipo_imagen'],
            'titulo' => $data['titulo'],
            'descripcion' => $data['descripcion'],
            'archivo' => $data['archivo'],
            'id_admin' => $data['id_admin'],
            'created_at' => $timestamps,
            'updated_at' => $timestamps
        ]);

        return redirect("dashboard");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function show(Imagen $imagen)
    {
        //
    }

    public function showFotografias(){
        $fotografias = DB::select('SELECT * FROM imagenes WHERE tipo_imagen = "Fotografía" ORDER BY created_at DESC');
        return view('admin.admin_dashboard', compact('fotografias'));
    }

    public function showInfografias(){
        $infografias = DB::select('SELECT * FROM imagenes WHERE tipo_imagen = "Infografía" ORDER BY created_at DESC');
        return view('admin.admin_dashboard', compact('infografias'));
    }

    public function showImagenesUser($tipo){
        $imagenes = DB::select('SELECT * FROM imagenes WHERE tipo_imagen = "'.$tipo.'" ORDER BY created_at DESC');
        return view('galeria', compact('imagenes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imagen = DB::select('SELECT * FROM imagenes WHERE id = '.$id);
        return view('admin.admin_modificar_imagen', compact('imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imagen $imagen)
    {
        $request -> validate([
            'tipo_imagen' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'archivo' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request -> all();
        $file = $request -> file('archivo');

        $imagen = DB::select('SELECT * FROM imagenes WHERE id = '.$data['id']);

        $data['id_admin'] = 1;
        $timestamps = date('Y-m-d H:i:s');

        if ($file != null) {

            $data['archivo'] = $imagen[0]->archivo;

            $path = $file->storeAs('public/imagenes', $data['archivo']);

            DB::table('imagenes')->where('id', $data['id'])->update([
                'tipo_imagen' => $data['tipo_imagen'],
                'titulo' => $data['titulo'],
                'descripcion' => $data['descripcion'],
                'archivo' => $data['archivo'],
                'id_admin' => $data['id_admin'],
                'updated_at' => $timestamps
            ]);


        }else{

            DB::table('imagenes')->where('id', $data['id'])->update([
                'tipo_imagen' => $data['tipo_imagen'],
                'titulo' => $data['titulo'],
                'descripcion' => $data['descripcion'],
                'id_admin' => $data['id_admin'],
                'updated_at' => $timestamps
            ]);
        }

        return redirect("dashboard");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('imagenes')->whereId($id)->delete();

        return redirect('dashboard');
    }
}
