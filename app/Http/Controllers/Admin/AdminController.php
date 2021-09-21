<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function restmanage(Request $request)
    {
        $restaurants = Restaurant::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.rest.manage')->with('restaurants', $restaurants);
    }

    public function foodmanage(Request $request)
    {
        $fooditems = FoodItem::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.food.manage')->with('fooditems', $fooditems);
    }
}
