@extends('layouts.app')
@section('title', 'About')

@section('content')
<section id="about" class="max-w-6xl mx-auto px-4 md:px-8 py-12 bg-blue-100 overflow-hidden">
  <div class="flex flex-col md:flex-row items-center gap-10">
    <img src="{{ asset('foto/gladys2.png') }}" 
     alt="Foto Profil" 
     class="w-[20rem] h-[20rem] md:w-[24rem] md:h-[24rem] object-contain drop-shadow-2xl" />

    <div class="flex-1">
      <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Halo!</h1>
      <p class="text-lg">
        My name is <span class="text-blue-700 font-medium">Theofany Blessing Gladysia Purwanta</span>
      </p>
      <p class="mb-4 text-lg">
        I am a student at <span class="text-blue-700 font-medium">Ciputra University Makassar</span>, majoring in
        <span class="text-blue-700 font-medium">Informatics - Artificial Intelligence specialization</span>.
      </p>

      <h2 class="text-2xl font-semibold text-blue-800 mb-2">🎓 Education</h2>
      <ul class="space-y-1 text-base">
        <li>2013–2018: SD 060 Polewali</li>
        <li>2018–2021: SMP Negeri 1 Polewali</li>
        <li>2021–2024: SMA Negeri 1 Polewali</li>
        <li>2024–Present: Ciputra University Makassar</li>
      </ul>
    </div>
  </div>

  <hr class="my-12 border-blue-300" />

  <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Hobbies</h2>
  <div id="hobby-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 max-w-5xl mx-auto">
    <div class="hobby-item bg-white shadow-lg rounded-2xl p-10 flex flex-col items-center text-center transition-transform duration-300 hover:scale-105">
      <span class="emoji text-6xl mb-4">🎸🎹</span>
      <p class="text-xl font-semibold text-blue-800">Playing Music</p>
    </div>
    <div class="hobby-item bg-white shadow-lg rounded-2xl p-10 flex flex-col items-center text-center transition-transform duration-300 hover:scale-105">
      <span class="emoji text-6xl mb-4">🎧</span>
      <p class="text-xl font-semibold text-purple-700">Listening to Music</p>
    </div>
    <div class="hobby-item bg-white shadow-lg rounded-2xl p-10 flex flex-col items-center text-center transition-transform duration-300 hover:scale-105">
      <span class="emoji text-6xl mb-4">🏸</span>
      <p class="text-xl font-semibold text-amber-700">Badminton</p>
    </div>
    <div class="hobby-item bg-white shadow-lg rounded-2xl p-10 flex flex-col items-center text-center transition-transform duration-300 hover:scale-105">
      <span class="emoji text-6xl mb-4">🏊</span>
      <p class="text-xl font-semibold text-green-700">Swimming</p>
    </div>
    <div class="hobby-item bg-white shadow-lg rounded-2xl p-10 flex flex-col items-center text-center transition-transform duration-300 hover:scale-105">
      <span class="emoji text-6xl mb-4">😴</span>
      <p class="text-xl font-semibold text-red-600">Sleep</p>
    </div>
    <div class="hobby-item bg-white shadow-lg rounded-2xl p-10 flex flex-col items-center text-center transition-transform duration-300 hover:scale-105">
      <span class="emoji text-6xl mb-4">💃</span>
      <p class="text-xl font-semibold text-pink-700">Dancing</p>
    </div>
  </div>

  <hr class="my-12 border-blue-300" />

  <h2 class="text-3xl font-bold text-blue-900 text-center mb-16">My Experience</h2>

  <div class="relative max-w-4xl mx-auto">
    <div class="absolute left-1/2 top-0 w-1 bg-blue-400 h-full transform -translate-x-1/2"></div>

    <div id="timeline" class="space-y-16">
      <div class="timeline-item relative flex items-center justify-start opacity-0 translate-y-8 transition-all duration-400">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 ml-0 mr-auto">
          <h3 class="text-xl font-bold text-blue-700">Student Academy</h3>
          <p class="text-sm text-gray-600">Sep 2024 – Juni 2025 | Informatic Student Union</p>
        </div>
      </div>

      <div class="timeline-item relative flex items-center justify-end opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 mr-0 ml-auto">
          <h3 class="text-xl font-bold text-blue-700">Connect and Fellowship Division</h3>
          <p class="text-sm text-gray-600">Oct 2024 – Juni 2025 | Faith Diversity Unity</p>
        </div>
      </div>

      <div class="timeline-item relative flex items-center justify-start opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 ml-0 mr-auto">
          <h3 class="text-xl font-bold text-blue-700">Head of the Committe</h3>
          <p class="text-sm text-gray-600">Jun 2025 | Devforge Hackathon UI/UX</p>
        </div>
      </div>

      <div class="timeline-item relative flex items-center justify-end opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 mr-0 ml-auto">
          <h3 class="text-xl font-bold text-blue-700">Core Team</h3>
          <p class="text-sm text-gray-600">Oct 2024 – Present | Google Developer Group On Campus</p>
        </div>
      </div>

      <div class="timeline-item relative flex items-center justify-start opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 ml-0 mr-auto">
          <h3 class="text-xl font-bold text-blue-700">Marketing Division</h3>
          <p class="text-sm text-gray-600">Nov 2024 – May 2025 | Entrance 3.0 UC Makassar</p>
        </div>
      </div>

      <div class="timeline-item relative flex items-center justify-end opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 mr-0 ml-auto">
          <h3 class="text-xl font-bold text-blue-700">AMD / Advice and Mentoring Department</h3>
          <p class="text-sm text-gray-600">Dec 2024 – Sep 2025 | Oweek UC Makassar</p>
        </div>
      </div>

      <div class="timeline-item relative flex items-center justify-start opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 ml-0 mr-auto">
          <h3 class="text-xl font-bold text-blue-700">Event Division</h3>
          <p class="text-sm text-gray-600">Jan 2025 | National Programming Logic Competition</p>
        </div>
      </div>

      <div class="timeline-item relative flex items-center justify-end opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 mr-0 ml-auto">
          <h3 class="text-xl font-bold text-blue-700">Event Division of DevFest</h3>
          <p class="text-sm text-gray-600">Nov 2024 | Google Developer Group</p>
        </div>
      </div>

      <div class="timeline-item relative flex items-center justify-start opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 ml-0 mr-auto">
          <h3 class="text-xl font-bold text-blue-700">Co Lead</h3>
          <p class="text-sm text-gray-600">Sept 2025 – Present | Google Developer Group On Campus UC Makassar</p>
        </div>
      </div>

      <div class="timeline-item relative flex items-center justify-end opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 mr-0 ml-auto">
          <h3 class="text-xl font-bold text-blue-700">President of Organization</h3>
          <p class="text-sm text-gray-600">Jul 2025 – Present | Informatic Student Union</p>
        </div>
      </div>

      <div class="timeline-item relative flex items-center justify-start opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-white shadow-lg rounded-2xl p-6 w-5/12 ml-0 mr-auto">
          <h3 class="text-xl font-bold text-blue-700">Secretary</h3>
          <p class="text-sm text-gray-600">Oktober 2025 – Sekarang | Campjur UC Makassar</p>
        </div>
      </div>
    </div>
  </div>

  <style>
    .timeline-item {
      transition-property: opacity, transform;
      transition-timing-function: ease;
    }

    @keyframes smooth-shake {
      0%, 100% { transform: translateX(0); }
      50% { transform: translateX(5px); }
    }

    .emoji.shake {
      animation: smooth-shake 1.4s ease-in-out infinite;
      display: inline-block;
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const timelineItems = document.querySelectorAll(".timeline-item");
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            timelineItems.forEach((item, index) => {
              setTimeout(() => {
                item.classList.remove("opacity-0", "translate-y-8");
                item.classList.add("opacity-100", "translate-y-0");
              }, index * 400);
            });
            observer.disconnect();
          }
        });
      }, { threshold: 0.3 });

      observer.observe(document.querySelector("#timeline"));

      const hobbySection = document.querySelector("#hobby-list");
      const emojiObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            hobbySection.querySelectorAll(".emoji").forEach((emoji) => {
              emoji.classList.add("shake");
            });
            emojiObserver.disconnect();
          }
        });
      }, { threshold: 0.4 });

      emojiObserver.observe(hobbySection);
    });
  </script>
</section>
@endsection
