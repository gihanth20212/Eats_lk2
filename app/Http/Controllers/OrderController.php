<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function cart()
    {
        return view('checkout');
    }

    public function addToCart($id)
    {
        $fooditem = FoodItem::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "food_name" => $fooditem->food_name,
                "quantity" => 1,
                "food_price" => $fooditem->food_price,
                "food_image" => $fooditem->food_image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'FoodItem added to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'FoodItem removed successfully');
        }
    }
}
