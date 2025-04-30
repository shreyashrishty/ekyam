@extends('layouts.app')
@section('title','About')

@section('content')
  {{-- Hero Banner --}}
  <div class="relative overflow-hidden min-h-[60vh] flex items-center justify-center text-center px-6 bg-gradient-to-r from-indigo-600 to-purple-600">
    {{-- Background photo (soft overlay) --}}
    <div
  class="absolute inset-0 opacity-20 bg-cover bg-center"
  style="background-image: url('{{ asset("images/about-bg.jpg") }}');"
></div>


    {{-- Hero content --}}
    <div class="relative z-10 max-w-3xl">
      <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4 animate-fade-in-up">
        About <span class="text-yellow-300">EKYAM</span>
      </h1>
      <p class="text-lg md:text-xl text-white/90 mb-8 animate-fade-in">
        We unite diverse communities through shared projects, resources & innovation—empowering change from the ground up.
      </p>
      <a
        href="/projects"
        class="inline-block bg-yellow-400 text-gray-900 font-semibold px-8 py-3 rounded-full hover:bg-yellow-300 transition animate-bounce">
        🚀 Explore Our Projects
      </a>
    </div>
  </div>

  {{-- Mission & Vision --}}
  <section class="max-w-7xl mx-auto py-20 px-6 grid md:grid-cols-2 gap-12">
    {{-- Text Cards --}}
    <div class="space-y-10">
      <div class="flex items-start gap-4 animate-fade-in">
        <div class="text-yellow-400 text-3xl">🎯</div>
        <div>
          <h2 class="text-2xl font-semibold mb-2">Our Mission</h2>
          <p class="text-gray-700 leading-relaxed">
            To foster lasting unity by equipping communities with the tools, guidance, and network they need to collaborate effectively and conducted workshops and training to build local leadership skills. Provide digital tools and platforms for resource-sharing and help to foster mentorship programs connecting experienced and emerging community leaders. ALso, Amplify under-represented voices by offering grants and visibility.
          </p>
        </div>
      </div>
      <div class="flex items-start gap-4 animate-fade-in delay-200">
        <div class="text-blue-400 text-3xl">🌟</div>
        <div>
          <h2 class="text-2xl font-semibold mb-2">Our Vision</h2>
          <p class="text-gray-700 leading-relaxed">
            A world where every community—big or small—thrives through shared innovation, sustainable projects, and collective impact and Create a global network of thriving, self-sufficient communities. Enable grassroots projects that address local and global challenges and Shape policy and public discourse through community-led research.
          </p>
        </div>
      </div>
    </div>

    {{-- Team Photo --}}
    <div class="relative animate-pulse">
    <img
  src="{{ asset('images/about-team.jpg') }}"
  alt="EKYAM Team"
  class="w-full h-auto rounded-xl shadow-lg object-cover"
/>

    </div>
  </section>

  {{-- Core Values --}}
  <section class="bg-gray-50 py-16">
    <div class="max-w-5xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-6 animate-fade-in-up">Our Core Values</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition animate-fade-in">
          <h3 class="text-xl font-semibold mb-2">Collaboration</h3>
          <p class="text-gray-600">Working side by side to achieve shared goals.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition animate-fade-in delay-200">
          <h3 class="text-xl font-semibold mb-2">Innovation</h3>
          <p class="text-gray-600">Embracing new ideas to strengthen community bonds.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition animate-fade-in delay-400">
          <h3 class="text-xl font-semibold mb-2">Impact</h3>
          <p class="text-gray-600">Driving positive change one project at a time.</p>
        </div>
      </div>
    </div>
  </section>
@endsection
