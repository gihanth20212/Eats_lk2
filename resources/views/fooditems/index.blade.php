<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Roles and Permissions') }}
            </h2>
      </x-slot>

      @section('content')
            <div class="row">
                  <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                              <h2>Products</h2>
                        </div>
                        <div class="pull-right">
                              @can('fooditem-create')
                                    <a class="btn btn-success" href="{{ route('fooditems.create') }}"> Create New Product</a>
                              @endcan
                        </div>
                  </div>
            </div>


            @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                        <p>{{ $message }}</p>
                  </div>
            @endif


            <table class="table table-bordered">
                  <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th width="280px">Action</th>
                  </tr>
                  @foreach ($fooditems as $fooditem)
                        <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $fooditem->name }}</td>
                              <td>{{ $fooditem->detail }}</td>
                              <td>
                                    <form action="{{ route('fooditems.destroy', $fooditem->id) }}" method="POST">
                                          <a class="btn btn-info" href="{{ route('fooditems.show', $fooditem->id) }}">Show</a>
                                          @can('fooditem-edit')
                                                <a class="btn btn-primary" href="{{ route('fooditems.edit', $fooditem->id) }}">Edit</a>
                                          @endcan


                                          @csrf
                                          @method('DELETE')
                                          @can('fooditem-delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                          @endcan
                                    </form>
                              </td>
                        </tr>
                  @endforeach
            </table>


            {!! $fooditems->links() !!}



      @endsection

</x-app-layout>
