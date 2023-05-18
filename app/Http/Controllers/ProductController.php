<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    
    public function create()
    {
        return view('create_product');
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $this->upload_file($request, $request->image, $request->name),
        ]);

      if ($product) {
        return view('home');
      }
      return view('create_product');
    }

    protected function upload_file($request, $file, $fileName){
        if(!$request->$file) return null;
        $fileName .= '_'.$file.'_'.time().'.'.$request->file($file)->extension();  

        $request->file($file)->move(public_path('uploads'), $fileName);

        return $fileName;

    }
    
    public function update(Request $request, $id)
    {
        $product = Product::where('id', $id)->update([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $this->upload_file($request, $request->image, $request->name),
        ]);

      if ($product) {
        return view('home');
      }
      return view('create_product');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $products= Product::paginate(100);
        $product->delete();
        return view('home', compact('products'));
    }
}
