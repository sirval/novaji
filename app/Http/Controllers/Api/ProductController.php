<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(100);
        
        return response()->json([
            'response' => true,
            'status'  => 200,
            'data'   => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            if($this->authorized() === false)
            {
                return response()->json([
                    'response' => false,
                    'status'  => 403,
                    'message'   => "Access Denied"
                ]);
            }

            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
        
            if ($validator->fails()) {
                return response()->json([
                    'response' => false,
                    'status'  => 409,
                    'message'   => $validator
                ]);
                
            }
            // dd(Auth::user()->id);
            $product = new Product();
            $product->user_id = Auth::user()->id;
            $product->name = $request['name'];
            $product->price = $request['price'];
            $product->description =  $request['description'];
            $product->image = $this->upload_file($request);
          

            if ($product->save()) {
                return response()->json([
                    'response' => true,
                    'status'  => 200,
                    'message'   => 'Product Created Successfully'
                ]);
            }
            return response()->json([
                'response' => false,
                'status'  => 409,
                'message'   => 'Product could not be created'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'response' => false,
                'status'  => 500,
                'message'   => $th
            ]);
        }
    }

    protected function upload_file($request){
        $image = $request->file(['image']);
        if ($image) {
            $fileName = uniqid().'.'.$image->getClientOriginalExtension();
            
            Storage::disk('public')->put($fileName, file_get_contents($image));
            return $fileName;
        }
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $product = Product::find($id);
          
            return response()->json([
                'response' => true,
                'status'  => 200,
                'data'   => $product
            ]);
        
           
        } catch (\Throwable $th) {
            return response()->json([
                'response' => false,
                'status'  => 500,
                'message'   => $th
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            if($this->authorized() === false)
            {
                return response()->json([
                    'response' => false,
                    'status'  => 403,
                    'message'   => "Access Denied"
                ]);
            }
            $product =  Product::find($id);
            if ($product === null) {
                return response()->json([
                    'response' => false,
                    'status'  => 404,
                    'message'   => 'Product  not found'
                ]);
            }
            if ($request->hasFile('image')) {
                // if ($product !== null) {
                    $this->unlinkImage($product);
                // }
               $image = $this->upload_file($request);
            }else{
                $image = $product->image;
            }
            $product->user_id = Auth::user()->id;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->description =  $request->description;
            $product->image = $image;
          

            if ($product->save()) {
                return response()->json([
                    'response' => true,
                    'status'  => 200,
                    'message'   => 'Product updated Successfully'
                ]);
            }
            return response()->json([
                'response' => false,
                'status'  => 409,
                'message'   => 'Product could not be updated'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'response' => false,
                'status'  => 500,
                'message'   => $th
            ]);
        }
    }

    protected function unlinkImage($product) : void
    {
        Storage::disk('public')->delete($product->image);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            if($this->authorized() === false)
            {
                return response()->json([
                    'response' => false,
                    'status'  => 403,
                    'message'   => "Access Denied"
                ]);
            }
            $product =  Product::find($id);
          
           if ($product !== null ) {
               $this->unlinkImage($product);
               if ($product->delete()) {
                   return response()->json([
                       'response' => true,
                       'status'  => 200,
                       'message'   => 'Product deleted Successfully'
                   ]);
               }else{

                   return response()->json([
                       'response' => false,
                       'status'  => 409,
                       'message'   => 'Product could not be deleted'
                   ]);
               }
               
           }
           return response()->json([
            'response' => false,
            'status'  => 404,
            'message'   => 'Product  not found'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'response' => false,
                'status'  => 500,
                'message'   => $th
            ]);
        }
    }

    private function authorized(): bool
    {
        if (Auth::user()->role_id === "user") {
           return false;
        }
        return true;
    }
}
