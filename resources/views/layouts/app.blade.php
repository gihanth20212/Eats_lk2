<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      @yield('pagestyles')

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      @yield('pagecdns')
</head>

<body class="flex flex-col min-h-screen">

      <div class="flex flex-col h-screen">

            <!-- Body Section -->
            <header class="h-25 bg-white shadow">
                  <!-- Navigation Section -->
                  @include('layouts.partials.navigation')

                  <!-- Page Heading -->
                  <div class="max-w-7xl  grid grid-cols-2 mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}

                        <!-- Cart -->
                        @include('layouts.partials.cart')
                  </div>
            </header>

            <!-- Body Section -->
            <main class="flex-grow py-12 bg-gray-200">
                  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                              <x-alerts class="mb-4" :errors="$errors" />

                              @yield('content')

                        </div>
                  </div>
            </main>

            <!-- Footer section -->
            <footer class="h-25 p-10 footer bg-neutral text-neutral-content">
                  @include('layouts.partials.footer')
            </footer>

            {{-- Scripts --}}
            @yield('scripts')

      </div>
      @include('layouts.partials.scripts')
</body>

</html>
