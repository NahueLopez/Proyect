<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//Esto es uan seguridad para que no se pueda ingresar  si no se esa logeado.
    }
    
    public function index(){
        
        return view('admin.home');
        
    }
}
