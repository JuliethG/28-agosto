<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        return view('products.index',compact('products'));
    }

   public function create()
   {
       return view ('products.create');
   }

   public function show($id)
   {
     $products = Product::find($id);
     return view('products.show',compact('products'));
   }

   public function store(Request $request)
   {
       $products = Product::create([
           'name'=>$request->input('name'),
           'description'=>$request->input('description'),
           'price'=>$request->input('price'),
           'image'=>$request->input('image'),
           'company_id'=>$request->input('company_id')
       ]);
       return redirect('products');
   }

  public function destroy($id)
  {
      $products = Product::find($id)->delete();
      return redirect('products');
  }

  public function edit($id)
  {
      $products = Product::find($id);
      return view('products.edit',compact('products'));
  }

  public function update(Request $request, $id)
  {
      $products = Product::find($id)->update([
          'name'=>$request->input('name'),
          'description'=>$request->input('description'),
          'price'=>$request->input('price'),
          'image'=>$request->input('image'),
          'company_id'=>$request->input('company_id')
      ]);
      Return redirect('products');
  }
}
