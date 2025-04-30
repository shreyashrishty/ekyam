@extends('layouts.app')
@section('title','Dashboard')

@section('content')
<div class="max-w-7xl mx-auto py-20 px-6 bg-gray-50">
  <h1 class="text-4xl font-bold mb-10 text-center">Welcome, {{ Auth::user()->name }}!</h1>
  <div class="grid md:grid-cols-3 gap-8 text-center">
    <a href="/projects" class="bg-blue-600 text-white p-8 rounded-xl shadow-md hover:bg-blue-700 transition">
      <h2 class="text-2xl font-semibold mb-2">Manage Projects</h2>
      <p>View & update your community projects.</p>
    </a>
    <a href="/resources" class="bg-green-600 text-white p-8 rounded-xl shadow-md hover:bg-green-700 transition">
      <h2 class="text-2xl font-semibold mb-2">View Resources</h2>
      <p>Access shared materials & guides.</p>
    </a>
    <a href="/communities" class="bg-purple-600 text-white p-8 rounded-xl shadow-md hover:bg-purple-700 transition">
      <h2 class="text-2xl font-semibold mb-2">Join Communities</h2>
      <p>Collaborate with like-minded groups.</p>
    </a>
  </div>
</div>
@endsection
