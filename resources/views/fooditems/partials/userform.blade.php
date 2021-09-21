{{-- <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                  <strong>Name:</strong>
                  <input type="text" name="food_name" class="form-control" placeholder="Name">
            </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                  <strong>Detail:</strong>
                  <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</div> --}}

@csrf
<div>
      <div class="grid grid-cols-6 gap-6">
            {{-- Food Name --}}
            <div class="col-span-6 sm:col-span-3">
                  <label for="food_name" class="block text-sm font-medium text-gray-700">Food Name</label>
                  <input type="text" name="food_name" id="food_name" value="{{ old('name') }} @isset($fooditem){{ $fooditem->food_name }} @endisset"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            {{-- Food Category --}}
            <div class="col-span-6 sm:col-span-3">
                  <label for="food_cat" class="block text-sm font-medium text-gray-700">Food Category</label>
                  <input type="text" name="food_cat" id="food_cat" value="{{ old('food_cat') }} @isset($fooditem){{ $fooditem->food_cat }} @endisset"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            {{-- Food Description --}}
            <div class="col-span-6 sm:col-span-3">
                  <label for="food_desc" class="block text-sm font-medium text-gray-700">Food Description</label>
                  <input type="text" name="food_desc" id="food_desc" value="{{ old('food_desc') }} @isset($fooditem){{ $fooditem->food_desc }} @endisset"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            {{-- Food Price --}}
            <div class="col-span-6 sm:col-span-3">
                  <label for="food_price" class="block text-sm font-medium text-gray-700">Food Price</label>
                  <input type="text" name="food_price" id="food_price" value="{{ old('food_price') }} @isset($fooditem){{ $fooditem->food_price }} @endisset"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

      </div>
</div>

{{-- Restaurant Logo --}}
<div class="mt-6">
      <label class="block text-sm font-medium text-gray-700">
            Logo
      </label>
      <div class="mt-1 flex items-center">
            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                  <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
            </span>
            <input type="file" name="food_image" id="food_image"
                  class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            </input>
      </div>
</div>

{{-- Form Submit --}}
<div class="px-4 py-3 bg-gray-50 text-right sm:px-6 mt-6 rounded-box">
      <button type="submit"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

            @isset($create)
                  Create FoodItem
            @else
                  Edit FoodItem
            @endisset

      </button>
</div>
