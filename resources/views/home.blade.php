@extends('layouts.app')
@section('title', 'Home')

@section('content')
<section class="flex flex-col items-center justify-center text-center min-h-screen">
  <h1 class="text-4xl font-bold mb-2">HELLO, I'M</h1>
  <p id="typing-name" class="text-blue-500 text-xl mb-6 h-8"></p>
  <img src="{{ asset('foto/gladys.png') }}" alt="Profile Photo" class="w-64 mb-6" />
  <a href="{{ route('about') }}">
    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full mb-2 transition-transform hover:-translate-y-1">
      Get To Know About Me
    </button>
  </a>
</section>

<script>
  function typeText(el, text, speed = 80) {
    let i = 0;
    el.textContent = '';
    function typing() {
      if (i < text.length) {
        el.textContent += text.charAt(i);
        i++;
        setTimeout(typing, speed);
      }
    }
    typing();
  }

  window.addEventListener('load', () => {
    const el = document.getElementById('typing-name');
    typeText(el, 'Theofany Blessing Gladysia Purwanta');
  });
</script>
@endsection
