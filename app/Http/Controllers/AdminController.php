<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_login');
    }

    public function indexAddUser()
    {
        return view('admin.admin_agregar_user');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email'=> ['required', 'email'],
            'password'=> ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->withSuccess('Log in');
        }

        return redirect('login')->with('messageError', 'Correo y/o contraseña inválidos');
    }

    public function dashboard(){
        if(Auth::check()){
            $derechos = DB::select('SELECT * FROM derechos ORDER BY created_at DESC');
            return view('admin.admin_dashboard', compact('derechos'));
        }
        return redirect('login');
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
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
        ],
        [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!$validator->fails()) {

            $data = $request -> all();
            $timestamps = date('Y-m-d H:i:s');

            $pass = Hash::make($data['password']);

            $userVerificationEmail = DB::select('SELECT * FROM users WHERE email = "'.$data['email'].'"');

            if(!isset($userVerificationEmail[0])){
                DB::table("users")->insert([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => $pass,
                    'email_verified_at' =>$timestamps,
                    'created_at' => $timestamps,
                    'updated_at' => $timestamps
                ]);
    
                return redirect("dashboard");
            }else{
                return redirect("addUser")->with('messageError', 'Digite otro correo electrónico');
            }           

            
        }else{
            return redirect("addUser")->with('messageError', 'Rellene todos los campos');
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    public function showUsers(){
        $users = DB::select('SELECT * FROM users WHERE id<>1 ORDER BY created_at DESC');
        $isUser = true;
        $tipoContenido = "USERS";
        if(Auth::id() == 1){
            return view('admin.admin_dashboard', compact('users', 'tipoContenido'));
        }else{
            return view('admin.admin_dashboard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->whereId($id)->delete();

        return redirect('dashboard');
    }

    public function signOut(){
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
