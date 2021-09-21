<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Contact Us') }}
            </h2>
      </x-slot>

      @section('content')

            <div class="md:grid md:grid-cols-2 md:gap-6">

                  <div class="mt-5 md:mt-0 md:col-span-1">

                        <div class="shadow sm:rounded-md sm:overflow-hidden px-4 py-5 sm:p-6 bg-white">

                              <form action="#" method="" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                          <div class="grid grid-cols-6 gap-6">
                                                {{-- Contact Name --}}
                                                <div class="col-span-6 sm:col-span-3">
                                                      <label for="contact_name" class="block text-sm font-medium text-gray-700">Name</label>
                                                      <input type="text" name="contact_name" id="contact_name"
                                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                {{-- Contact Email --}}
                                                <div class="col-span-6">
                                                      <label for="contact_email" class="block text-sm font-medium text-gray-700">Email</label>
                                                      <input type="text" name="contact_email" id="contact_email"
                                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                {{-- Contact City --}}
                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                      <label for="contact_city" class="block text-sm font-medium text-gray-700">City</label>
                                                      <input type="text" name="contact_city" id="contact_city"
                                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                {{-- Contact Mobile --}}
                                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                      <label for="contact_charge" class="block text-sm font-medium text-gray-700">Mobile</label>
                                                      <input type="text" name="contact_charge" id="contact_charge"
                                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                          </div>
                                    </div>

                                    {{-- Contact Description --}}
                                    <div class="mt-6">
                                          <label for="contact_desc" class="block text-sm font-medium text-gray-700">
                                                About
                                          </label>
                                          <div class="mt-1">
                                                <textarea id="contact_desc" name="contact_desc" rows="3"
                                                      class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                      placeholder="Type the details"></textarea>
                                          </div>
                                          <p class="mt-2 text-sm text-gray-500">
                                                Brief description for yourself. URLs are hyperlinked.
                                          </p>

                                    </div>

                                    {{-- Form Submit --}}
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 mt-6 rounded-box">
                                          <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Submit
                                          </button>
                                    </div>

                              </form>

                        </div>

                  </div>

                  <!-- Validation Errors -->
                  <x-auth-validation-errors class="mb-4" :errors="$errors" />

            </div>

      @endsection

</x-app-layout>
