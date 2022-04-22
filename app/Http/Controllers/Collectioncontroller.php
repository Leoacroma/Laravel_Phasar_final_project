<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Genres;
use App\Models\Product;

class Collectioncontroller extends Controller
{
    //
    public function category(Request $request){

        $products = (new Product)->newQuery();
        
        $products -> when($request -> sort == 'Price: Low to High', function($query){
            return $query -> orderby('price','asc');
        })-> when($request -> sort == 'Price: High to Low', function($query){
            return $query -> orderby('price','desc');
        })->when($request -> sort == 'All', function($query){
            return  $products = DB::table('products') -> get();
        });

        if ($request -> has('genre') && $request -> genre != 'all'){
            $products -> where('genre_id', Genres::where('name', $request -> genre) -> first()-> id);
        }

        $products = $products -> get();

        return view('project.Sale', [ 'products' => $products]);
    }
    public function cart()
    {
        return view('project.cart');
    }
    public function addToCart($id)
    {
        $products = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $products->name,
                "quantity" => 1,
                "price" => $products->price,
                "image" => $products->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
