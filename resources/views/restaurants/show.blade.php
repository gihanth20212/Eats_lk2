<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ $restaurant->rest_name }}
            </h2>
      </x-slot>

      @section('pagecdns')
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      @endsection

      @section('content')

            <a class="btn btn-primary" href="{{ route('restaurant.index') }}">Go Back</a>
            @can('fooditem-create')
                  <a href="{{ route('fooditems.create', $restaurant->id) }}" class="btn btn-success" role="button">Add FoodItems</a>
            @endcan

            <div class="grid grid-cols-1 xl:grid-cols-5 gap-6 sm:gap-6 py-6">

                  @foreach ($fooditems as $fooditem)

                        <div class="card shadow-sm bg-accent text-accent-content">
                              <figure>
                                    <img src="{{ asset($fooditem->food_image) }}">
                              </figure>
                              <div class="card-body">
                                    <h2 class="card-title">{{ $fooditem->food_name }}</h2>
                                    <p class="line-clamp-3">{{ $fooditem->foodt_desc }}</p>
                                    <div class="card-actions">
                                          <a class="btn btn-secondary" href="{{ route('add.to.cart', $fooditem->id) }}">Add to Cart</a>
                                    </div>
                              </div>
                        </div>

                  @endforeach

            </div>
            {!! $fooditems->links() !!}

      @endsection

      @section('scripts')
            <script type="text/javascript">
                  $(".update-cart").change(function(e) {
                        e.preventDefault();

                        var ele = $(this);

                        $.ajax({
                              url: '{{ route('update.cart') }}',
                              method: "patch",
                              data: {
                                    _token: '{{ csrf_token() }}',
                                    id: ele.parents("tr").attr("data-id"),
                                    quantity: ele.parents("tr").find(".quantity").val()
                              },
                              success: function(response) {
                                    window.location.reload();
                              }
                        });
                  });

                  $(".remove-from-cart").click(function(e) {
                        e.preventDefault();

                        var ele = $(this);

                        if (confirm("Are you sure want to remove?")) {
                              $.ajax({
                                    url: '{{ route('remove.from.cart') }}',
                                    method: "DELETE",
                                    data: {
                                          _token: '{{ csrf_token() }}',
                                          id: ele.parents("tr").attr("data-id")
                                    },
                                    success: function(response) {
                                          window.location.reload();
                                    }
                              });
                        }
                  });
            </script>
      @endsection

</x-app-layout>
