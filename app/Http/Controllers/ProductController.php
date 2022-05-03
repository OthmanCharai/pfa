<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::get();
        $products=Product::get();
        // dd('ok');
        return view('entreprises.profile.products',[
            'categories'=>$categories,
            'products'=>$products
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
        $request->validate(
            [
                'name'=>'required',
                'description'=>'required',
                'link'=>'required',
                'price'=>'required|numeric',
                'publishing_price'=>'required|numeric',
            ]
        );
        $data=$request->except(['_token','image']);
        if($request->hasFile('image')){
            // dd('$yes');
            $path=$request->file('image')->store('images');
            $data['image']=$path;
        }
        $data['user_id']=Auth::user()->id;
        Product::create($data);
        return redirect()->back();
        // dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $request->validate(
            [
                'name'=>'required',
                'description'=>'required',
                'link'=>'required',
                'price'=>'required|numeric',
                'publishing_price'=>'required|numeric',
            ]
        );
        $product=Product::find($id);
        $data=$request->only(['name','description','link','price','publishing_price']);
        if($request->hasFile('image')){
            // dd('$yes');
            Storage::delete($product->image);
            $path=$request->file('image')->store('images');
            $data['image']=$path;
        }
        $data['user_id']=Auth::user()->id;
        $product->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        Storage::delete($product->image);
        $product->delete();
        return redirect()->back();
    }
}
