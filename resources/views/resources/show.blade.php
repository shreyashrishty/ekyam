@extends('layouts.app')
@section('title', $item->title)

@section('content')
<div class="max-w-4xl mx-auto py-20 px-6 bg-gray-50 rounded-lg shadow-lg space-y-10">

  {{-- Title & Description --}}
  <header class="text-center">
    <h1 class="text-4xl font-bold mb-4">{{ $item->title }}</h1>
    <p class="text-lg text-gray-700">{{ $item->description }}</p>
  </header>

  {{-- Sections --}}
  @foreach($item->sections as $sec)
    <section class="space-y-2 animate-fade-in-up">
      <h2 class="text-2xl font-semibold text-indigo-600">{{ $sec['heading'] }}</h2>
      <p class="text-gray-700 leading-relaxed">{!! $sec['body'] !!}</p>
    </section>
  @endforeach

  {{-- Download Button --}}
  @if(!empty($item->download))
    <div class="text-center">
      <a
        href="{{ $item->download }}"
        class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-full transition animate-bounce"
        download
      >
        ⬇️ Download Full PDF
      </a>
    </div>
  @endif

  {{-- Back Link --}}
  <footer class="text-center">
    <a
      href="{{ route('resources.index') }}"
      class="text-blue-600 hover:underline font-medium"
    >
      ← Back to Resources
    </a>
  </footer>

</div>
@endsection
