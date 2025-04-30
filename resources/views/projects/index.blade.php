@extends('layouts.app')
@section('title','Projects')

@section('content')
<div class="relative min-h-[90vh] py-20 px-6 overflow-hidden">

  {{-- Animated gradient background --}}
  <div class="absolute inset-0 animate-gradient opacity-30"></div>

  {{-- Faded image overlay --}}
  <div
    class="absolute inset-0 bg-cover bg-center opacity-20"
    style="background-image: url('{{ asset('images/projects-bg.jpg') }}');">
  </div>

  {{-- Main container --}}
  <div class="relative z-10 max-w-7xl mx-auto">

    {{-- Header & Add button --}}
    <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-4">
      <h1 class="text-4xl font-bold text-black drop-shadow-lg animate-fade-in-up">
        Community Projects
      </h1>
      <a
        href="{{ route('projects.create') }}"
        class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full shadow-lg transition transform hover:-translate-y-1 animate-bounce"
      >
        ➕ Add New Project
      </a>
    </div>

    {{-- Success message --}}
    @if(session('success'))
      <div class="bg-green-100 border border-green-400 text-green-800 px-4 py-3 rounded mb-8 animate-fade-in">
        {{ session('success') }}
      </div>
    @endif

    {{-- Projects grid --}}
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      @forelse($projects as $project)
        <div
          class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 animate-fade-in"
        >
          <h2 class="text-2xl font-semibold mb-2 text-gray-900">{{ $project->title }}</h2>
          <p class="text-gray-600 mb-4">{{ $project->description }}</p>
          <div class="flex gap-4">
            <a
              href="{{ route('projects.edit',$project->id) }}"
              class="text-blue-600 hover:underline font-medium"
            >
              Edit
            </a>
            <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
              @csrf @method('DELETE')
              <button
                onclick="return confirm('Are you sure?')"
                class="text-red-600 hover:underline font-medium"
              >
                Delete
              </button>
            </form>
          </div>
        </div>
      @empty
        <p class="col-span-full text-center text-gray-200 animate-fade-in">
          No projects yet. Hit “Add New Project” above to get started!
        </p>
      @endforelse
    </div>
  </div>
</div>
@endsection
