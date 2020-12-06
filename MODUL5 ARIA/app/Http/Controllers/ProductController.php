<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        $product = product::all();

        return view('product', ['product' => $product]);
    }

    public function add()
    {
        return view('addproduct');
    }
    public function adds(Request $request)
    {

        $product = new product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->Description;
        $product->stock = $request->stock;

        $img = $request->file('img');

        if ($img != null) {
            $names = time() . "_" . $img->getClientOriginalName();
            $upload = 'img_product';
            $img->move($upload, $names);
            $product->img_path = $names;
        }

        $product->save();
        return redirect('/product');
    }

    public function delete($id)
    {
        $delte = product::find($id);
        $delte->delete();

        return redirect('/product');
    }

    public function update($id)
    {

        $product = product::find($id)->first();
        return view('updateproduct', ['product' => $product]);
    }

    public function updates($id, Request $request)
    {

        $product = product::find($id)->first();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->Description;
        $product->stock = $request->stock;
        $img = $request->file('img');

        if ($img != null) {
            $names = time() . "_" . $img->getClientOriginalName();
            $upload = 'img_product';
            $img->move($upload, $names);
            $product->img_path = $names;
        }

        $product->save();
        $product = product::all();

        return view('product', ['product' => $product]);
    }
}
