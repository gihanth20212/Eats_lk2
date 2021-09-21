<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  My Restaurant - {{ $restaurant->rest_name }}
            </h2>
      </x-slot>

      @section('content')

            <a class="btn btn-primary" href="{{ route('restaurant.index') }}">Go Back</a>
            @can('fooditem-create')
                  <a href="{{ route('restaurant.create') }}" class="btn btn-success" role="button">Add FoodItems</a>
            @endcan

            <div class="grid grid-cols-1 xl:grid-cols-5 gap-6 sm:gap-6 py-6">

                  @foreach ($fooditems as $fooditem)

                        <div class="card shadow-sm bg-accent text-accent-content">
                              <figure>
                                    <img src="{{ $fooditem->food_image }}">
                              </figure>
                              <div class="card-body">
                                    <h2 class="card-title">{{ $fooditem->foodt_name }}</h2>
                                    <p class="line-clamp-3">{{ $fooditem->foodt_desc }}</p>
                                    <div class="card-actions">
                                          <a class="btn btn-secondary" href="{{ route('restaurant.show', $fooditem->id) }}">Order Food</a>
                                    </div>
                              </div>
                        </div>

                  @endforeach

            </div>
            {!! $fooditems->links() !!}

      @endsection

</x-app-layout>
