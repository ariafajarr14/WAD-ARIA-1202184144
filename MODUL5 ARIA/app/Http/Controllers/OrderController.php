<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\product;

class OrderController extends Controller
{
    public function index()
    {
        $order = order::all();
        $product = product::all();

        return view('order', ['order' => $order], ['product' => $product]);
    }

    public function detail($id)
    {
        $product = product::find($id);

        return view('orderdetail', ['product' => $product]);
    }

    public function addorder($id, Request $request)
    {
        $product = product::find($id);
        $order = new order;


        $order->product_id = $id;
        $order->buyer_name = $request->name;
        $order->buyer_contact = $request->contact;

        $order->amount = $request->quantity * $product->price;

        $order->save();


        $new = $product->stock;
        $x = $request->quantity;
        $stock = $new - $x;

        $product->stock = $stock;
        $product->save();

        return redirect('/product');
    }

    public function history()
    {
        $order = order::all();
        return view('history', ['order' => $order]);
    }
}
