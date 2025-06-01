<?php

namespace App\Http\Controllers;
   use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{

public function index()
{
    $cartItems = Auth::user()->cart()->with('product')->get();
    return view('cart.index', compact('cartItems'));
}

public function add(Product $product)
{
    $cartItem = Cart::where('user_id', Auth::id())
        ->where('product_id', $product->id)
        ->first();

    if ($cartItem) {
        $cartItem->increment('quantity');
    } else {
        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'quantity' => 1
        ]);
    }

    return back()->with('success', 'تمت إضافة المنتج إلى السلة');
}

public function remove($id)
{
    $item = Cart::findOrFail($id);
    if ($item->user_id == Auth::id()) {
        $item->delete();
    }

    return back()->with('success', 'تمت إزالة المنتج من السلة');
}

}
