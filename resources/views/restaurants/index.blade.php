<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Restaurants') }}
            </h2>
      </x-slot>

      @section('content')

            <div class="grid grid-cols-1 xl:grid-cols-5 gap-6 sm:gap-6 mb-4">

                  @foreach ($restaurants as $restaurant)

                        <div class="card shadow-sm bg-accent text-accent-content">
                              <figure>
                                    <img src="{{ asset($restaurant->rest_cover) }}">
                              </figure>
                              <div class="card-body">
                                    <h2 class="card-title">{{ $restaurant->rest_name }}</h2>
                                    <p class="line-clamp-3">{{ $restaurant->rest_desc }}</p>
                                    <div class="card-actions">
                                          <a class="btn btn-secondary" href="{{ route('restaurant.show', $restaurant->id) }}">Order Food</a>
                                    </div>
                              </div>
                        </div>

                  @endforeach

            </div>
            {!! $restaurants->links() !!}

      @endsection

</x-app-layout>
