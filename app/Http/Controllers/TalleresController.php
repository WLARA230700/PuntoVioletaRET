<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TalleresController extends Controller
{
    //

    public function showTalleres(){
        $talleres = DB::select('SELECT * FROM table_talleres ORDER BY created_at DESC');
        $isTaller = true;
        return view('admin.admin_dashboard', compact('talleres', 'isTaller'));
    }
}
