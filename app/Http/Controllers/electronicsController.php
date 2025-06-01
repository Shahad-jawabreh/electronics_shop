<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
class electronicsController extends Controller
{
    public function welcome()
    {
        return view('electronics.welcome');
    }
    public function index()
    {
        $products = Product::latest()->get(); // جلب كل المنتجات الأحدث أولًا
        return view('electronics.index', ['products' => $products]);
    }
    public function idea()
    {
        return view('electronics.idea');
    }
    public function analysis()
    {
        return view('electronics.analysis');
    }
    public function create()
    {
        return view('electronics.create');
    }
    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile', ['user' => $user]);
    }
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('auth.login');
        }
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
            'condition' => 'required|in:جديد,مستعمل',
            'image' => 'required|image|max:2048',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->condition = $request->condition;
        $imagePath = $request->file('image')->store('products', 'public');
        $product->image = $imagePath;
        $imagePath = $request->file('image')->store('products', 'public');
        $product->image = $imagePath;

        $product->user_id = auth()->id();
        $product->save();

        return to_route('electronics.index');
    }


    public function show($id)
    {
        $electronic = Product::findOrFail($id);
        return view('electronics.show', compact('electronic'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%{$query}%")->get();
        return view('electronics.index', compact('products'));
    }

    public function filter(Request $request)
    {
        $condition = $request->input('condition');

        if ($condition) {
            $products = Product::where('condition', $condition)->get();
        } else {
            $products = Product::all();
        }

        return view('electronics.index', compact('products'));
    }

}
