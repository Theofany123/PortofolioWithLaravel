<!DOCTYPE html>
<html lang="en">
  @include('layouts.partials.head')

  <body class="bg-gradient-to-b from-blue-100 to-blue-300 text-gray-800 font-sans">
    @include('layouts.partials.header')

    <main class="p-6">
      @yield('content')
    </main>

    @include('layouts.partials.footer')
  </body>
</html>