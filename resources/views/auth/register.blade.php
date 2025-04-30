@extends('layouts.app')
@section('title','Sign Up')

@section('content')
<div class="relative min-h-screen bg-gradient-to-r from-green-400 to-blue-500 flex items-center justify-center px-6 py-12">

  <!-- Optional Image Overlay -->
  <div
    class="absolute inset-0 opacity-20 bg-cover bg-center"
    style="background-image: url('{{ asset('images/register-bg.jpg') }}');"
  ></div>

  <!-- Registration Form Card -->
  <div class="relative z-10 w-full max-w-md bg-white bg-opacity-90 rounded-2xl shadow-lg px-8 py-10 animate-fade-in-up">
    <h2 class="text-2xl font-bold text-center mb-6">Create Your Account</h2>

    <form method="POST" action="{{ route('register') }}" novalidate>
  @csrf

  {{-- Global validation errors --}}
  @if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-800 rounded">
      <ul class="list-disc list-inside text-sm">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- Name --}}
  <div class="mb-4">
    <label for="name" class="block text-sm font-medium mb-1">Full Name</label>
    <input
      id="name"
      name="name"
      type="text"
      value="{{ old('name') }}"
      required
      class="w-full border rounded p-2 focus:ring-2 focus:ring-green-500"
    >
    @error('name')
      <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>

  {{-- Email --}}
  <div class="mb-4">
    <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
    <input
      id="email"
      name="email"
      type="email"
      value="{{ old('email') }}"
      required
      class="w-full border rounded p-2 focus:ring-2 focus:ring-green-500"
    >
    @error('email')
      <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>

  {{-- Password --}}
  <div class="mb-4">
    <label for="password" class="block text-sm font-medium mb-1">Password</label>
    <input
      id="password"
      name="password"
      type="password"
      required
      minlength="8"
      class="w-full border rounded p-2 focus:ring-2 focus:ring-green-500"
    >
    @error('password')
      <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>

  {{-- Confirm Password --}}
  <div class="mb-6">
    <label for="password_confirmation" class="block text-sm font-medium mb-1">Confirm Password</label>
    <input
      id="password_confirmation"
      name="password_confirmation"
      type="password"
      required
      minlength="8"
      class="w-full border rounded p-2 focus:ring-2 focus:ring-green-500"
    >
  </div>

  <button
    type="submit"
    class="w-full bg-green-600 text-white py-2 rounded-full hover:bg-green-700 transition animate-bounce"
  >
    Sign Up
  </button>
</form>


    <p class="mt-6 text-center text-sm text-gray-600">
      Already have an account?
      <a href="{{ route('login') }}" class="text-green-600 hover:underline">Login</a>
    </p>
  </div>
</div>
@endsection
