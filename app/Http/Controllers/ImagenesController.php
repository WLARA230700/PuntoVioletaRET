<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

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
        $validator = Validator::make([
            'tipo_imagen' => $request['tipo_imagen'],
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'archivo' => $request['archivo']
        ],
        [
            'tipo_imagen' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'archivo' => 'required'
        ]);

        if (!$validator->fails()) {

            $validator = Validator::make([
                'archivo' => $request['archivo']
            ],
            [
                'archivo' => 'image|mimes:jpeg,png,jpg'
            ]);

            if (!$validator->fails()) {
                $validator = Validator::make([
                    'archivo' => $request['archivo']
                ],
                [
                    'archivo' => 'max:2048'
                ]);
    
                if (!$validator->fails()) {
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
            
                }else{
                    return redirect("addImage")->with('messageError', 'Seleccione una imagen menor a 2MB');
                }

            }else{
                return redirect("addImage")->with('messageError', 'Seleccione una imagen PNG o JPG');
            }

            
        }else{
            return redirect("addImage")->with('messageError', 'Rellene todos los campos');
        }

        
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
        $isImagen = true;
        $tipoContenido = "FOTOGRAFIAS";
        return view('admin.admin_dashboard', compact('fotografias', 'tipoContenido'));
    }

    public function showInfografias(){
        $infografias = DB::select('SELECT * FROM imagenes WHERE tipo_imagen = "Infografía" ORDER BY created_at DESC');
        $isImagen = true;
        $tipoContenido = "INFOGRAFIAS";
        return view('admin.admin_dashboard', compact('infografias', 'tipoContenido'));
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
        $validator = Validator::make([
            'tipo_imagen' => $request['tipo_imagen'],
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion']
        ],
        [
            'tipo_imagen' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required'
        ]);

        if (!$validator->fails()) {

            $validator = Validator::make([
                'archivo' => $request['archivo']
            ],
            [
                'archivo' => 'image|mimes:jpeg,png,jpg'
            ]);

            if (!$validator->fails()) {
                $validator = Validator::make([
                    'archivo' => $request['archivo']
                ],
                [
                    'archivo' => 'max:2048'
                ]);
    
                if (!$validator->fails()) {

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

                }else{
                    return redirect("modifyImage/".$request['id'])->with('messageError', 'La imagen debe ser menor a 2MB');
                }
            }else{
                return redirect("modifyImage/".$request['id'])->with('messageError', 'La imagen debe ser formato PNG o JPG');
            }
        }else{
            return redirect("modifyImage/".$request['id'])->with('messageError', 'Rellene el título y la descripción');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filename = DB::select('SELECT * FROM imagenes WHERE id = '.$id);

        $pathToFile = '\storage\imagenes\\'.$filename[0]->archivo;
        
        if(file_exists(public_path($pathToFile))){
            unlink(public_path($pathToFile));
        }

        DB::table('imagenes')->whereId($id)->delete();

        return redirect('dashboard');
    }
}
