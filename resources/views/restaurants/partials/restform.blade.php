<div>
      <div class="grid grid-cols-6 gap-6">
            {{-- Restaurant Name --}}
            <div class="col-span-6 sm:col-span-3">
                  <label for="rest_name" class="block text-sm font-medium text-gray-700">Restaurant Name</label>
                  <input type="text" name="rest_name" id="rest_name"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            {{-- Restaurant Type --}}
            <div class="col-span-6 sm:col-span-3">
                  <label for="rest_category" class="block text-sm font-medium text-gray-700">Restaurant Category</label>
                  <input type="text" name="rest_category" id="rest_category"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            {{-- Restaurant Address --}}
            <div class="col-span-6">
                  <label for="rest_address" class="block text-sm font-medium text-gray-700">Address</label>
                  <input type="text" name="rest_address" id="rest_address"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            {{-- Restaurant City --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="rest_city" class="block text-sm font-medium text-gray-700">City</label>
                  <input type="text" name="rest_city" id="rest_city"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            {{-- Restaurant Charge --}}
            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="rest_charge" class="block text-sm font-medium text-gray-700">Delivery Charge</label>
                  <input type="text" name="rest_charge" id="rest_charge"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

      </div>
</div>

{{-- Restaurant Description --}}
<div class="mt-6">
      <label for="rest_desc" class="block text-sm font-medium text-gray-700">
            About
      </label>
      <div class="mt-1">
            <textarea id="rest_desc" name="rest_desc" rows="3"
                  class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                  placeholder="This is the best seafood restaurant around colombo area."></textarea>
      </div>
      <p class="mt-2 text-sm text-gray-500">
            Brief description for your restaurant. URLs are hyperlinked.
      </p>

</div>

{{-- Restaurant Website --}}
<div class="col-span-3 sm:col-span-2 mt-4">
      <label for="rest_web" class="block text-sm font-medium text-gray-700">
            Website
      </label>
      <div class="mt-1 flex rounded-md shadow-sm">
            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                  http://
            </span>
            <input type="text" name="rest_web" id="rest_web"
                  class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                  placeholder="www.example.com">
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
            <input type="file" name="rest_logo" id="rest_logo"
                  class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            </input>
      </div>
</div>

{{-- Restaurant Cover --}}
<div class="mt-6">
      <label class="block text-sm font-medium text-gray-700">
            Cover Photo
      </label>
      <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
            <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                        <label for="rest_cover"
                              class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                              <span>Upload a file</span>
                              <input id="rest_cover" name="rest_cover" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">
                        PNG, JPG, GIF up to 10MB
                  </p>
            </div>
      </div>
</div>

{{-- Form Submit --}}
<div class="px-4 py-3 bg-gray-50 text-right sm:px-6 mt-6 rounded-box">
      <button type="submit"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save
      </button>
</div>
