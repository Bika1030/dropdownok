<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function index()
    {
        return view('frontend.product.cart');
    }

    public function store(Request $request , $id)
    {
        $validatedData = $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($id);

        if($product)
        {
           Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'quantity' => $validatedData['quantity']
           ]);

           return redirect()->back()->with('success', "Product Added to Cart Successfully");
        }
        else
        {
            return redirect()->back()->with('error' ,'Something Went Wrong!');
        }

    }
}
