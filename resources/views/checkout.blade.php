<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Shopping Cart') }}
            </h2>
      </x-slot>

      @section('pagecdns')
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      @endsection

      @section('content')

            <a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Go Back</a>
            <a href="{{ route('admin.users.create') }}" class="btn btn-success" role="button">Create New User</a>

            <div class="overflow-x-auto mt-6 ">

                  <table class="min-w-full leading-normal rounded-lg">
                        <thead>
                              <tr class=" rounded-lg">
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          Food
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          Price
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          Quantity
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          Sub Total
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    </th>
                              </tr>
                        </thead>
                        <tbody>
                              @php $total = 0 @endphp
                              @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                          @php $total += $details['food_price'] * $details['quantity'] @endphp
                                          <tr data-id="{{ $id }}">
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                  <img class="w-10 h-10 rounded-full" src="{{ $details['food_image'] }}" alt="" />
                                                            </div>
                                                            <div class="ml-3" data-th="Product">
                                                                  <p class="text-gray-900 whitespace-no-wrap">
                                                                        {{ $details['food_name'] }}
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </td>

                                                <td data-th="Price" class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <p class="text-gray-900 whitespace-no-wrap">${{ $details['food_price'] }}</p>
                                                </td>

                                                <td data-th="Quantity" class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <p class="text-gray-900 whitespace-no-wrap">
                                                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                                                      </p>
                                                </td>

                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">$ {{ $details['food_price'] * $details['quantity'] }}</span>
                                                      </span>
                                                </td>

                                                <td data-th="" class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <p class="text-gray-900 whitespace-no-wrap">
                                                            <button class="btn btn-outline btn-circle btn-sm remove-from-cart">
                                                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                                        class="inline-block w-4 h-4 stroke-current">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                                  </svg>
                                                            </button>
                                                      </p>
                                                </td>
                                          </tr>
                                    @endforeach
                              @endif

                        </tbody>

                        <tfoot>
                              <tr class=" rounded-lg">
                                    <td class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          <a href="{{ url('/') }}" class="btn btn-warning">Continue Shopping</a>
                                          <button class="btn btn-success">Checkout</button>
                                    </td>
                                    <td class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    </td>
                                    <td class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          <span class="text-xl">Total</span>
                                    </td>
                                    <td class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          <div class="badge ml-2 badge-outline">${{ $total }}</div>
                                    </td>
                                    <td class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    </td>
                              </tr>
                        </tfoot>

                  </table>

            </div>

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
