@extends('layouts.app')
@section('title','Communities')

@section('content')
<div class="relative min-h-[90vh] py-20 px-6 overflow-hidden">
  <div class="absolute inset-0 animate-gradient opacity-30"></div>
  <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('{{ asset('images/communities-bg.jpg') }}');"></div>
  <div class="relative z-10 max-w-7xl mx-auto">
    <h1 class="text-4xl font-bold text-black mb-12 animate-fade-in-up">Our Communities</h1>
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      @foreach($communities as $slug => $comm)
        <a href="{{ route('communities.show',$slug) }}" class="block transform hover:-translate-y-2 transition animate-fade-in">
          <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl">
            <h2 class="text-2xl font-semibold mb-2">{{ $comm->name }}</h2>
            <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($comm->overview, 80) }}</p>
            <span class="text-blue-600 hover:underline font-medium mt-2 inline-block">Learn More →</span>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</div>
@endsection