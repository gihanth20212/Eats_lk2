<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use App\Models\Restaurant;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{

    use UploadTrait;

    // Restaurant List View
    public function index()
    {
        $restaurants = Restaurant::orderBy('created_at', 'desc')->paginate(5);
        return view('restaurants.index')->with('restaurants', $restaurants);
    }

    public function myrest()
    {
        return view('restaurants.myrest');
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rest_name' => 'required|max:100',
            'rest_category' => 'required|max:100',
            'rest_address' => 'required|max:255',
            'rest_city' => 'required|max:50',
            'rest_charge' => 'required|max:255',
            'rest_desc' => 'required|max:255',
            'rest_web' => 'required|max:255',
            'rest_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rest_cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $newRest = new Restaurant;

        $newRest->rest_name = $request->input('rest_name');
        $newRest->rest_category = $request->input('rest_category');
        $newRest->rest_address = $request->input('rest_address');
        $newRest->rest_city = $request->input('rest_city');
        $newRest->rest_charge = $request->input('rest_charge');
        $newRest->rest_desc = $request->input('rest_desc');
        $newRest->rest_web = $request->input('rest_web');

        // Check if a image has been uploaded
        if ($request->has('rest_logo')) {
            // Get image file
            $image = $request->file('rest_logo');
            // Make a image name based on user name and current timestamp
            $name = Str::slug(Auth::user()->name) . '_' . time();
            // Define folder path
            $folder = '/rest/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set image path in database to filePath
            $newRest->rest_logo = 'storage' . $filePath;
        }

        // Check if a image has been uploaded
        if ($request->has('rest_cover')) {
            // Get image file
            $image = $request->file('rest_cover');
            // Make a image name based on user name and current timestamp
            $name = Str::slug(Auth::user()->name) . '_' . time();
            // Define folder path
            $folder = '/rest/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set image path in database to filePath
            $newRest->rest_cover = 'storage' . $filePath;
        }

        $newRest->user_id = Auth::user()->id;
        $newRest->save();

        $request->session()->flash('success', 'You have successfully added a Restaurant.');

        return redirect(route('restaurant.index'));
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        $fooditems = FoodItem::where('rest_id', $id)->orderBy('created_at', 'desc')->paginate(5);

        return view('restaurants.show', compact('restaurant', 'fooditems'));
    }

    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $restaurants = Restaurant::find($id);
        $restaurants->title = $request->input('title');
        $restaurants->updated_by = Auth::user()->id;
        $restaurants->save();

        return redirect()->route('restaurants.index');
    }

    public function destroy($id)
    {
        Restaurant::find($id)->delete();
    }
}
