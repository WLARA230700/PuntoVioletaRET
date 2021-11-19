<?php

namespace App\Http\Controllers;

use App\Models\Derecho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Validator;

class DerechosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_agregar_derecho');
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

            $data = $request -> all();
            $file = $request -> file('archivo');

            $data['id_admin'] = 1;
            $timestamps = date('Y-m-d H:i:s');

            $filename = 'derecho-'.$data['tipo_derecho'].time().'.'.$file -> getClientOriginalExtension();
            $data['archivo'] = $filename;

            $path = $file -> storeAs('public/derechos', $filename);

            DB::table("derechos")->insert([
                'tipo_derecho' => $data['tipo_derecho'],
                'titulo' => $data['titulo'],
                'descripcion' => $data['descripcion'],
                'archivo' => $data['archivo'],
                'id_admin' => $data['id_admin'],
                'created_at' => $timestamps,
                'updated_at' => $timestamps
            ]);

            return redirect("dashboard");

            
        }else{
            return redirect("addRight")->with('messageError', 'Rellene todos los campos');
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Derecho  $derecho
     * @return \Illuminate\Http\Response
     */
    public function show(Derecho $derecho)
    {
        //
    }

    public function showDerechos(){
        $derechos = DB::select('SELECT * FROM derechos ORDER BY created_at DESC');
        $isDerechos = true;
        return view('admin.admin_dashboard', compact('derechos', 'isDerechos'));
    }

    public function showDerechosUser($tipo){
        $derechos = DB::select('SELECT * FROM derechos WHERE tipo_derecho = "'.$tipo.'" ORDER BY created_at DESC');
        return view('derechos', compact('derechos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Derecho  $derecho
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $derecho = DB::select('SELECT * FROM derechos WHERE id = '.$id);
        return view('admin.admin_modificar_derecho', compact('derecho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Derecho  $derecho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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
            $data = $request -> all();
            $file = $request -> file('archivo');

            $derecho = DB::select('SELECT * FROM derechos WHERE id = '.$data['id']);

            $data['id_admin'] = 1;
            $timestamps = date('Y-m-d H:i:s');

            if ($file != null) {

                $data['archivo'] = $derecho[0]->archivo;

                $path = $file->storeAs('public/derechos', $data['archivo']);

                DB::table('derechos')->where('id', $data['id'])->update([
                    'tipo_derecho' => $data['tipo_derecho'],
                    'titulo' => $data['titulo'],
                    'descripcion' => $data['descripcion'],
                    'archivo' => $data['archivo'],
                    'id_admin' => $data['id_admin'],
                    'updated_at' => $timestamps
                ]);


            }else{

                DB::table('derechos')->where('id', $data['id'])->update([
                    'tipo_derecho' => $data['tipo_derecho'],
                    'titulo' => $data['titulo'],
                    'descripcion' => $data['descripcion'],
                    'id_admin' => $data['id_admin'],
                    'updated_at' => $timestamps
                ]);
            }

            return redirect("dashboard");
        }else{
            return redirect("modifyRight/".$request['id'])->with('messageError', 'Rellene el título y la descripción');
        }
    }

    public function descargarDerecho($file){
        $pathToFile = public_path().'\storage\derechos\\'.$file;
        return response()->download($pathToFile);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Derecho  $derecho
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
        $filename = DB::select('SELECT * FROM derechos WHERE id = '.$id);

        $pathToFile = '\storage\derechos\\'.$filename[0]->archivo;
        
        if(file_exists(public_path($pathToFile))){
            unlink(public_path($pathToFile));
        }

        DB::table('derechos')->whereId($id)->delete();

        return redirect('dashboard');
    }
}
