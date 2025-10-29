@extends('layouts.app')
@section('title', 'Projects')

@section('content')
<section class="min-h-screen max-w-6xl mx-auto px-4 md:px-8 py-20">
  <h2 class="text-4xl font-bold text-center text-blue-900 mb-12">My Projects</h2>

  @foreach ($projects as $project)
    <div class="bg-white rounded-2xl shadow-md p-6 mb-10">
      <h3 class="text-xl font-semibold text-blue-800 mb-4">{{ $project->title }}</h3>

      @if ($project->image_prefix)
        <div class="relative overflow-hidden rounded-xl border border-gray-300 p-6">
          <div class="flex items-center overflow-hidden">
            <div class="flex items-stretch transition-transform duration-700 ease-in-out">
              @for ($i = 1; $i <= $project->image_count; $i++)
                <div class="flex-shrink-0 w-64 mr-4 bg-gray-50 rounded-lg p-3 shadow">
                  <img 
                    src="{{ asset('foto/' . $project->image_prefix . $i . '.png') }}" 
                    alt="{{ $project->image_prefix . $i }}" 
                    class="w-full h-40 object-contain rounded-md"
                    onerror="this.style.display='none';"
                  />
                </div>
              @endfor
            </div>
          </div>
        </div>
      @endif

      @if ($project->code)
        <div class="bg-gray-100 rounded-xl p-4 border border-gray-300 overflow-auto max-h-96 mt-6">
          <pre class="text-sm font-mono whitespace-pre-wrap">{{ $project->code }}</pre>
        </div>
      @endif
    </div>
  @endforeach

</section>

<script>
function setupPingPongSlider(id, step = 1, interval = 2000) {
  const slider = document.getElementById(id);
  if (!slider) return;

  const slides = slider.children.length;
  let index = 0;
  let direction = 1; 

  const stepSize = slider.children[0].getBoundingClientRect().width + 16; 

  setInterval(() => {
    index += step * direction;

    if (index >= slides - 3) direction = -1;
    if (index <= 0) direction = 1;

    slider.style.transition = "transform 1.5s ease-in-out";
    slider.style.transform = translateX(-${index * stepSize}px);
  }, interval);
}

document.addEventListener('DOMContentLoaded', () => {
  setupPingPongSlider('slider1');
  setupPingPongSlider('slider2');
  setupPingPongSlider('slider3');
});
</script>

@endsection