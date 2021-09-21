<x-app-layout>
      @section('content')

            {{-- Details Card --}}
            <div class="row-span-3 col-span-2 card shadow-lg bg-base-100 w-400">
                  <div class="card-body">
                        <h2 class="my-4 text-4xl font-bold card-title">Update Your Profile</h2>
                        <div class="mb-4 space-x-2 card-actions">
                              <div class="badge badge-ghost">Name</div>
                              <div class="badge badge-ghost">Password</div>
                              <div class="badge badge-ghost">Etc</div>
                        </div>
                        {{-- Profile Update Form --}}
                        <div class="form-control">
                              <label class="label">
                                    <span class="label-text">Name</span>
                              </label>
                              <input type="text" placeholder="Name" class="input input-primary input-bordered">
                        </div>
                        <div class="form-control">
                              <label class="label">
                                    <span class="label-text">New Password</span>
                              </label>
                              <input type="text" placeholder="Password" class="input input-secondary input-bordered">
                        </div>
                        <div class="form-control">
                              <label class="label">
                                    <span class="label-text">Confirm Password</span>
                              </label>
                              <input type="text" placeholder="Password" class="input input-accent input-bordered">
                        </div>

                        <div class="justify-end space-x-2 card-actions">
                              <button class="btn btn-primary">Update</button>
                              <button class="btn">Cancel</button>
                        </div>
                  </div>
            </div>

            <div class="card shadow-lg compact side bg-base-100">
                  <div class="flex-row items-center space-x-4 card-body">
                        <div>
                              <div class="avatar">
                                    <div class="rounded-full w-14 h-14 shadow"><img src="https://i.pravatar.cc/500?img=32"></div>
                              </div>
                        </div>
                        <div>
                              <h2 class="card-title">{{ Auth::user()->name }}</h2>
                              <p class="text-base-content text-opacity-40">Accounts Agent</p>
                        </div>
                  </div>
            </div>

            <div class="card shadow-lg compact side bg-base-100">
                  <div class="flex-row items-center space-x-4 card-body">
                        <div class="flex-1">
                              <h2 class="card-title font-bold text-info">4,600</h2>
                              <p class="text-base-content font-bold text-opacity-40">Orders</p>
                        </div>
                        <div class="flex space-x-2 flex-0">
                              <button class="btn btn-sm btn-square">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                              </button>
                        </div>
                  </div>
            </div>

            <div class="card shadow-lg compact side bg-base-100">
                  <div class="flex-row items-center space-x-4 card-body">
                        <div class="flex-1">
                              <h2 class="card-title font-bold text-info">4,600</h2>
                              <p class="text-base-content font-bold  text-opacity-40">Member Since</p>
                        </div>
                        <div class="flex space-x-2 flex-0">
                              <button class="btn btn-sm btn-square">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                              </button>
                        </div>
                  </div>
            </div>

      @endsection

</x-app-layout>
