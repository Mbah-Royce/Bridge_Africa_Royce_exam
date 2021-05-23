<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product; 


class ProductController extends Controller
{       
    public function __construct(){
        $this->middleware('auth')->except('index');
        $this->middleware('auth');
    }
    
    public function create(){
        return view('create');
    }
    
    public function store(ProductRequest $request){

        Product::uploadAvatar($request->image);

         $name =$request['name'];
         $price =$request['price'];
         $description =$request['description'];
         $avatar = $request->image->getClientOriginalName();
         $discount =$request['discount'];
         $published =$request['published'];
         $instock =$request['instock'];
         $inservice =$request['inservice'];
         $condition =$request['condition'];
         $user_id =$request['user_id'];

         $prod = new Product();

         $prod->name=$name;
         $prod->price=$price;
         $prod->description=$description;
         $prod->avatar=$avatar;
         $prod->discount=$discount;
         $prod->published=$published;
         $prod->instock=$instock;
         $prod->inservice=$inservice;
         $prod->condition=$condition;
         $prod->user_id=$user_id;

         auth()->user()->product()->save($prod);
        

        return redirect()->back()->with('message','Product successfully created');
    }

    public function show(){
     $products = Product::all();
     return view('home',compact('products'));

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->back()->with('message','Todo Deleted Successfully');
    }

    public function edit(Product $product){
       
        return view('edit',compact('product'));
    }

    public function update(ProductRequest $request, Product $product){
       if($request->hasFile('image')){
        $filename = $request->image->getClientOriginalName();
         $product->update(['avatar'=>$filename]);
    }
         $product->update(['name'=> $request->name]);
         $product->update(['price'=> $request->price]);
         $product->update(['description'=> $request->description]);
         $product->update(['inservice'=> $request->inservice]);
         $product->update(['instock'=> $request->instock]);
         $product->update(['discount'=> $request->discount]);
         $product->update(['published'=> $request->published]);
        return redirect(route('product.edit',$product->id))->with('message','Updated Succesfully');
    }
}
