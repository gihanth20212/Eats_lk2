<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use App\Models\Restaurant;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodItemController extends Controller
{
    use UploadTrait;

    function __construct()
    {
        $this->middleware('permission:fooditem-list|fooditem-create|fooditem-edit|fooditem-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:fooditem-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:fooditem-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:fooditem-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $fooditems = FoodItem::latest()->paginate(5);
        return view('fooditems.index', compact('fooditems'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $owner = Auth::user()->id;
        $restaurant = Restaurant::where('user_id', $owner)->first();
        // dd($restaurant->id);
        return view('fooditems.create', compact('restaurant'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'food_cat' => 'required|max:255',
            'food_name' => 'required|max:255',
            'food_desc' => 'required|max:255',
            'food_price' => 'required',
            'food_image' => 'required|max:255'
        ]);

        // FoodItem::create($request->all());

        $newFood = new FoodItem;

        $newFood->food_cat = $request->input('food_cat');
        $newFood->food_name = $request->input('food_name');
        $newFood->food_desc = $request->input('food_desc');
        $newFood->food_price = $request->input('food_price');

        // Check if a image has been uploaded
        if ($request->has('food_image')) {
            // Get image file
            $image = $request->file('food_image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug(Auth::user()->name) . '_' . time();
            // Define folder path
            $folder = '/food/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set image path in database to filePath
            $newFood->food_image = 'storage' . $filePath;
        }

        $newFood->user_id = Auth::user()->id;
        $newFood->rest_id = (Restaurant::firstWhere('user_id', $newFood->user_id))->id;
        $newFood->save();

        return redirect()->route('restaurant.show', $newFood->rest_id)
            ->with('success', 'Food Item created successfully.');
    }

    public function show(FoodItem $fooditem)
    {
        return view('fooditems.show', compact('fooditem'));
    }

    public function edit(FoodItem $fooditem)
    {
        return view('fooditems.edit', compact('fooditem'));
    }

    public function update(Request $request, FoodItem $fooditem)
    {
        request()->validate([
            'food_cat' => 'required|max:255',
            'food_name' => 'required|max:255',
            'food_desc' => 'required|max:255',
            'food_price' => 'required',
            'food_image' => 'required|max:255'
        ]);

        $fooditem->update($request->all());

        return redirect()->route('fooditems.index')
            ->with('success', 'FoodItem updated successfully');
    }

    public function destroy(FoodItem $fooditem)
    {
        $fooditem->delete();

        return redirect()->route('fooditems.index')
            ->with('success', 'FoodItem deleted successfully');
    }
}
