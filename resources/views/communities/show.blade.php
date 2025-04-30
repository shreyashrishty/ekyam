@extends('layouts.app')
@section('title', $community->name)

@section('content')
  <div class="relative bg-gradient-to-r from-green-400 to-blue-500 min-h-[50vh] flex items-center justify-center text-white text-center px-6">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('{{ $community->hero_image }}');"></div>
    <div class="relative z-10 max-w-3xl">
      <h1 class="text-5xl font-extrabold mb-4 animate-fade-in-up">{{ $community->name }}</h1>
      <p class="text-lg md:text-xl mb-8 animate-fade-in">{{ $community->overview }}</p>
      <p class="text-white/90 mb-12">{{ $community->details }}</p>
    </div>
  </div>
  <section class="max-w-4xl mx-auto py-16 px-6 space-y-12">
    <div>
      <h2 class="text-2xl font-semibold mb-4">Key Activities</h2>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        @foreach($community->activities as $act)
          <li>{{ $act }}</li>
        @endforeach
      </ul>
    </div>
    <div>
      <h2 class="text-2xl font-semibold mb-4">Our Impact</h2>
      <p class="text-gray-700">{{ $community->impact }}</p>
    </div>
  </section>
@endsection