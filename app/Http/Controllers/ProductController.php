<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            'image' => $this->upload_file($request),
        ]);

      if ($product) {
        return view('home');
      }
      return view('create_product');
    }

    protected function upload_file($request){
        $image = $request->file('image');
        if ($image) {
            $fileName = uniqid().'.'.$image->getClientOriginalExtension();
            
            Storage::disk('public')->put($fileName, file_get_contents($image));
            return $fileName;
        }
        return null;
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
