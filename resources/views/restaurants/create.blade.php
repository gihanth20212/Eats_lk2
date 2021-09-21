<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Add New Restaurant') }}
            </h2>
      </x-slot>

      @section('content')

            <div class="md:grid md:grid-cols-2 md:gap-6">

                  <div class="mt-5 md:mt-0 md:col-span-1">

                        <div class="shadow sm:rounded-md sm:overflow-hidden px-4 py-5 sm:p-6 bg-white">

                              <form action="{{ route('restaurant.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Import Restaurant Form --}}
                                    @include('restaurants.partials.restform')

                              </form>

                        </div>

                  </div>

                  <!-- Validation Errors -->
                  <x-auth-validation-errors class="mb-4" :errors="$errors" />

            </div>

      @endsection

</x-app-layout>
