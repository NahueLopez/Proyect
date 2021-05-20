<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\User;
use Illuminate\Http\Request;


class OfficeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //Esto es uan seguridad para que no se pueda ingresar  si no se esa logeado.
    }
    public function index()
    {
        $user = User::all();
        $offices = Office::where('user_id', auth()->user()->id)->paginate();

            return view('admin.office.index',compact('offices'));    
        
    }

    public function store(Request $request,User $user){
        
        $newOffice = new Office();
        

        $newOffice->name = $request->name;
        $newOffice->adress = $request->adress;
        $newOffice->phone = $request->phone;
        $newOffice->user_id = auth()->user()->id;
        $newOffice->save();

        return redirect()->back();
        /* echo " La sucursal $newOffice->name Fue creada con exito"; */
    }

    public function update(Request $request,  $officeId)
    {
           $office = Office::find($officeId);

           $office->name = $request->name;
           $office->adress = $request->adress;
           $office->phone = $request->phone;
            $office->save();

           return redirect()->back();
    }

    public function delete(Request $request,  $officeId)
    {
            
           $office = Office::find($officeId);

            $office->delete();

            
           return redirect()->back();
    }
}
