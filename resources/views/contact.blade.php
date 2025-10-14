@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<section class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-blue-50 via-indigo-100 to-purple-100 py-20 px-6 overflow-hidden relative">

  <h2 class="text-5xl font-extrabold text-blue-900 mb-16 text-center tracking-wide animate-fadeIn">
    Contact Me 🤝
  </h2>
  <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-2 gap-10">
    <div class="space-y-10">
      <div id="contact-cards" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <a href="https://wa.me/628xxxxxxxxxx" target="_blank"
           class="contact-card bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-lg border border-blue-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
          <div class="flex flex-col items-center">
            <img src="https://img.icons8.com/color/96/whatsapp--v1.png" class="w-14 h-14 mb-3 animate-float" />
            <h3 class="text-lg font-semibold text-green-600">WhatsApp</h3>
            <p class="text-gray-600 text-sm mt-1">08xxxxxxxxxx</p>
          </div>
        </a>

        <a href="https://instagram.com/theofany.gladys" target="_blank"
           class="contact-card bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-lg border border-pink-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
          <div class="flex flex-col items-center">
            <img src="https://img.icons8.com/fluency/96/instagram-new.png" class="w-14 h-14 mb-3 animate-float-delay" />
            <h3 class="text-lg font-semibold text-pink-500">Instagram</h3>
            <p class="text-gray-600 text-sm mt-1">@theofany.gladys</p>
          </div>
        </a>

        <a href="mailto:theofany@example.com"
           class="contact-card bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-lg border border-blue-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
          <div class="flex flex-col items-center">
            <img src="https://img.icons8.com/color/96/apple-mail.png" class="w-14 h-14 mb-3 animate-float" />
            <h3 class="text-lg font-semibold text-blue-500">Email</h3>
            <p class="text-gray-600 text-sm mt-1">theofany@example.com</p>
          </div>
        </a>

        <a href="https://github.com/Theofany123" target="_blank"
           class="contact-card bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-lg border border-gray-200 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
          <div class="flex flex-col items-center">
            <img src="https://img.icons8.com/ios-glyphs/96/github.png" class="w-14 h-14 mb-3 animate-float-delay" />
            <h3 class="text-lg font-semibold text-gray-800">GitHub</h3>
            <p class="text-gray-600 text-sm mt-1">github.com/Theofany123</p>
          </div>
        </a>
      </div>

      <div class="bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl p-6 border border-indigo-200 text-center animate-fadeIn">
        <h3 class="text-2xl font-bold text-blue-800 mb-3">📍 My Location</h3>
        <p class="text-gray-600 mb-4">Currently in <span class="font-semibold text-indigo-600">Makassar, Indonesia</span></p>
        <iframe
          src="https://www.google.com/maps?q=Makassar&output=embed"
          class="w-full h-56 rounded-xl border border-gray-300 shadow-md">
        </iframe>
      </div>
    </div>

    <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-10 border border-blue-200 animate-fadeIn">
      <h3 class="text-3xl font-bold text-blue-800 mb-6 text-center">💬 Send Me a Message</h3>
      <form class="space-y-6">
        <div>
          <label class="block text-left text-gray-700 font-medium mb-2">Your Name</label>
          <input type="text" class="w-full p-3 rounded-lg border border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-100 transition" placeholder="Enter your name" />
        </div>
        <div>
          <label class="block text-left text-gray-700 font-medium mb-2">Your Email</label>
          <input type="email" class="w-full p-3 rounded-lg border border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-100 transition" placeholder="Enter your email" />
        </div>
        <div>
          <label class="block text-left text-gray-700 font-medium mb-2">Message</label>
          <textarea class="w-full p-3 rounded-lg border border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-100 transition" rows="4" placeholder="Write your message..."></textarea>
        </div>
        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold py-3 rounded-full shadow-md hover:shadow-xl transition-transform hover:-translate-y-1">
          Send Message ✉️
        </button>
      </form>
    </div>
  </div>

  <div class="mt-16 text-center text-gray-500 text-sm animate-fadeIn delay-700">
    © 2025 Theofany Blessing Gladysia Purwanta. All rights reserved.
  </div>

  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
      animation: fadeIn 1.2s ease forwards;
    }
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-8px); }
    }
    .animate-float {
      animation: float 3s ease-in-out infinite;
    }
    .animate-float-delay {
      animation: float 3s ease-in-out 1.5s infinite;
    }
    .contact-card {
      opacity: 0;
      transform: translateY(40px);
    }
    .contact-card.show {
      opacity: 1;
      transform: translateY(0);
      transition: all 0.8s ease;
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const cards = document.querySelectorAll(".contact-card");
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) entry.target.classList.add("show");
        });
      }, { threshold: 0.2 });
      cards.forEach(card => observer.observe(card));
    });
  </script>

</section>
@endsection
