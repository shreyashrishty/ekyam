@extends('layouts.app')
@section('title','Contact Us')

@section('content')
<div class="relative overflow-hidden min-h-[80vh] bg-gradient-to-r from-yellow-300 via-red-300 to-pink-300 py-20 px-6 text-gray-900">

    <!-- Background Image Overlay -->
    <div
        class="absolute inset-0 opacity-20 bg-cover bg-center"
        style="background-image: url('{{ asset('images/contact-bg.jpg') }}');"
    ></div>

    <div class="relative z-10 max-w-4xl mx-auto">
        <!-- Heading -->
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 animate-fade-in-up">
            Get in Touch
        </h1>
        <p class="text-lg md:text-xl text-white/90 mb-10 animate-fade-in">
            Have questions, ideas, or want to collaborate? Fill out the form
            below or reach us directly.
        </p>

        <!-- Contact Info Cards -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white bg-opacity-80 p-6 rounded-2xl shadow-lg animate-fade-in">
                <h2 class="text-2xl font-semibold mb-2">Email Us</h2>
                <p>
                    <a
                        href="mailto:contact@ekyam.com"
                        class="text-blue-600 hover:underline"
                    >
                        contact@ekyam.com
                    </a>
                </p>
            </div>
            <div class="bg-white bg-opacity-80 p-6 rounded-2xl shadow-lg animate-fade-in delay-200">
                <h2 class="text-2xl font-semibold mb-2">Call Us</h2>
                <p>+91 9334313051</p>
            </div>
        </div>

        <!-- Contact Form -->
        <form
            action="{{ route('contact.submit') }}"
            method="POST"
            class="bg-white bg-opacity-90 p-8 rounded-2xl shadow-lg animate-fade-in delay-400"
        >
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="name" class="block text-sm font-medium mb-1">Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        required
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Your Name"
                    >
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium mb-1">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        required
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="you@example.com"
                    >
                </div>
            </div>
            <div class="mb-6">
                <label for="message" class="block text-sm font-medium mb-1">Message</label>
                <textarea
                    id="message"
                    name="message"
                    rows="5"
                    required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Your message..."
                ></textarea>
            </div>
            <div class="text-center">
                <button
                    type="submit"
                    class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition animate-bounce"
                >
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
