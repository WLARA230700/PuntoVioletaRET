<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //
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
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

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
