<header class="bg-white text-gray-800 shadow-sm border-b border-gray-200">
  <div class="container mx-auto flex justify-between items-center py-4 px-6">
    <h1 class="text-2xl font-extrabold text-blue-700 tracking-wide">
      @blessing.gladysia
    </h1>
    <nav>
      <ul class="flex space-x-8 text-gray-700 font-medium">
        <li>
          <a href="{{ url('/') }}"
             class="{{ request()->is('/') ? 'bg-blue-600 text-white px-4 py-2 rounded-full font-semibold' : 'hover:text-blue-600 transition-colors duration-200' }}">
             Home
          </a>
        </li>
        <li>
          <a href="{{ url('/about') }}"
             class="{{ request()->is('about') ? 'bg-blue-600 text-white px-4 py-2 rounded-full font-semibold' : 'hover:text-blue-600 transition-colors duration-200' }}">
             About
          </a>
        </li>
        <li>
          <a href="{{ url('/project') }}"
             class="{{ request()->is('project') ? 'bg-blue-600 text-white px-4 py-2 rounded-full font-semibold' : 'hover:text-blue-600 transition-colors duration-200' }}">
             Project
          </a>
        </li>
        <li>
          <a href="{{ url('/contact') }}"
             class="{{ request()->is('contact') ? 'bg-blue-600 text-white px-4 py-2 rounded-full font-semibold' : 'hover:text-blue-600 transition-colors duration-200' }}">
             Contact
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>
