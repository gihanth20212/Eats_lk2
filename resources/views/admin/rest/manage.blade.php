<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Restaurant Management') }}
            </h2>
      </x-slot>

      @section('content')

            <a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Go Back</a>
            <a href="{{ route('restaurant.create') }}" class="btn btn-success" role="button">Create New Restaurant</a>

            <div class="overflow-x-auto my-6">
                  <table class="table w-full border-b border-gray-200 shadow">
                        <thead class="bg-prime">
                              <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Charge</th>
                                    <th>Desc</th>
                                    <th>Web</th>
                                    <th>Logo</th>
                                    <th>Actions</th>
                              </tr>
                        </thead>

                        <tbody>
                              @foreach ($restaurants as $restaurant)
                                    <tr>
                                          <td>{{ $restaurant->rest_id }}</td>
                                          <td>{{ $restaurant->rest_name }}</td>
                                          <td>{{ $restaurant->rest_category }}</td>
                                          <td>{{ $restaurant->rest_address }}</td>
                                          <td>{{ $restaurant->rest_city }}</td>
                                          <td>{{ $restaurant->rest_charge }}</td>
                                          <td>{{ $restaurant->rest_desc }}</td>
                                          <td>{{ $restaurant->rest_web }}</td>
                                          <td><img src="{{ $restaurant->rest_logo }}"></td>
                                          <td><img src="{{ $restaurant->rest_cover }}"></td>
                                          <td>
                                                {{-- <a class="btn btn-sm btn-info" href="{{ route('admin.rest.show', $user->id) }}">Show</a>
                                                <a class="btn btn-sm btn-primary" href="{{ route('admin.rest.edit', $user->id) }}">Edit</a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.rest.destroy', $user->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                                {!! Form::close() !!} --}}
                                          </td>
                                    </tr>
                              @endforeach
                        </tbody>

                  </table>
            </div>

            {!! $restaurants->links() !!}

      @endsection

</x-app-layout>
