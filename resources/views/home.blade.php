@extends('layouts.app')
@section('title','Home')

@section('content')
<div class="relative overflow-hidden min-h-[90vh] flex flex-col justify-center items-center text-center text-white px-6 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-600">

  {{-- Faded bg image --}}
  <div class="absolute inset-0 opacity-20 bg-cover bg-center"
       style="background-image:url('/ekyam/public/images/hero-bg.jpg');"></div>

  {{-- Hero content --}}
  <div class="relative z-10 max-w-4xl">
    <h1 class="text-5xl md:text-7xl font-extrabold mb-6 animate-fade-in-up">
      Welcome to <span class="text-yellow-300">EKYAM</span>
    </h1>
    <p class="text-lg md:text-2xl text-white/90 mb-10 animate-fade-in">
      Fostering unity and collaboration among diverse communities through shared projects and innovation.
    </p>
    <div class="flex flex-col md:flex-row gap-6 justify-center">
      <a href="/projects" class="bg-white text-blue-700 font-bold px-8 py-4 rounded-full hover:bg-gray-100 hover:scale-105 transition-transform duration-300">
        🚀 Explore Projects
      </a>
      <a href="/contact" class="bg-yellow-400 text-gray-900 font-bold px-8 py-4 rounded-full hover:bg-yellow-300 hover:scale-105 transition-transform duration-300">
        📞 Contact Us
      </a>
    </div>
  </div>

  {{-- Counters --}}
  <div class="absolute bottom-10 w-full flex justify-center gap-10 text-center">
    <div><h2 class="text-4xl font-bold animate-bounce">50+</h2><p class="text-sm">Projects Completed</p></div>
    <div><h2 class="text-4xl font-bold animate-bounce">20+</h2><p class="text-sm">Active Communities</p></div>
    <div><h2 class="text-4xl font-bold animate-bounce">1000+</h2><p class="text-sm">People Impacted</p></div>
  </div>

</div>
@endsection
