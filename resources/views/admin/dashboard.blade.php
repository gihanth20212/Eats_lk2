<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Admin Dashboard') }}
            </h2>
      </x-slot>

      @section('content')

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 sm:gap-6">

                  <div class="card col-span-2 shadow-2xl lg:card-side bg-info text-secondary-content">
                        <div class="card-body">
                              <h1 class="text-2xl">Restaurant Management</h1>
                              <div class="justify-end card-actions">
                                    <a href="{{ route('admin.rest.manage') }}" class="btn btn-outline">
                                          Manage

                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 ml-2 stroke-current">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                          </svg>
                                    </a>
                              </div>
                        </div>
                  </div>
                  <div class="card col-span-2 shadow-2xl lg:card-side bg-info text-secondary-content">
                        <div class="card-body">
                              <h1 class="text-2xl">FoodItems Management</h1>
                              <div class="justify-end card-actions">
                                    <a href="{{ route('admin.food.manage') }}" class="btn btn-outline">
                                          Manage

                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 ml-2 stroke-current">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                          </svg>
                                    </a>
                              </div>
                        </div>
                  </div>
                  <div class="card col-span-2 shadow-2xl lg:card-side bg-info text-secondary-content">
                        <div class="card-body">
                              <h1 class="text-2xl">User Management</h1>
                              <div class="justify-end card-actions">
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline">
                                          Manage
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 ml-2 stroke-current">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                          </svg>
                                    </a>
                              </div>
                        </div>
                  </div>
                  <div class="card col-span-2 shadow-2xl lg:card-side bg-info text-secondary-content">
                        <div class="card-body">
                              <h1 class="text-2xl whitespace-nowrap">Roles Management</h1>
                              <div class="justify-end card-actions">
                                    <a href="{{ route('admin.roles.index') }}" class="btn btn-outline">
                                          Manage

                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 ml-2 stroke-current">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                          </svg>
                                    </a>
                              </div>
                        </div>
                  </div>


            </div>

      @endsection

</x-app-layout>
