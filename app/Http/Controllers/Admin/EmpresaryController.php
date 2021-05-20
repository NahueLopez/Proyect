<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresary;

class EmpresaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //Esto es uan seguridad para que no se pueda ingresar  si no se esa logeado.
    }

    public function index(){

        $empresary = Empresary::all();
        return view('admin.empresary.index',compact('empresary'));
    }
}
