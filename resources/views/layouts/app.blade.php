<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Portofolio Theofany')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html { scroll-behavior: smooth; }
    .nav-link.active {
      color: #2563eb !important; 
      font-weight: 700;
      border-bottom: 2px solid #2563eb;
    }
  </style>
</head>
<body class="bg-gradient-to-b from-blue-100 to-blue-300 text-gray-800 font-sans">

  <nav class="bg-white shadow-md py-4 sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center px-4 sm:px-6">
      <div class="text-xl sm:text-2xl font-bold text-blue-700">HELLO ^^</div>
      <div class="space-x-4 text-sm sm:text-base">
        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('project') }}" class="nav-link {{ request()->routeIs('project') ? 'active' : '' }}">Project</a>
        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
      </div>
    </div>
  </nav>

  <div class="p-6">
    @yield('content')
  </div>

</body>
</html>
