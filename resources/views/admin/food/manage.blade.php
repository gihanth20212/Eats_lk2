<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Food Management') }}
            </h2>
      </x-slot>

      @section('content')

            <a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Go Back</a>
            <a href="{{ route('fooditems.create') }}" class="btn btn-success" role="button">Create New FoodItem</a>

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
                              @foreach ($fooditems as $fooditem)
                                    <tr>
                                          <td>{{ $fooditem->rest_id }}</td>
                                          <td>{{ $fooditem->rest_name }}</td>
                                          <td>{{ $fooditem->rest_category }}</td>
                                          <td>{{ $fooditem->rest_address }}</td>
                                          <td>{{ $fooditem->rest_city }}</td>
                                          <td>{{ $fooditem->rest_charge }}</td>
                                          <td>{{ $fooditem->rest_desc }}</td>
                                          <td>{{ $fooditem->rest_web }}</td>
                                          <td><img src="{{ $fooditem->rest_logo }}"></td>
                                          <td><img src="{{ $fooditem->rest_cover }}"></td>
                                          <td>
                                                <a class="btn btn-sm btn-info" href="{{ route('admin.rest.show', $user->id) }}">Show</a>
                                                <a class="btn btn-sm btn-primary" href="{{ route('admin.rest.edit', $user->id) }}">Edit</a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.rest.destroy', $user->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                                {!! Form::close() !!}
                                          </td>
                                    </tr>
                              @endforeach
                        </tbody>

                  </table>
            </div>

            {!! $fooditems->links() !!}

      @endsection

</x-app-layout>
