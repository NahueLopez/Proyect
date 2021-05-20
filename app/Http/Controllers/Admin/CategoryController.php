<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //Esto es uan seguridad para que no se pueda ingresar  si no se esa logeado.
    }
    public function index()
    {    
        $categories = Category::all();
        $offices = Office::all();
       
        $catxoffi = Category::with('offices')->get();

          foreach ($catxoffi->flatMap->offices as $pepe) {
             $pepe->catoffi;
            
         }   
         return view('admin.category.index',[
                            'categories'=> $categories,
                             'offices'=> $offices,
                            /*  'catxoffi'=> $catxoffi */
        ]); 
    }   

   public function store(Request $request){
        
    
        $newCategory = Category::create($request->all());

        if($request->office_id){
            $newCategory->offices()->attach($request->office_id);

        }
            return redirect()->back();
        /* $newCategory->name = $request->name;
        $newCategory->office_id = $request->office_id; */
        
        /* $newCategory->save(); */   
    }
 
     public function update(Request $request,  $CategoryId)
    {
           $Category = Category::find($CategoryId);

           $Category->name = $request->name;
           
           if($request->office_id){
            $Category->offices()->attach($request->office_id);
            
           }
           $Category->save();
           return redirect()->back();
    }

    public function delete(Request $request,  $CategoryId)
    {
            
           $category = Category::find($CategoryId);

            $category->delete();

            
           return redirect()->back();
    }
    
    public function catxoffi($officeId)
    {   
       
          $category = Category::all();
            
            $offi = Office::find($officeId)->with('categories')->get();

                foreach ($offi->flatMap->categories as $cate) {
                      echo     $cate->categor->category_id;
                } 
    }                                               

}
