<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Welcome To EATS.LK') }}
            </h2>
      </x-slot>

      @section('content')

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 sm:gap-6">
                  @include('layouts.home')
            </div>

      @endsection

</x-app-layout>
