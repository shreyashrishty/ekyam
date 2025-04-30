{{-- resources/views/resources/index.blade.php --}}
@extends('layouts.app')
@section('title','Resources')

@section('content')
<div class="relative min-h-[90vh] py-20 px-6 overflow-hidden">

  {{-- Animated gradient backdrop --}}
  <div class="absolute inset-0 animate-gradient opacity-30"></div>

  {{-- Faded background image overlay --}}
  <div
    class="absolute inset-0 bg-cover bg-center opacity-20"
    style="background-image: url('{{ asset('images/resources-bg.jpg') }}');">
  </div>

  {{-- Main content container --}}
  <div class="relative z-10 max-w-7xl mx-auto">

    {{-- Page header --}}
    <h1 class="text-4xl font-bold text-black drop-shadow-lg mb-12 animate-fade-in-up">
      Community Resources
    </h1>

    {{-- Resource cards grid --}}
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      
      {{-- Card 1 --}}
      <a href="{{ route('resources.show', ['resource' => 'handbook']) }}"
         class="block transform hover:-translate-y-2 transition animate-fade-in">
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl">
          <h2 class="text-2xl font-semibold mb-2">Community Building Handbook</h2>
          <p class="text-gray-600 mb-4">
            A step-by-step guide for organizers to foster strong, engaged communities.
          </p>
          <span class="text-blue-600 hover:underline font-medium">Learn More →</span>
        </div>
      </a>

      {{-- Card 2 --}}
      <a href="{{ route('resources.show', ['resource' => 'volunteer-templates']) }}"
         class="block transform hover:-translate-y-2 transition animate-fade-in delay-200">
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl">
          <h2 class="text-2xl font-semibold mb-2">Volunteer Management Templates</h2>
          <p class="text-gray-600 mb-4">
            Ready-to-use forms and checklists to recruit, train, and appreciate volunteers.
          </p>
          <span class="text-blue-600 hover:underline font-medium">Learn More →</span>
        </div>
      </a>

      {{-- Card 3 --}}
      <a href="{{ route('resources.show', ['resource' => 'opensource-guidelines']) }}"
         class="block transform hover:-translate-y-2 transition animate-fade-in delay-400">
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl">
          <h2 class="text-2xl font-semibold mb-2">Open Source Project Guidelines</h2>
          <p class="text-gray-600 mb-4">
            Best practices for launching and scaling open-source community-driven projects.
          </p>
          <span class="text-blue-600 hover:underline font-medium">Learn More →</span>
        </div>
      </a>

    </div>
  </div>
</div>
@endsection
