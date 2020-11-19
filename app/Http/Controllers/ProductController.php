<?php

namespace App\Http\Controllers;

use App\Stationary;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct(){
        return view('addStationary');
    }

    public function storeProduct(Request $request){
        $request->validate([
            'name' => 'required|min:5|unique:stationaries|',
            'stock' => 'required|numeric|gt:0',
            'price' => 'required|numeric|gt:5000',
            'description' => 'required|min:10'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = random_int(1,100) . '.' . $file->getClientOriginalExtension();
            $file->move('assets/', $filename);
            Stationary::create([
                'name'=>$request->name, 
                'type'=>$request->type, 
                'stock'=>$request->stock, 
                'price'=>$request->price, 
                'description'=>$request->description,
                'image' =>$filename
            ]);
        }
    return view('/addStationary');
    }
}
